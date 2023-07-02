@extends('template/main')


@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/logo.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/logo.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/logo.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

@endsection



@section('content2')
<div class="row row-cols-2 row-cols-md-4 g-4 mb-5">
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail
    " class="btn">
      <img src="/img/efb.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">
          <b>EMERALD FIANCE BLOUSE</b>
        </h5>
        <p class="card-text">TOP COLLECTION</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="toko/detail" class="btn">
      <img src="/img/bwhb.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">
          <b>
            BROKEN WHITE HITOMI BLOUSE
          </b>
        </h5>
        <p class="card-text">TOP COLLECTION</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/img/mab.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">
          <b>
            MAROON ACADEMIA BLOUSE
          </b>
        </h5>
        <p class="card-text">TOP COLLECTION</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="/img/brcb.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">
          <b>BROWN REGULAR COLLAR BLOUSE</b>
        </h5>
        <p class="card-text">TOP COLLECTION</p>
      </div>
    </a>
    </div>
  </div>
</div>
@endsection
