@extends('backend.layouts.master')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    Manage Banner
                </div>
                <div class="card-body">
                    @include("backend.partials.messege")
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>#</th>
                            <th>Banner Title</th>
                            <th>Action</th>
                        </tr>
                        @foreach($banners as $banner)
                            <tr>
                                <td>#</td>
                                <td>{{ $banner->title }}</td>

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
