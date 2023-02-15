@extends('layouts.main')
@section('style')
<style>
    /* .form-register{
        border: 1px solid;
        padding: 10px;
        border-radius: 10px;
    } */
</style>

<div class="form-register shadow-lg p-3 mb-5 bg-body-tertiary rounded d-flex justify-content-center align-item-center position-absolute top-50 start-50 translate-middle">
    <form method="POST" action="register" style="width: 500px;">
@csrf
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('status'))
<div class=" alert alert-success">
        {{ session('message') }}
    </div>
@endif
<div class="mb-3 text-center">
            <h1> Register </h1>
        </div>
        <div class="mb-3">
          <label  for="username" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp"> 
        </div>
        <div class="mb-3">
          <label for="Password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="Password">
        </div>
        <div class="mb-3">
          <label for="Phone" class="form-label">Phone</label>
          <input type="number" name="phone" class="form-control" id="Phone">
        </div>
        <div class="mb-3">
          <label for="Address" class="form-label">Address</label>
          <textarea type="text" name="address" class="form-control" id="Address"></textarea>
        </div>
        <a href="register"><button type="submit" class="btn btn-warning w-100">Submit</button></a>
        <div class="mb-3 text-center">
          <p>sign in<a href="/login" style="text-decoration: none;">Login</a></p>
        </div>
      </form>
</div>