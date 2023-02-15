@extends('layout')
@section('content')

<h1>Book List</h1>
<div class="mt-4 d-flex justify-content-end">
    <a href="book-add" class="btn btn-success">Add Book</a>
</div>
@if(session('success'))
    <div class="alert alert-success mt-3 mb-3">
        {{ session('success')}}
    </div>
@endif   
<div class="mt05">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>book code</th>
                <th>Title</th>
                <th>cover</th>
                <th>category</th>
                <th>status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($book as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$value->book_code}}</td>
                <td>{{$value->title}}</td>
                <td>
                    <img src="../storage/app/cover/'.$value->cover" alt="sadasdas">
                </td>
                <td>
                    @foreach($value->categories as $category){{$category->name}} <br>
                    @endforeach
                </td>
               
                    <td>{{$value->status}}</td>
                <td>
                    <a href="/book-edit/{{$value->slug}}" class="btn btn-primary">Edit</a>
                    <a href="/book-delete/{{$value->slug}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection