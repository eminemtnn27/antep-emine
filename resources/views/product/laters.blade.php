@extends('layouts.index-master')
@section('content')
<section class="latest-product spad">
       <div class="container">
           <div class="row">
             @foreach($laters as $later)

             <div class="col-lg-4 col-md-6">
                 <div class="latest-product__text">
                     <h4>{{$later->title}}</h4>
                     <div class="latest-product__slider owl-carousel">

                         <div class="latest-prdouct__slider__item">
                           @foreach($laters as $later)
                             <a href="#" class="latest-product__item">
                                 <div class="latest-product__item__pic">
                                     <img src="{{$later->photo}}" alt="">
                                 </div>
                                 <div class="latest-product__item__text">
                                     <h6>{{$later->name}}</h6>
                                     <span>{{$later->price}}TL</span>
                                 </div>
                             </a>
                           @endforeach
                         </div>

                         <div class="latest-prdouct__slider__item">
                           @foreach($laters as $later)
                             <a href="#" class="latest-product__item">
                                 <div class="latest-product__item__pic">
                                     <img src="{{$later->photo}}" alt="">
                                 </div>
                                 <div class="latest-product__item__text">
                                     <h6>{{$later->name}}</h6>
                                     <span>{{$later->price}} TL</span>
                                 </div>
                             </a>
                             @endforeach

                         </div>

                     </div>
                 </div>
             </div>
            @endforeach
        </div>
      </div>
</section>

@endsection
