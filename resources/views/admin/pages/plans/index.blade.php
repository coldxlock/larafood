
@extends('adminlte::page')

@section('title','Planos')

@section('content_header')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,500&display=swap" rel="stylesheet">    
    <h1>Planos <a class="btn btn-dark" href="{{ route('plans.create')}}">ADD</a></h1>
@stop


@section('content')
    <div class="card">
        <div class="card-header">
            #filtros
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>            
                <tbody>
                    @foreach ($plans as $plan)
                        <tr>
                            <td>
                                {{ $plan->name }}
                            </td>                        
                            <td>
                                {{ $plan->price }}
                            </td>
                            <td>
                                <a href="#" class="btn btn-warning">VER</a>
                            </td>                            
                        </tr>                    
                    @endforeach
                </tbody>
            </table>            
        </div>
        <div class="card-footer">
            {!! $plans->links() !!}
        </div>
    </div>
@stop
<style>
    * {
        font-family: 'Poppins', sans-serif;
    }
    

</style>

