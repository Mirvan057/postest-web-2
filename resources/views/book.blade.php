@extends('layout.base')
@section('content')
<!-- Carousel wrapper -->
<div
  id="carouselMultiItemExample"
  class="carousel slide carousel-dark text-center"
  data-mdb-ride="carousel"
>

  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="container d-flex flex-wrap">
      @foreach($posting as $p)
      <div class="col-lg-4">
        <div class="card">
          <img src="asset/{{ $p->link }}" class="card-img-top" alt="Waterfall" style="width: 100%; height: 350px;">
          <div class="card-body">
            <h5 class="card-title">{{ $p->judul }}</h5>
            <p class="card-text">{{ $p->penulis }}</p>
            <p class="card-text">Harga: {{ $p->harga }}</p>
            <button class="beli-button" data-id="{{ $p->id }}" data-judul="{{ $p->judul }}" data-penulis="{{ $p->penulis }}" data-harga="{{ $p->harga }}">BUY</button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-- Inner -->
</div>
<!-- Carousel wrapper -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const beliButtons = document.querySelectorAll(".beli-button");

        beliButtons.forEach((button) => {
            button.addEventListener("click", function () {
                const judul = this.getAttribute("data-judul");
                const penulis = this.getAttribute("data-penulis");
                const harga = this.getAttribute("data-harga");

                const tiketData = {
                    judul,
                    penulis,
                    harga,
                };

                localStorage.setItem("tiketData", JSON.stringify(tiketData));
                window.location.href = "/beli";
            });
        });
    });
</script>
@endsection
