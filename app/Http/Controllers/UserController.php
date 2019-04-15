<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductsPhoto;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {

        $product = DB::table('products_photos')
            ->join('products','products_photos.product_id','=','products.id')->get();

        return view('users.browse', compact('product'));

    }

}
