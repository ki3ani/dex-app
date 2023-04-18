@extends('layout.layout')
@section('title','Production')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Produce</h1>
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
                                <a href="{{URL::to('production/add')}}" class="btn btn-primary mb-2">Add <i class="fa fa-plus"></i> </a>

                                <table class="table table-bordered">
                                    <thead>


                                    
                                    <tr>
                                        <th style="width: 10px">ID</th>
                                        <th>Cow</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Amount</th>
                                        <th>Recorded By</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($production as $product)
                                        <tr>
                                            <td>{{ $product->production_id }}</td>
                                            <td>{{ $product->tag }}</td>
                                            <td>{{ $product->production_date }}</td>
                                            <td>{{ $product->production_period }}</td>
                                            <td>{{ $product->amount }}</td>
                                            <td>{{ $product->user_id }}</td>
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