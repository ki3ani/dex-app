@extends('layout.layout')
@section('title','Users - ')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Users</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                

                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        
                                        <th>Name</th>
                                        <th>National ID</th>
                                        <th>Date of Birth</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th style="width: 15px">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach ($Users as $user) 
                                        <tr>

                                            <td>{{  $user->name }}</td>
                                            <td>{{  $user->national_id  }}</td>
                                            <td>{{  $user->dob  }}</td>
                                            <td>{{  $user->phone  }}</td>
                                            <td>{{  $user->role_id }}</td>
                                            <td>
                                                <a href="#"><i class="fa fa-edit"></i> </a>
                                                <a href="#"><i class="fa fa-trash"></i> </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('scripts')

@endpush

@push('styles')

@endpush