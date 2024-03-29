@extends('layout.layout')
@section('title','Roles')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Roles</h1>
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
                                <a href="{{URL::to('role/add')}}" class="btn btn-primary mb-2">Add <i class="fa fa-plus"></i> </a>

                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">Role ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Level</th>
                                        <th>Assigned Persons</th>
                                        <th style="width: 15px">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $role) 

                                        <tr>
                                            <td>{{ $role->role_id }}</td>
                                            <td>{{ $role->name}}</td>
                                            <td>{{ $role->description }}</td>
                                            <td>{{ $role->level }}</td>
                                            <td>{{ $role->assigned }}</td>
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