@extends('theme.base')
@extends('theme.navbar')

@section('content')
    <div class="container py-5">

        @if (isset($client))
            <h1>Editar Cliente</h1>
        @else
            <h1 class="pb-5">Crear Cliente</h1>
        @endif


        @if (isset($client))
            <form action="{{ route('client.update', $client) }}" method="post">
            @method('PUT')
        @else
            <form action="{{ route('client.store') }}" method="post">
        @endif
        

        
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" placeholder="Nombre del cliente" value="{{old('name') ?? @$client->name}}">
                @error('name')
                    <p class="form-text text-danger"> {{ $message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="due" class="form-label">Saldo</label>
                <input type="number" name="due" class="form-control" placeholder="Saldo del cliente" step="0.01" value="{{old('due') ?? @$client->due}}"> 
                @error('due')
                    <p class="form-text text-danger"> {{ $message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="comments" class="form-label">Comentarios</label>
                <textarea name="comments" cols="30" rows="4" class="form-control" value="{{old('comments') ?? @$client->comments}}"></textarea>
                @error('comments')
                    <p class="form-text text-danger"> {{ $message}}</p>
                @enderror

            </div>


            @if (isset($client))
                <button type="submit" class="btn btn-success">Editar Cliente</button>
            @else
                <button type="submit" class="btn btn-success">Guardar Cliente</button>
            @endif
            

        </form>

    </div>

@endsection