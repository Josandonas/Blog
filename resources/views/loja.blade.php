@extends('layouts.app')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" > <i class="fas fa-user-circle"></i>{{ Auth::user()->name }}</a>
  </nav>
  <ul class="nav navbar-nav ml-auto">
       <li class="nav-item">
      <a class="nav-link "  href='/poslog'> <i class="fas fa-users"></i>Blog</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link " href="#"> <i class="fas fa-store"></i>Loja </a>
    </li>

    <li class="nav-item">
      <a class="nav-link " href='sacola'> <i class="fas fa-shopping-bag"></i>Sacola</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href='about'><i class="far fa-lightbulb"></i> Sobre </a>
    </li>

    <li class="nav-item">
      <a href="{{ url('/logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button type="button" class="btn btn-danger ">Sair <i class="fas fa-sign-out-alt"></i></button></a>
    </li>
  </ul>
</nav>
@foreach( $prod as $produto )
<form action="{{ route( "saco") }}" method="POST">
  @csrf
  <div class="container">
    <div class="row">
      <div class="card">
        <div class="row no-gutters">
          <div class="zoom1" style="width: 300px;">
            <br>
            <br>
            <img  src="{{$produto->arquivo}}" class="img-responsive">  
          </div>
          <div class="col-md-4 text-white bg-secondary " style="width: 300px;">
            <div class="card-body">
              <h5 class="card-title">{{ $produto->nome }} </h5>
              <div class="form-group">
                <input type="hidden" name="name" value="{{ $produto->nome }}">
              </div>
              <p class="card-text">
                <br>
                <br>
               <center><h1 class="display-5">R$ {{ $produto->valor }},00 </h1></center>
                <div class="form-group">
                    <input type="hidden" name="value" value="{{ $produto->valor }}">
                </div>
               <br>
               <br>
               <br>
               <center><button type="submit" class="btn btn-primary btn-sm">Adicionar + <i class="fas fa-shopping-bag fa-2x"></i></button></center>
               <!-- <button type="button" class="btn btn-success btn-sm">Comprar</button> -->
              </p>            
            </div>
          </div>
           <div class="form-group">
              <input type="hidden" name="cod" value="{{ $produto->id }}">
            </div>
          <div class="col-md-4 text-white bg-secondary " style="width: 300px;">
            <div class="card-body">
              <h5 class="card-title">Características</h5>
                <ul class="list-unstyled">
                  <small>
                    <small>
                      <p>Marca: {{ $produto->marca }}</p>
                      <p>Modelo: {{ $produto->modelo }}</p>
                      <p>Material: {{ $produto->material }}</p>
                      <p>Desenho: {{ $produto->desenho }}</p>
                      <p>Categoria: {{ $produto->Categoria }}</p>
                      <div class="form-group">
                        <input type="hidden" name="cate" value="{{ $produto->Categoria }}">
                      </div>
                    </small>
                  </small>  
                </ul>        
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
@endforeach
<br>
<br>
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
<br>
<br>
 
@endsection