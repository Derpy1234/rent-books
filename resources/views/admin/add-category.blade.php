@extends('layout')
@section('content')

<a href="category" style="text-decoration: none; color:black"><h1><i class="bi bi-arrow-left"></i></a>Add Category in here</h1>
@if ($errors->any())
    <div class="alert alert-danger w-50">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="category-add" method="post">
    @csrf

    <label for="name"  class="form-label" >Category</label>
    <input type="text" name="name" class="form-control w-50" id="name"> 
    <button type="submit" class="btn btn-success mt-3">Save</button>
</form>

@endsection