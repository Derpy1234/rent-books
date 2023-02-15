@extends('layouts.main')
@section('style')
<div class="container">
    <div class="d-flex justify-content-center mt-5">
        @if (session('status'))
<div class=" alert alert-primary">
        {{ session('message') }}
        @endif
</div>
        <div class="form-login shadow p-3 mb-5 bg-body-tertiary rounded d-flex justify-content-center align-item-center position-absolute top-50 start-50 translate-middle">
            <form method="POST" action="#" style="width: 500px;">
                @csrf
                <div class="mb-3 text-center">
                    <h1>login </h1>
                </div>
                <div class="mb-3">
                  <label  for="username" class="form-label">Username</label>
                  <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp"> 
                </div>
                <div class="mb-3">
                  <label for="Password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="Password">
                </div>
               <button type="submit" class="btn btn-warning w-100">Submit</button>
                <div class="mb-3 text-center">
                  <p>or, sign up?<a href="register" style="text-decoration: none;">Register</a></p>
                </div>
              </form>
        </div>
    </div>