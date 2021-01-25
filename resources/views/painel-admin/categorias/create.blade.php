@extends('template.painel-admin')
@section('title', 'Cadastro de Categorias')
@section('content')
<h5 class="mb-4">Cadastro de Categorias</h5>
<form method="POST" action="{{route('categorias.insert')}}">
        @csrf

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="" name="nome" required>
                </div>
            </div>
            
        </div>
        
      


    
        <p align="right">
        <button type="submit" class="btn btn-primary">Salvar</button>
        </p>
    </form>
@endsection