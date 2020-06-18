@extends('layouts.master')









@section('main')
    <div class="jumbotron">


        <h4 class="h4">Materia LP4 - Linguagem de Programação 4</h4>
        <h5 class="h5">
            Esse projeto tem um ituito de apresentar um CRUD (CREATE, READ, UPDADE, DELETE).
        </h5>

    </div>

    @if (session('status'))
        <div class="alert alert-{{session('status')}}">
            {{ session('mensagem') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contatos as $contato)
                <tr>
                    <th scope="row">{{$contato->id}}</th>
                    <td>{{$contato->nome}}</td>
                    <td>{{ $contato->email }}</td>
                    <td>{{ $contato->telefone }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="First group">
                            <form action="{{ url("/{$contato->id}/visualizar") }}" method="get">
                                @method('SHOW')
                                @csrf
                                <button type="submit" class="btn btn-link">
                                    <i class="fas fa-eye text-info"></i>
                                </button>
                            </form>
                            <a href="{{ url("/{$contato->id}/edit") }}" class="btn btn-link">
                                <i class="fas fa-user-edit text-warning"></i>
                            </a>
                            <form action="{{ url("/{$contato->id}") }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-link">
                                    <i class="fas fa-trash-alt text-danger"></i>
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
