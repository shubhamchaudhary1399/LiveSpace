@extends('layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="/css/login.css">
<link rel="stylesheet" type="text/css" href="/css/welcome.css">
@endsection

@section('title', 'Welcome | LiveSpace')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="height: 60vh;" src="/img/carousel1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 60vh;" src="/img/carousel2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 60vh;" src="/img/carousel3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container py-4">
    <div class="row justify-content-center">
        <div>
            <h2 class="section-title">A LiveSpace room for everyone</h2>
            <label class="section-subtitle">LiveSpace offers rooms to students, office workers and to family</label>
        </div>
    </div>
    <div class="row justify-content-center py-4">
        <!-- <h2>Rooms for everyone</h2><br> -->
        <div class="col-lg-4 col-md-6 cd-column">
            <div class="card my-cd" style="width: 18rem;">
                <img class="card-img-top" src="img/study-room.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Study Rooms</h5>
                    <p class="card-text">The perfect place to get rooms which are specially designed and maintained for students.</p>
                    <a href="/search/studyrooms" class="btn btn-default my-btn" target="_blank">Check Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 cd-column">
            <div class="card my-cd" style="width: 18rem;">
                <img class="card-img-top" src="img/office-room.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Office Rooms</h5>
                    <p class="card-text">If you are a office worker or you work from a homewe are here to help you to get a room.</p>
                    <a href="/search/officerooms" class="btn btn-default my-btn" target="_blank">Check Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 cd-column">
            <div class="card my-cd" style="width: 18rem;">
                <img class="card-img-top" src="img/family-room.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Family Rooms</h5>
                    <p class="card-text">Best family rooms which can accomodate family of upto 4 peoples.</p>
                    <a href="/search/familyrooms" class="btn btn-default my-btn" target="_blank">Check Now</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
