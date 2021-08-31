@extends('layouts.app')
@section('content')
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <nav class="navbar navbar-light bg-dark">
      <a class="navbar-brand" > <i class="fas fa-user-circle"></i>{{ Auth::user()->name }}</a>
  </nav>
  <ul class="nav navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link " href='poslog'><i class="fas fa-home"></i>Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href='contato'><i class="fas fa-phone-square"></i> Contato </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link"><i class="far fa-lightbulb"></i> Sobre </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('/logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button type="button" class="btn btn-danger ">Sair <i class="fas fa-sign-out-alt"></i></button></a>
    </li>
  </ul>
</nav>


  <!-- Page Header -->
<header class="masthead" style="background-image: url({{ asset('img/aboutimg.png') }})">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Sobre o Site</h1>
          <span class="subheading">Este blog foi montado por 2 amigos que amam Boku no Hero/My Hero Academya para
          trazer novidades a respeito do mangá e anime e disponibilizar produtos personalizados da franquia.</span>
        </div>
      </div>
    </div>
  </div>
</header>


  <hr>

  @endsection
