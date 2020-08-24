@extends('layouts.app')

@section('content')

<div class="card border">
    <div class="card-body">
        <form action="/filiais" method="POST">
            @csrf
            <div class="row">
            <div class="form-group col-lg-3">
                <label for="nomeFilial">Nome da Filial</label>
                <input type="text" class="form-control" name="nomeFilial"
                       id="nomeFilial" placeholder="Filial">
            </div>

            <div class="form-group col-lg-3">
                <label for="nomeCidade">Nome da Cidade</label>
                <input type="text" class="form-control" name="nomeCidade"
                       id="nomeCidade" placeholder="Cidade">
            </div>


            <div class="form-group col-lg-3">
                <label for="nomeCnpj">Número do Cnpj</label>
                <input type="text" class="form-control" name="nomeCnpj"
                       id="nomeCnpj" placeholder="Cnpj">
            </div>


            <div class="form-group col-lg-3">
                <label for="nomeEndereco">Endereço</label>
                <input type="text" class="form-control" name="nomeEndereco"
                       id="nomeEndereco" placeholder="Endereço">
            </div>
            </div>

            <div class="row">
            <div class="form-group col-lg-3">
                <label for="nomeEmail">Email</label>
                <input type="text" class="form-control" name="nomeEmail"
                       id="nomeEmail" placeholder="Email">
            </div>

            <div class="form-group col-lg-3">
                <label for="nomeLatitude">Latitude</label>
                <input type="text" class="form-control" name="nomeLatitude"
                       id="nomeLatitude" placeholder="Latitude">
            </div>

            <div class="form-group col-lg-3">
                <label for="nomeLongitude">Longitude</label>
                <input type="text" class="form-control" name="nomeLongitude"
                       id="nomeLongitude" placeholder="Longitude">
            </div>
            </div>

            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection
