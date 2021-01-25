@extends('template.painel-admin')
@section('title', 'Editar Categoria')
@section('content')
<h6 class="mb-4"><i>Edição de Categorias</i></h6><hr>
<form method="POST" action="{{route('categorias.editar',$item)}}">
        @csrf
        @method('put')

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input value="{{$item->nome}}" type="text" class="form-control" id="" name="nome" required>
                </div>
            </div>
        </div>
       

           

    
        <p align="right">

        <input value="{{$item->nome}}" type="hidden" name="oldcpf" >

        <button type="submit" class="btn btn-primary">Salvar</button>
        </p>
    </form>
@endsection