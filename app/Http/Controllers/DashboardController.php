<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $marques = Marque::all();
        return view('dashboard.dashboard', compact('marques'));
    }
}
