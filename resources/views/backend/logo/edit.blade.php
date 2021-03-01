@extends('backend.layouts.master')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header" >
                    <b>Add Category</b>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.backend.logo.update',$logo->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="product_image" class="form-label">Logo Image</label>

                            <div class="row">
                                <div class="col-3">
                                    <input type="file" class="form-control" name="image" id="image"value="{{$logo->image}}">
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Update Logo</button>
                        </div>
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
