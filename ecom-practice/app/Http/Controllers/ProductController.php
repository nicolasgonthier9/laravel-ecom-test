<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {

    }

    public function show($id)
    {
        $product = DB::selectOne('SELECT * FROM products WHERE id = ?', [$id]);
        return view('product', ['product' => $product]);
    }
}
