
@extends('layout.app')
@section('title','Dairy Management System')
@section('content')
<div class="center">

    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Dairy Management System
            </div>

            <div class="links">
                @guest
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a>
                <a href="{{ route('register') }}" class="btn btn-secondary btn-lg">Register</a>
                @else
                <li class="nav-item">
                    <a href="/login" class="btn btn-primary btn-lg">Dashboard</a>
                    <a class="nav-link" href="{{ route('signout') }}" class ="btn btn-danger btn-lg" >Logout</a>
                </li>
                @endguest

            </div>
        </div>
    </div>
</div>
@endsection
