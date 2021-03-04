@extends('layouts.frontend.app')

@section('content')

    @include('frontend.includes.banner')
    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row special-list">
                @foreach($products as $product)

                    <div class="col-lg-3 col-md-6 special-grid best-seller">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="sale">Sale</p>
                                </div>
                                 @php $i =1; @endphp
                                 @foreach($product->images as $image)
                                @if($i>0)
                                    <img class="img-fluid" src="{{asset('images/'.$image->image)}}" alt="Image" >
                                @endif
                                @php $i--; @endphp
                                @endforeach
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{ route('show',$product->id) }}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>{{ $product->title }}</h4>
                                <h5>৳{{ $product->price }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

