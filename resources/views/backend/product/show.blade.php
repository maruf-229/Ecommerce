@extends('backend.layouts.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Edit Product
                </div>
                <div class="card-body">

                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('GET')
                        <div class="mb-3">
                            <label for="title" class="form-label"><h3><b>Product Title :</b></h3></label><br>
                            <h4>{{$product->title}}</h4>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label"><h3><b>Product Description :</b></h3></label><br>
                            <h4>{{$product->description}}</h4>

                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label"><h3><b>Product Price :</b></h3></label>
                            <h4>{{$product->price}}</h4>
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label"><h3><b>Product Quantity :</b></h3></label>
                            <h4>{{$product->quantity}}</h4>

                        </div>
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </form>
                </div>
            </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
