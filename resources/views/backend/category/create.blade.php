@extends('backend.layouts.master')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header" >
                   <b>Add Category</b>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.backend.category.store')}}" method="post" enctype="multipart/form-data" id="categoryForm">
                        {{ csrf_field() }}
                       @include("backend.partials.messege")
                        <div class="mb-3">
                            <label for="title" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name">

                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <!--<input type="password" class="form-control" id="exampleInputPassword1">-->
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="product_image" class="form-label">Product Image</label>

                            <div class="row">
                                <div class="col-3">
                                    <input type="file" class="form-control" name="image" id="image">
                                </div>

                            </div>
                        <button type="submit" class="btn btn-primary">Add category</button>
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
    <script>
        $("#categoryForm").submit(function(e){

            e.preventDefault();

            let name = $("#name").val();
            let description = $("#description").val();


            $.ajax({
                url:"{{route('admin.backend.category.store')}}",
                type:"POST",
                data:{
                    name:name,
                    description:description,
                    parent_id:parent_id,
                    _token:_token,
                },
                success: function(response){
                    if(response){

                        location.reload();
                    }
                }
            });
        });
    </script>

@endsection
