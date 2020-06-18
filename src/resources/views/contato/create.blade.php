@extends('layouts.master')


@section('main')
    <div class="row">
        <div class="col-12">
            <form action="{{ url('/cadastrar') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input name="nome" type="text" max="30" class="form-control" id="nome" placeholder="Nome Completo">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" max="50" class="form-control" id="email" placeholder="email@gmail.com">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input name="telefone" type="text" max="15" class="form-control" id="telefone" placeholder="(61) 9999-9999">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input name="endereco" type="text" max="100" class="form-control" id="endereco" placeholder="Rua 13 Norte Lt 2">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
@stop
