@extends('layouts.index-master')

@section('content')
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>

                            <li class="active" data-filter="*">All</li>
                            @foreach($categories as $category)
                                <li data-filter=".{{$category->name}}">{{$category->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>


            <div class="row featured__filter">

                    @foreach($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix {{$product->getCategory->name}}">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="{{$product->photo}}">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">{{$product->name}}</a></h6>
                                <h5>{{$product->price}}TL</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach

    <form action="{{route('product.export')}}" method="get">

        <button type="submit" class="btn btn-primary">Ürünleri İndir</button>
      @csrf  </form>

@endsection
