<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalUsers' => User::count(),
            'totalServices' => 6,
            'totalRoles' => 4,
            'totalDocuments' => 58,
        ]);
    }
}
