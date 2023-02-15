@extends('layouts.main')
@section('style')

<nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">RENT BOOKS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Romance</a></li>
                  <li><a class="dropdown-item" href="#">Fiksi</a></li>
                  <li><a class="dropdown-item" href="#">Horror</a></li>
                </ul>
              </li>
          <li class="nav-item">
            <a class="nav-link acive" href="/login">login</a>
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>
<div class="content" style="max-height:400px;">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img style="max-height: 400px;" src="https://img.freepik.com/free-vector/library-with-books-shelves-desk-study_107791-1749.jpg?w=1380&t=st=1674628303~exp=1674628903~hmac=ece947320f7ea0e85f36ed2a4c8c867e4a23e010e1d1e5696f22c23095620452" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img style="max-height:400px;" src="https://th.bing.com/th/id/R.bc60babc215e5c4570451a04c98ab938?rik=5Ho1EkE46Te5eg&riu=http%3a%2f%2fwallpapercave.com%2fwp%2fK0P6Hwt.jpg&ehk=5k8APrNO9XB5NQqYDL%2bpEjxjHko68wYe5S3v43w5yfo%3d&risl=&pid=ImgRaw&r=0" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img style="max-height:400px;" src="https://th.bing.com/th/id/R.bc60babc215e5c4570451a04c98ab938?rik=5Ho1EkE46Te5eg&riu=http%3a%2f%2fwallpapercave.com%2fwp%2fK0P6Hwt.jpg&ehk=5k8APrNO9XB5NQqYDL%2bpEjxjHko68wYe5S3v43w5yfo%3d&risl=&pid=ImgRaw&r=0" class="d-block w-100" alt="...">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container my-5">
    <div class="row">
       <div class="col-lg-4">
           <h1>RENT-WIKRAMA</h1>
           <a href="register"><button type="button" class="btn btn-danger" >AYO DAFTAR SEKARANG</button></a>
       </div>
       <div class="col-lg-8">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam placeat sit rerum illo, quasi qui incidunt expedita eos ratione. 
            Eveniet quod quae architecto dolore. Ipsam assumenda nam fugit omnis quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, quo eum, optio sunt ut facilis impedit, facere nostrum hic eos modi sequi ex officia dolorem cum quae voluptas vero saepe!
        </p>
       </div>
    </div>
</div>

{{-- Cards Books --}}
<div class="container">
    <div class="row text-center my-5">
        <h1>Buku Terpopuler</h1>
    </div>
        <div class="row text-center">
        <div class="col-lg-4">
            <div class="card" style="width: 20rem;">
                <img style="max-height:400px;" src="https://preview.redd.it/hg4nfmb0ew241.jpg?auto=webp&s=e19f51e53f0c7e8ae826c9cac4748c66aa9364ef" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">BEASTLANDS</h5>
                  <p class="card-text">The Beastlands were a region of plains at the eastern end of the Shaar. It was home to various non-human monstrous tribes who were allied in a loose confederation for self-defense.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
         </div>
        <div class="col-lg-4">
            <div class="card" style="width: 20rem;">
                <img style="max-height:400px;" src="https://th.bing.com/th/id/OIP.Jj0qRdzM_ebldDemCR3lKAHaLH?pid=ImgDet&rs=1" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">FIVE NIGHT AT FREDDY'S</h5>
                  <p class="card-text">The Beastlands were a region of plains at the eastern end of the Shaar. It was home to various non-human monstrous tribes who were allied in a loose confederation for self-defense.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
         </div>
        <div class="col-lg-4" >
            <div class="card" style="width: 20rem;">
                <img style="max-height:400px;"src="https://cdn.archonia.com/images/1-77501003-1-1-original1/one-piece-aces-story-vol-02-light-novel.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">ONE PIECE</h5>
                  <p class="card-text">The Beastlands were a region of plains at the eastern end of the Shaar. It was home to various non-human monstrous tribes who were allied in a loose confederation for self-defense.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
         </div>
    </div>
</div>

{{-- Contact --}}
<div class="container">
    <div class="row text-center mt-5">
       <h1>Contact Admin</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <form>
                <div class="mb-3">
                  <label for="name" class="form-label">name</label>
                  <input type="name" class="form-control" id="name"> 
                </div>
                <div class="mb-3">
                  <label for="messege" class="form-label">Messege</label>
                  <textarea class="form-control" id="messege"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

{{-- Footer --}}
<footer class="bg-secondary text-white text-center mt-5" style="height: 50px">
    <p>FOLLOW DRAP ON SOCIAL MEDIA <i class="bi bi-github"></i> <a href="https://github.com/Derpy1234" class="text-white fw-bold" target="_blank" 
       style="text-decoration:none">Muhammad rafi andriansyah</a>
    </p>
</footer>