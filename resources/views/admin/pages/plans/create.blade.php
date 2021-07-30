
@extends('adminlte::page')

@section('title','Planos')

@section('content_header')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,500&display=swap" rel="stylesheet">    
    <h1>Cadastrar Novo Plano</h1>
@stop


@section('content')
    <div class="card">
       
        <div class="card-body">
            <form action="{{ route('plans.store') }}" class="form" method="post">
                @csrf

                <div class="form-group">
                    <label for="">Nome:</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome:">                    
                </div>
                <div class="form-group">
                    <label for="">Preço:</label>
                    <input type="text" name="price" class="form-control" placeholder="Preço:">                    
                </div>
                <div class="form-group">
                    <label for="">Descrição:</label>
                    <input type="text" name="description" class="form-control" placeholder="Descrição:">                    
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
        
    </div>
@stop
<style>
    * {
        font-family: 'Poppins', sans-serif;
    }
    

</style>

