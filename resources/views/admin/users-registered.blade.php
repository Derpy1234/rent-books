@extends('layout')
@section('content')

<a href="user" style="text-decoration: none; color:black"><h1><i class="bi bi-arrow-left me-3"></i></a>List here </h1>



    <div class="mt-4 d-flex justify-content-end">
        <a href="/user" class="btn btn-primary me-3">
            Approve User List
        </a>
       
    </div>

    <div class="mt-4">
        <table class="table">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Username</td>
                    <td>Phone</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($usersRegistered as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->phone}}</td>
                    <td>
                        <a href="/users-detail/{{$item->slug}}" class="btn btn-secondary ">
                            Detail User
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection    