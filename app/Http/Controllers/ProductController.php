<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        $marques = Marque::all();
        $products = Product::all();
        return view('product.index', compact('products','marques'));
    }
}
