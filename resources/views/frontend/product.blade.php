@extends('layouts.frontend.app')

@section('content')

    @include('frontend.includes.banner')

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="shop-cat-box">
                            @php $i =1; @endphp
                            @foreach($product->images as $image)
                                @if($i>0)
                                    <img class="img-fluid" src="{{asset('images/'.$image->image)}}" alt="" >
                                @endif
                                @php $i--; @endphp
                            @endforeach
                            <a class="btn hvr-hover" href="#">{{$product->name}}</a>
                            <p class="card-text">{{$product->description}}</p>
                        </div>

                    </div>

                @endforeach
            </div>
        </div>
    </div>

@endsection

