@extends('layout')

@section('conteudo')

<div class="row">
    <h2 class="col-12 text-center">Movimento</h2>


    <form action="{{ url('/salvar') }}" method="post" class="offset-3 col-6">
        @csrf
        <div class="mb-2 mx-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="mb-2 mx-3">
            <label class="form-label">KM</label>
            <input type="text" name="km" class="form-control">
        </div>

        <div class="mb-2 mx-3">
            <label class="form-label">Dia</label>
            <input type="date" name="dia" class="form-control">
        </div>

        <div>
            <button type="submit" class="btn btn-success mt-3">Registrar</button>
        </div>

    </form>
</div>
@endsection
