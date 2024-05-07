<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function navbar(){
        $data = User::all();
        return view('admin.header', compact('data'));
    }
}
