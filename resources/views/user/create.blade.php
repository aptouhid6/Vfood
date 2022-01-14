@extends('frontend.layouts.master')
@section('content')
<div class="hero-wrap hero-bread" style="background-color:rgb(232, 241, 241);">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-6 ftco-animate">
            <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About us</span></p>
          <h1 class="mb-0 bread">About us</h1> -->
          <h3 class="text-center mb-5">{{ $title }}</h3>
          <form class="myFiild" action="{{ route('user.store')}}" method="post">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name">
                @error('name') <i class="text-danger">{{ $message }}</i> @enderror
              </div>
              <div class="form-group col-md-12">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email">
                @error('email') <i class="text-danger">{{ $message }}</i> @enderror
              </div>
              <div class="form-group col-md-12">
                <label for="role">Role</label>
                <select class="form-control" name="role" id="role">
                    <option value="">Select Role</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                @error('role') <i class="text-danger">{{ $message }}</i> @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Enter user password">
                @error('password') <i class="text-danger">{{ $message }}</i> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="confirm_password">Confirm Password</label>
                <input name="password_confirmation" type="password" class="form-control" id="password" placeholder="Confirm user password">
            </div>
              {{-- <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter user password">
                @error('password') <i class="text-danger">{{ $message }}</i> @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="confirm-password">Confirm Password</label>
                <input type="password_confirmation" type="password"  class="form-control" id="password" placeholder="Confirm user password">
              </div> --}}
            </div>
            <button type="submit" class="btn btn-primary text-center">Sign up</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection