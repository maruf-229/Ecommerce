@extends('layouts.frontend.app')

@section('content')

    @include('frontend.includes.banner')

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                <div class="col-3">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">
                            {{$category->name}}
                        </h4>
                        <p class="card-text">{{$category->description}}</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
