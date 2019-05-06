<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductsPhoto;
use Illuminate\Support\Facades\DB;
use App\Handlers\ImageUploadHandler;
use App\User;
use App;

use App\Notifications\EmailVerificationNotification;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index(ProductsPhoto $photo)
    {

        $product = DB::table('products_photos')
            ->join('products', 'products_photos.product_id', '=', 'products.id')->get();

        return view('users.browse', compact('product'));


    }

    public function show(Product $product)
    {

        $product = Product::where('id',$product->id)->get();
        $photo=array();
        foreach($product as $value){
            $photo=ProductsPhoto::where('product_id',$value->id)->get();
        }

        return view('users.show', compact('product','photo'));

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

    public function editAvatar(User $user)
    {
        return view('users.edit_avatar', compact('user'));
    }

    public function updateAvatar(User $user,Request $request,ImageUploadHandler $uploader)
    {
        if ($request->avatar) {
            $result = $uploader->save($request->avatar, 'avatars', 1);
            if ($result) {
                $data['avatar'] = $result['path'];
            }
        }
        $user->avatar=$data['avatar'];
        $user->save();
        return redirect()->route('users.edit_avatar', $user->id)->with('success', 'update succeed');
    }




}
