<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SidebarController extends Controller
{
    public function index()
    {
        // Mengambil semua data user
        $users = User::all();

        return view('layouts.user-sidebar', compact('users'));
    }
}
