@extends('layout.app')
@section('title','Register')
@section('content')
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            
                @endguest
            </ul>
        </div>
    </div>
</nav>
<main class="signup-form">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">
                        <form action="{{ route('register/cow') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                           
                            <div class="form-group mb-3">
                                <input type="number" placeholder="ID Number" id="national_id" class="form-control"
                                    name="national_id" min="9999999" max="50000000" required autofocus>
                                @if ($errors->has('national_id'))
                                <span class="text-danger">{{ $errors->first('national_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="date" placeholder="Date of Birth" id="dob" class="form-control"
                                    name="dob" required autofocus max="2007-01-01">
                                @if ($errors->has('dob'))
                                <span class="text-danger">{{ $errors->first('dob') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Phone" id="phone" class="form-control"
                                    name="phone" required autofocus>
                                @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection