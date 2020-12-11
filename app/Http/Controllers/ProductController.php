<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Product;
use App\User;
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
      $products = Product::all();
    //  $products = Product::with(['user'])->where('deleted_at','=',null)->get();
        //dd($products);
        return view('product.index', compact('products'));
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
