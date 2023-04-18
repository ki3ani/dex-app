@extends('layout.layout')
@section('title','Add Production')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Production</h1>
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

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <!--,'cow_id','production_date','production_period','amount','user_id' -->
                            <!-- form start -->
                            <form action="{{ route('newproduce') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Cow ID</label>
                                        <select class="form-control" name="tag" id="tag">
                                            @foreach($cows as $cow)
                                            <option value="{{ $cow->tag }}">{{ $cow->tag.'-'.($cow->name)}}</option>                                    
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Production Date">Production Date</label>
                                        <input type="text" class="form-control" id="production_date" name="production_date" value="{{ now()->format('d-m-Y') }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="Production Period">Production Period</label>
                                        <select class="form-control" name="production_period" id="production_period">
                                            <option>Morning</option>
                                            <option>Mid Day</option>
                                            <option>Evening</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Amount">Amount</label>
                                        <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter Production " min="0" max="30">
                                    </div>
                                    <div class="form-group">
                                        <label for="Milker">Milker</label>
                                        <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Milker" value="{{ ucfirst(strtolower(Auth::user()->name)) }}">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
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