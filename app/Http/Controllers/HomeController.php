<?php


namespace App\Http\Controllers;
use App\Models\laters;
use App\Models\Product;

use App\Models\banner;
use App\Models\category_slider;
use App\Models\blogs;
use App\Models\Category;

use App\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function showView() {
        //$users = DB::table('users')->get();
        $users = User::all();
        return view('hakkimda', compact('users'));
    }
    public function showCategory(){
       /*$categories=DB::table('categories')->get();
       dd($categories);*/
      // print_r(categories::all());die;
     /*$data['products']=products::orderBy('category_id', 'ASC')->get();
      $data['Category']=categories::orderBy('id', 'ASC')->paginate(5);*/
      $products=Products::all();
      $categories=Category::all();

       return view('product.index' ,compact('products','categories'));

   }
    function latersView(){
      $laters=laters::all();
      return view('product.laters',compact('laters'));
    }
    function bannerView(){
      $banners=banner::all();
      return view('product.banner',compact('banners'));
    }
    function blogView(){
      $blogs=blogs::all();
      return view('product.blog',compact('blogs'));
    }
    function categorySliderView(){
      $csliders=category_slider::all();
      return view('product.menu',compact('csliders'));
    }
}
