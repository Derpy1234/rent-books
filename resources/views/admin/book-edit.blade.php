@extends('layout')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<a href="/books" style="text-decoration: none; color:black"><h1>
    <i class="bi bi-arrow-left"></i></a>Add book in here</h1>
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="book_code" class="form-label">Book Code</label>
    <input type="text" name="book_code" id="book_code" class="form-control w-50" placeholder="Book Code" value="{{$books->book_code}}">
    
    <label for="title" class="form-label mt-3">Title</label>
    <input type="text" name="title" id="title" class="form-control w-50" placeholder="Title" value="{{$books->title}}">
    <label for="image" class="form-label mt-3">Cover</label>
    <div class="mb-3">
        
        <label for="currentCover" class="form-label d-block">CurrentCover</label>
        @if($books->cover != '')
        <img src="{{asset('storage/cover/'.$books->cover)}}" alt="" width="200px"></td>
        @else
        <img src="{{asset('img/not-found.jpg')}}" alt="" width="200px">
        @endif
    </div>
    <input type="file" name="image" id="image" class="form-control w-50">
    <label for="categories" class="form-label mt-3">Category</label>
<select name="categories[]" id="categories" class="form-control select" multiple="multiple">
    @foreach($categories as $item)    
        <option value="{{$item->id}}">{{$item->name}}</option>
    @endforeach
</select>

<label for="">Category List</label>
<ul>
    @foreach ($books->categories as $item)
        <li>{{$item->name}}</li>
    @endforeach
</ul>


    <button type="submit" class="btn btn-primary mt-3">Upadte</button>
</form>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
        $('.select').select2();
        });
    </script>
@endsection