@extends('layouts.app')

@section('content')

<header class="masthead" style="background-image:url({{ asset('img/contimg.png') }})">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header"><h1> Situação <i class="fab fa-grav fa-1x  "></i> </h1> </div></center>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center>Você está Logado! <i class="far fa-smile-beam fa-spin"></i>
                    <h3> Bem Vindo!! {{ Auth::user()->name }}</h3></center>
                </div>
                <div class="card-footer text-muted" align="center">
                  <a href='poslog'><button  type="button" class="btn btn-success btn-lg">Continuar para o Blog</button></a>
                </div>
                <div align="center">
                  <a href="{{ url('/logout') }}"  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"><button type="button" class="btn btn-danger btn-lg ">Sair <i class="fas fa-skull-crossbones "></i></button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
@endsection
