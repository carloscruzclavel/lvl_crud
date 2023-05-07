@extends('theme.base')
@extends('theme.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>CRUD-LARAVEL</title>
</head>
<body>

  @section('content')
    <div class="container py-5 text-center">
        <div class="content container">
            <h1></h1>
        </div>
        


              <p class="card-text"><b>Bienvenido, </b>Presione el boton para mostrar la lista de clientes</p>
              <a href="{{ route('client.index') }}" class="btn btn-success">Listado de Clientes</a>

    </div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  


</body>
</html>

