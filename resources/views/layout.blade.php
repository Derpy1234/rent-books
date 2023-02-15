<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Rent Books</title>
</head>
<style>
    .main{
        height: 100vh;
    }

    .sidebar{
        background-color: #6096B4;
    }
    .sidebar a{
        text-decoration: none;
        padding: 20px 30px;
        color: white;
        display: block;
    }
    .sidebar a:hover{
        background-color: #93BFCF;
    }

    .sidebar a.active{
        background-color: #93BFCF;
        border-right: solid 4px #F8CBA6;
    }

    .books{
        background-color: #BDCDD6;
    }

    .category{
        background-color: #6096B4;
    }

    .user{
        background-color: #EEE9DA;
    }

    .card-data{
        border-radius: 5px;
        padding: 20px 40px;
        border: solid 1px;  
        color: #000;
    }

    .card-data i{
        font-size:30px;
    }

    .desc{
        font-size: 30px;
    }
    
</style>
<body>
<div class="main d-flex flex-column justify-content-between">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #6096B4">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">RENT BOOKS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>

      <div class="body-main h-100">
        <div class="row g-0 h-100">
            <div class="col-lg-2 sidebar collapse d-lg-block" id="navbarNav">
                @if(Auth::user()->roles_id == 1)
                <a href="dashboard" @if(request()->route()->uri == 'dashboard') class='active' @endif><i class="bi bi-house-door-fill"></i>dashboard</a>
                <a href="user" @if(request()->route()->uri == 'user') class='active' @endif><i class="bi bi-person-fill"></i>User</a>
                <a href="category" @if(request()->route()->uri == 'category') class='active' @endif><i class="bi bi-bookmark-fill"></i>Category</a>
                <a href="books" @if(request()->route()->uri == 'books') class='active' @endif><i class="bi bi-book-fill"></i>Books</a>
                <a href="rent" @if(request()->route()->uri == 'rent') class='active' @endif><i class="bi bi-bag-check-fill"></i>Rent Logs</a>
                <a href="logout" @if(request()->route()->uri == 'logout') class='active' @endif><i class="bi bi-door-open-fill"></i>logout</a>
                @else
                <a href="profile" @if(request()->route()->uri == 'profile') class='active' @endif><i class="bi bi-people-fill"></i>profile</a>
                <a href="logout"><i class="bi bi-door-open-fill"></i>logout</a>
                @endif
        </div>
            <div class="col-10 p-5 content">
                @yield('content')
            </div>    
      </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>