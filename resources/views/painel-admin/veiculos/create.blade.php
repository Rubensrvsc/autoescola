@extends('template.painel-admin')
@section('title', 'Cadastro de Veiculos')
@section('content')
<h5 class="mb-4">Cadastro de Veiculos</h5>
<form method="POST" action="{{route('veiculos.insert')}}">
        @csrf

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Placa</label>
                    <input type="text" class="form-control" id="" name="placa" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Categoria</label>
                    <select class="form-control" id="categoria" name="categoria" required>
                    <?php
                        use App\Models\categoria;
                        $tabela = categoria::all();
                    ?>
                    @foreach($tabela as $item)
                    <option value="{{$item->nome}}">{{$item->nome}}</option>
                    @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Km</label>
                    <input type="text" class="form-control" id="" name="km" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Instrutor</label>
                    <select class="form-control" name="instrutor" required>
                    <?php
                        use App\Models\instrutor;
                        $tabela = instrutor::all();
                    ?>
                    <option value="0">Selecionar instrutor</option>
                    @foreach($tabela as $item)
                    <option value="{{$item->id}}">{{$item->nome}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            
        </div>
        

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Cor</label>
                    <input type="text" class="form-control" id="" name="cor" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Marca</label>
                    <input type="text" class="form-control" id="" name="marca" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Ano</label>
                    <input type="text" class="form-control" id="" name="ano" required>
                </div>
            </div>
            

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Última Revisão</label>
                    <input value="<?php echo date('Y-m-d') ?>" type="date" class="form-control" id="" name="data" required>
                </div>
            </div>
        </div>
        
      


    
        <p align="right">
        <button type="submit" class="btn btn-primary">Salvar</button>
        </p>
    </form>
@endsection