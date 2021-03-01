@extends('backend.layouts.master')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Manage Product
                </div>
                <div class="card-body">

                    <table class="table table-hover table-striped">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Product Ammount</th>
                            <th>Image</th>
                            <th>Manage</th>
                        </tr>
                        @foreach($categories as $category)
                        <tr>


                                <td>#</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>{{ $category->products->count() }}</td>

                                <td><img src="{{ asset('images/'.$category->image) }}" alt="Image" width="50px"> </td>

                            <td>
                                <a href="{{route('admin.backend.category.edit' , $category->id)}}" class="btn btn-success">Edit</a>
                                <a href="#deleteModal{{$category->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>
                                <!-- Modal -->
                                <form action="{!! route('admin.backend.categories.delete',$category->id) !!}" method="post">
                                    @csrf
                                @if(\Illuminate\Support\Facades\Session::has($category->id))
                                    <script>
                                        Swal.fire({
                                            title: 'Are you sure?',
                                            text: "You won't be able to revert this!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#dd3333',
                                            confirmButtonText: 'Yes, delete it!'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire(
                                                    'Deleted!',
                                                    'Your file has been deleted.',
                                                    'success'
                                                )
                                            }
                                        })
                                    </script>
                                @endif
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </table>
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
