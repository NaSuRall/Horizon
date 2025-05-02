<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{

    public function index(){
        $marques = Marque::all();
        $users = User::all();
        $products = Product::all();

//        $userss = Cache::get('online-users', []);
//        $onlineCount = count($userss);
        return view('dashboard.dashboard', compact('marques','users','products'));
    }
}
