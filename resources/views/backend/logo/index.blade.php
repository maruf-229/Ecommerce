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
                            <th>Image</th>
                            <th>Manage</th>
                        </tr>
                        @foreach($logos as $logo)
                            <tr>
                                <td>#</td>
                                <td><img src="{{ asset('images/'.$logo->image) }}" alt="Image" width="50px"> </td>

                                <td>
                                    <a href="{{route('admin.backend.logo.edit' , $logo->id)}}" class="btn btn-success">Edit</a>

                                    <!-- Modal -->

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
