@extends('backend.layouts.master')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Add Product
                </div>
                <div class="card-body">
                    <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                       @csrf
                        @include("backend.partials.messege")
                        <div class="mb-3">
                            <label for="title" class="form-label">Category</label>
                            <select name="category" id="" class="form-control">
                                <option value="" selected>Chose category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <!--<input type="password" class="form-control" id="exampleInputPassword1">-->
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" id="price">

                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="quantity" id="quantity">

                        </div>

                        <div class="mb-3">
                            <label for="product_image" class="form-label">Product Image</label>

                            <div class="row">
                                <div class="col-3">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image">
                                </div>
                                <div class="col-3">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image">
                                </div>
                                <div class="col-3">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image">
                                </div>

                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Add Product</button>
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
