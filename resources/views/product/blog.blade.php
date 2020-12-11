@extends('layouts.index-master')
@section('content')

<section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
              @foreach ($blogs as $bl)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{$bl->image}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> {{$bl->created_at}}</li>
                                <li><i class="fa fa-comment-o"></i> {{$bl->comment}}</li>
                            </ul>
                            <h5><a href="#">{{$bl->title}}</a></h5>
                            <p>{{$bl->content}} </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
