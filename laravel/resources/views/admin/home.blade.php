@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Receta Medica</h1>
        <div class="card mb-4">
            <div class="card-body">
                <div>
                    <p>Entrada</p>
                    <form action="{{ route('medicamentos.store') }}" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="inputCliente" name="Medicamneto">
                                    <option value="">Seleccione medicamento</option>
                                    @foreach ($medicamentos as $medicamento)
                                        <option value="{{ $medicamento->id }}">{{ $medicamento->nombre }}</option>
                                        
                                    @endforeach
                                </select>
                                <label for="inputCliente">Medicamentos</label>
                            </div>
                        </div>
                        <button class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        <div style="height: 100vh"></div>
        <div class="card mb-4">
            <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the
                static navigation demo.</div>
        </div>
    </div>
@endsection
