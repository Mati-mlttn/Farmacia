@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Agregar Nuevo Medicamento</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('home.view') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Añadir</li>
        </ol>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <div style="text-align: center;">
                                <img src="{{ asset('img/isotipo-colores.png') }}" alt="" width="50"
                                    height="50">
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="form" method="post" action="{{ route('medicamentos.store') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputNombre" name="nombre" type="text"
                                                minlength="5" maxlength="80" placeholder="Enter your first name">
                                            <label for="inputproyecto">Nombre medicamento
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="inputFabricante" name="fabricante">
                                                <option value="">Seleccione un fabricante</option>
                                                <option value="Laboratorio Chile">Laboratorio Chile</option>
                                                <option value="Pfizer">Pfizer</option>
                                                <option value="Sanofi">Sanofi</option>
                                                <!-- Agrega más opciones según sea necesario -->
                                            </select>
                                            <label for="inputFabricante">Fabricante</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputCantidad" name="cantidad" type="number"
                                                placeholder="Enter your first name">
                                            <label for="inputproyecto">Cantidad
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button id="btn-create" class="btn btn btn-block"
                                            style="background-color:#24c4f4; color: #ffffff;">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection