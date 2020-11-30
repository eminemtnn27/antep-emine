<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller{
     function showView1(){
        $users=DB::table('users')->get();
         return view('hakkimda',compact('users'));
    }
      function showView2(){
        $products=DB::table('products')->get();
         return view('urunler',compact('products'));
       }
       public function showUSerProducts()
       {
       $user_products=DB::table('user_products')
       ->join('users','user_products.user_id', '=' ,'users.id')
       ->join('products','user_products.products_id','=','products.id')
       ->select('user_products.*','users.name','products.pname','products.price')
       ->get();
       //dd($user_produsts);
       return view('text',compact('user_products'));
       }
}
