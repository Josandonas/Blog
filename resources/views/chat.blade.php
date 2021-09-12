  @extends('layouts.app')
  @section('content')
  <br>
 @if(session('sucesso'))
    <div class="alert alert-success" role="alert">
            {{session('sucesso')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
    @endif
    @if(session('erro'))
    <div class="alert alert-danger" role="alert">
            {{session('erro')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
    @endif

<div class="container-fluid">
    <div class="card-body text-white bg-dark mb-3">
        <center><div class="card-header text-white bg-dark mb-3">Enviar mensagem<i class="fas fa-paper-plane"></i></center>    
      <form class="container-fluid" action="/mensagemEmail" method="POST">
                  @csrf
              <div class="form-group">
                  <label for="exampleFormControlSelect1">Para:</label>
                  <textarea class="form-control" name="destinatario" rows="1" placeholder="Nome do usuário ou E-mail"></textarea>
              </div>

              <div class="form-group">
                  <label for="mensagem"> Assunto:</label>
                  <textarea class="form-control" name="assunto" rows="3" placeholder="Digite algo"></textarea>
              </div>

              <div class="form-group">
                  <label for="mensagem">Escreva sua Mensagem:</label>
                  <textarea class="form-control" name="mensagem" id="exampleFormControlTextarea1" rows="3" placeholder="Digite algo"></textarea>
              </div>
              <div class="form-group">
                  <center><button type="submit" class="btn btn-primary">Enviar</button></center> 
              </div>

          </form>
          <center><div class="card-footer text-white bg-dark mb-3">Plus Ultra<i class="fas fa-fist-raised"></i> </div></center>
    </div>
</div> 
@endsection
