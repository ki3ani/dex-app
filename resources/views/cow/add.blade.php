@extends('layout.layout')
@section('page_title','Cows - ')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Cow</h1>
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
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="Cow_id">Tag</label>
                                        <input type="number" class="form-control" name="tag" id="tag" placeholder="Enter Tag Id" min="10000" max="999999" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="Name">Cow Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Cow Name" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Breed">Breed</label>
                                        <select  class="form-control" autofocus required>
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="DateofBirth">Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" id="dob" placeholder="Enter Date of Birth" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autofocus required>
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