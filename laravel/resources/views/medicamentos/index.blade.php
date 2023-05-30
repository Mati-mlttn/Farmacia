@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Inventario</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('home.view') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Lista</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <em class="fas fa-table me-1"></em>
                Medicamentos
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <caption>Informacion basica sobre los proyectos</caption>
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Fabricante</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->cantidad }}</td>
                                <td>{{ $item->fabricante }}</td>
                                <td style="height: 10%">
                                    <div class="btn-group" role="group" aria-label="Basic example">

                                        <a href="{{ route('medicamentos.edit', $item->id) }}" style="margin: 0.2em;">
                                            <button class="btn fa-solid fa-pen-to-square"
                                                style="background-color:#f46c24 ; color: #ffffff;"></button>
                                        </a>

                                        <form id="delete{{ $item->id }}"
                                            action="{{ route('medicamentos.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn-custom"
                                                onclick="confirmarEliminar({{ $item->id }})" style="margin: 0.2em;"
                                                data-item-id="{{ $item->id }}">
                                                <span class="btn btn fa-solid fa-trash"
                                                    style="background-color:#da1919; color: #ffffff;"></span>
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
    </div>

@endsection