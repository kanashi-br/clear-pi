@extends('layout.template')
@section('content')
<h1 class="mt-5">Caminhões! - FRONT-END</h1>
<div class="card">
    <div class="row card-header m-0 w-100 py-2">
        <div class="card-title col-11 m-0 align-middle">
            <h5 class="m-0 py-2">
                Tabela de Funcionários

            </h5>
        </div>
        <div class="col-1 align-middle py-2">
            <a href="{{ route('trucksTemp.create') }}" ><i class="bi bi-plus-circle-fill"></i><span class="criar">CRIAR</span></a>
        </div>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Ação</th>
                        <th scope="col">Bla bla bla</th>
                        <th scope="col">Bla bla bla</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="{{ route('trucksTemp.edit', 0) }}">Editar</a>
                            <a href="{{ route('trucksTemp.edit', 0) }}">Deletar</a>
                        </td>
                        <td>Bla bla bla</td>
                        <td>Bla bla bla</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ route('trucksTemp.edit', 1) }}">Editar</a>
                            <a href="{{ route('trucksTemp.edit', 0) }}">Deletar</a>

                        </td>
                        <td>Bla bla bla</td>
                        <td>Bla bla bla</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ route('trucksTemp.edit', 2) }}">Editar</a>
                            <a href="{{ route('trucksTemp.edit', 0) }}">Deletar</a>

                        </td>
                        <td>Bla bla bla</td>
                        <td>Bla bla bla</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</div>

@endsection