<?php

namespace App\Http\Controllers;


use App\Exports\ProductExport;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * Ürünlerin listesini göreceğimiz fonksiyon
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //asc=baştan sona
        //desc=sondan başa
        //orderBy=sıralama yapar
    //  $products = Product::all();
    //orderBy('id','DESC')//latest('id')//orderByDesc('id') //3 farklı yöntem son 3 ürün getirir
  //  $products = Product::with(['user'])->orderBy('id', 'DESC')->take(3)->get();
        //dd($products);
     $products = Product::with(['user'])->paginate(2);

        return view('home', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     * Ürün ekleme formu
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    //    return view('login');
        //return view('forget');

    }

    /**
     * Store a newly created resource in storage.
     * Ürünlerin veritabanına kaydını yapacağımız yer
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $price = $request->get('price');
        $created_by = User::find(2);

        Product::create([
            'name' => $name,
            'price' => $price,
          'created_by' => $created_by->id
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function export() {
        return Excel::download(new ProductExport, 'products.xlsx');
    }
}
