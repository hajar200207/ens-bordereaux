<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function index(): View
    {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            $onlineThreshold = now()->subMinutes(10)->timestamp;

            $onlineSessions = DB::table('sessions')
                ->select('user_id', DB::raw('MAX(last_activity) as last_activity'))
                ->whereNotNull('user_id')
                ->where('last_activity', '>=', $onlineThreshold)
                ->groupBy('user_id')
                ->orderByDesc('last_activity')
                ->get();

            $onlineUserIds = $onlineSessions->pluck('user_id')->toArray();

            $onlineUsers = User::with(['service', 'roles'])
                ->whereIn('id', $onlineUserIds)
                ->get()
                ->map(function ($u) use ($onlineSessions) {
                    $session = $onlineSessions->firstWhere('user_id', $u->id);
                    $u->online_last_activity = $session
                        ? \Carbon\Carbon::createFromTimestamp($session->last_activity)
                        : null;

                    return $u;
                })
                ->sortByDesc('online_last_activity')
                ->values();

            return view('dashboard.admin', [
                'totalUsers' => User::count(),
                'totalDocuments' => class_exists(Document::class) ? Document::count() : 0,
                'totalServices' => Service::count(),
                'totalRoles' => Role::count(),
                'onlineUsers' => $onlineUsers,
                'onlineUsersCount' => $onlineUsers->count(),
            ]);
        }

        if ($user->hasRole('directeur')) {
            return view('dashboard.directeur');
        }

        if ($user->hasAnyRole([
            'service_communication',
            'service_informatique',
            'service_scolarite',
            'service_financier',
        ])) {
            return view('dashboard.service');
        }

        if ($user->hasAnyRole(['secretariat_general', 'secretariat_directeur'])) {
            return view('dashboard.secretariat');
        }

        return view('dashboard.index');
    }
}
