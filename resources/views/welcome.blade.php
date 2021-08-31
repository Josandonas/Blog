@extends('layouts.app')
@section('content')

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <nav class="navbar navbar-light bg-dark">
    <a class="navbar-brand">BNHA</a>
  </nav>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link " href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>Login</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="{{ route('register') }}"><i class="fas fa-clipboard-list"></i>Registre-se</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="loja2"> <i class="fas fa-store"></i>Loja </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href='about2'><i class="far fa-lightbulb"></i>Sobre</a>
      </li>
    </ul>
</nav>

  <header class="masthead" style="background-image: url( {{ asset('img/home-bg.png') }})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>BNHA</h1>
            <span class="subheading">Blog e Loja</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->

@foreach( $posts as $post )
  <div class="container-fluid">
    <div class="card text-white bg-dark mb-3 " class="mx-auto">
          @if($post['post']->arquivo!="")
            <img class="card-img-top" src="/storage/{{$post['post']->arquivo}}">
          @endif
              
              <div class="card-body">
                <center><h2 class="card-title"> {{ $post['post']->nomePost }} </h2></center>
                  <p class="card-text">{{ $post['post']->texto }}</p>                
                    <small>
                      <cite title="Título da fonte">{{$post['post']->nusuario}}</cite>
                    </small>
              </div>
    @foreach( $post['comentarios'] as $coment )

          <div class="card text-white bg-dark mb-3 " class="mx-auto">
            <div class="card-body">
              <center><h5>Comentário<i class="far fa-comment-alt"></i></h5></center>
                  @if($coment->arqui!="")
                    <img class="card-img-top" src="/storage/{{$coment->arqui}}">
                  @endif
                    
                    <div class="card-body">
                      <p class="card-text">{{ $coment->texto_comentario}}</p>
                        <small>
                          <cite title="Título da fonte">{{$coment->autor}}</cite>
                        </small>
                    </div>
              </div>
            </div>
    @endforeach
    </div>
  </div>
@endforeach
@endsection


