<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Service;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'totalUsers' => User::count(),
            'totalServices' => Service::count(),
            'totalRoles' => Role::count(),
            'totalDocuments' => class_exists(Document::class) ? Document::count() : 0,
        ]);
    }
}
