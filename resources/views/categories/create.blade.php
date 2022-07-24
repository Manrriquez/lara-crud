@extends('layout')
@section('content')

    <div class="my-1 text-center">
        <h3>Criar Categoria</h3>
    </div>

    @if (session('status'))
            <div class="alert alert-success my-1">
                {{ session('status') }}
            </div>
    @endif

    <div class="d-flex justify-content-center my-5 px-4">
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data"
            class="w-50 shadow rounded-3 p-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="nome categoria">
                @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-end">
                <a class="btn btn-secondary" href="{{ route('categories.index') }}" enctype="multipart/form-data">Voltar</a>                
                <button type="submit" class="btn btn-primary">Criar</button>
            </div>
        </form>
    </div>

@endsection