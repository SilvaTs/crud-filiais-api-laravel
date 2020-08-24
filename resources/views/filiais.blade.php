@extends('layouts.app')

@section('content')

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Filiais</h5>

@if(count($cats) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome da Filial</th>
                    <th>Cidade</th>
                    <th>Cnpj</th>
                    <th>Endereço</th>
                    <th>Email</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                </tr>
            </thead>
            <tbody>
    @foreach($cats as $cat)
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->nome}}</td>
                    <td>{{$cat->cidade}}</td>
                    <td>{{$cat->cnpj}}</td>
                    <td>{{$cat->endereco}}</td>
                    <td>{{$cat->email}}</td>
                    <td>{{$cat->latitude}}</td>
                    <td>{{$cat->longitude}}</td>

                    <td>
                        <a href="/filiais/editar/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/filiais/apagar/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach
            </tbody>
        </table>
@endif
    </div>
    <div class="card-footer">
        <a href="/filiais/novo" class="btn btn-sm btn-primary" role="button">Novo Cadastro</a>
    </div>
</div>



@endsection
