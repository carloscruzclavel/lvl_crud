@extends('theme.base')
@extends('theme.navbar')

@section('content')
    <div class="container py-5">
        <h1>Listado de Clientes</h1>
        <a href="{{ route('client.create') }}" class="btn btn-primary mb-3 float-end">Crear Cliente</a>

        @if (Session::has('mensaje'))   
            <div class="alert alert-info my-5">
                {{Session::get('mensaje') }}
            </div>    
        @endif
        

        <table class="table table-striped table-hover">
            <thead>
                <th>Nombre</th>
                <th>Saldo</th>
                <th>Comentario</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @forelse ($clients as $detail)
                    <tr>
                        <td>{{ $detail->name}}</td>
                        <td>{{ $detail->due}}</td>
                        <td>{{ $detail->comments}}</td>
                        <td>
                            <a href="{{ route('client.edit', $detail )}}" class="btn btn-warning"> Actualizar </a>
                            
                            <form action="{{ route('client.destroy', $detail) }}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro de eliminar este cliente')"> Eliminar</button>
                            </form>
                        </td>

                        
                    </tr>
                @empty
                <tr>
                    <td colspan="4">No Hay Registros</td>
                </tr>
                    
                @endforelse
                
            </tbody>
        </table>

        @if ($clients->count())
            {{ $clients->links() }}
        @endif
        

    </div>

    

@endsection