@extends('layouts.index-master')

@section('content')
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                @foreach ($csliders as $CategorySlider)


                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{$CategorySlider->photo}}">
                    <h5><a href="#">{{$CategorySlider->name}}</a></h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
