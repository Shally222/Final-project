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
            ->join('products', 'products_photos.product_id', '=', 'products.id')->get();

            return view('users.browse', compact('product'));

    }

    public function necklace(){

        $product = DB::table('products')->where('type','LIKE','%'.'Necklace'.'%')
            ->join('products_photos','products.id','=','products_photos.product_id')->get();

        if (count($product)>0){
            return view('users.necklace', compact('product'));
        }
        else {
            return view('users.necklace', compact('product'))
                ->withMessage('Sorry, there are no results for your query');
        }


    }

    public function bracelets(){

        $product = DB::table('products')->where('type','LIKE','%'.'Bracelets'.'%')
            ->join('products_photos','products.id','=','products_photos.product_id')->get();

        if (count($product)>0)

            return view('users.bracelets', compact('product'));
        else return view('users.bracelets', compact('product'))
            ->withMessage('Sorry, there are no results for your query');

    }

    public function accessories(){

        $product = DB::table('products')->where('type','LIKE','%'.'Accessories'.'%')
            ->join('products_photos','products.id','=','products_photos.product_id')->get();

        if (count($product)>0)

            return view('users.accessories', compact('product'));
        else return view('users.accessories', compact('product'))
            ->withMessage('Sorry, there are no results for your query');

    }





}
