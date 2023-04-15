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
                            <form action="{{ route('newcow') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    
                                    <div class="form-group">
                                        <label for="Name">Cow Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Cow Name" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Breed">Breed</label>
                                        <select  name="breed" id="breed" class="form-control" autofocus required>
                                            <option>Ayshire</option>
                                            <option>Dexter</option>
                                            <option>Fleckvieh</option>
                                            <option>Freisan</option>
                                            <option>Guernseys</option>
                                            <option>Holstein</option>
                                            <option>Jersey</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="DateofBirth">Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" id="dob" placeholder="Enter Date of Birth" max="<?= date('Y-m-d'); ?>" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label for="DateofBirth">Gender</label>
                                        <select  name="gender" id="gender" class="form-control" autofocus required>
                                            <option>Female</option>
                                            <option>Male</option>
                                            
                                        </select></div>
                                    
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