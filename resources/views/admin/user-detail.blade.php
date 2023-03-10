@extends('layout')
@section('content')

<h1>User Detail</h1>

<div class="mt-4 d-flex justify-content-end">
    @if($user->status== 'inactive')
        
    <a href="/users-approve/{{$user->slug}}" class="btn btn-primary me-3">Approve User</a>
    <a href="/users-registered" class="btn btn-warning me-3">Back</a>
    @else
    <a href="/user" class="btn btn-warning me-3">Back</a>
    @endif
</div>

@if(session('status'))
    <div class="alert alert-success mt-3 mb-3">
        {{ session('status')}}
    </div>
@endif 
<div class="mt-4">
    <div class="mb-3">
        <label for="" class="form-label ">Username</label>
    <input type="text" class="form-control" readonly value="{{$user->username}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label ">phone</label>
    <input type="text" class="form-control" readonly value="{{$user->phone}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label ">address</label>
    <input type="text" class="form-control" readonly value="{{$user->address}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label ">status</label>
    <input type="text" class="form-control" readonly value="{{$user->status}}">
    </div>

</div>










@endsection