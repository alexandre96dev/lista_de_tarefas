@extends('layouts.layouts')

@section('title')
    Tarefas
@endsection
@section('teste')
    <h3 class="w3-bar-item">Tarefas</h3>
@endsection
@section('content')
<br>
    <table class="w3-table w3-striped w3-border">
        <tr>
            <th>
                Id
            </th>
            <th>
                Titulo
            </th>
            <th>
                Resolvido
            </th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->titulo }}</td>
                <td>
                    @if ($d->resolvido != 1)
                        <button class="w3-button w3-red">
                            <a href="/tarefas">Desfazer</a>
                        </button>       
                    @endif
                    @if ($d->resolvido != 0)
                        <button class="w3-button w3-blue">
                            <a href="/tarefas">Resolver</a>
                        </button>
                    @endif
                </td>
            </tr>
        @endforeach

    </table>
    {{-- <a href="/" class="w3-bar-item w3-button">Adicionar</a> --}}
@endsection
