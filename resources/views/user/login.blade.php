@extends('frontend.layouts.master')
@section('content')
<div class="hero-wrap hero-bread" style="background-color:rgb(232, 241, 241);">
    <!-- style="background-image: url('images/bg_1.jpg');" -->
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-6 ftco-animate">
            <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About us</span></p>
          <h1 class="mb-0 bread">About us</h1> -->
          <h3 class="text-center">{{ $title }}</h3>
          <form class="myFiild" action="{{ route('user.login') }}" method="post">
              @csrf
              <div class="form-group col-md-12">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email">
                @error('email') <i class="text-danger">{{ $message }}</i> @enderror
              </div>
              <div class="form-group col-md-12">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Enter user password">
                @error('password') <i class="text-danger">{{ $message }}</i> @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">Login</button>
            <button class="btn btn-success mt-3 ml-3"><a href="{{ route('user.create') }}" style="color:#fff;">Create Account</a></button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection