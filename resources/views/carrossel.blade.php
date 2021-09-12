@extends('layouts.app')
@section('anuncio')
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a  href="https://www.subway.com/pt-BR">
            <img src="{{ asset('img/anu2.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <!-- aqui onde deve ser realizado o texto caso haja necessidade-->
            </div>
          </a>
        </div>
        <div class="carousel-item">
          <a href="https://www.samsung.com/br/pc/notebook-expert-x50-np350xaa-xf3br/">
              <img src="{{ asset('img/anu4.png') }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
              <!-- aqui onde deve ser realizado o texto caso haja necessidade-->
              </div>
          </a>
        </div>

        <div class="carousel-item">
          <a href="https://www.samsung.com/br/smartphones/galalxy-m20-m205/SM-M205MDAKZTO/">
            <img src="{{ asset('img/anu3.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <!-- aqui onde deve ser realizado o texto caso haja necessidade-->
            </div>
          </a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
@endsection
