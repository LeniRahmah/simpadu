<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $data = ['nama' => "Leni", 'foto' => 'leni.jpg'];
        return view('dashboard', compact('data'));
    }
}
