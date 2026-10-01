<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bibliotecas</title>
</head>
<body>
    <div class="titulo">
    <h1>Biblioteca</h1>
    <h2>Libros a disposicion</h2>
    <table border="3" class="formulario">
    <thead class="form">
        <tr>
            <th>ID</th>
            <th>Libro</th>
            <th>Categoria</th>
            <th>Autor</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    </div>
    <tbody class="form">
        @foreach ($biblioteca as $bibliotecas)
        <tr>
            <td>{{$bibliotecas->id}}</td>
            <td>{{$bibliotecas->libro}}</td>
            <td>{{$bibliotecas->categoria}}</td>
            <td>{{$bibliotecas->autor}}</td>
            <td>{{$bibliotecas->cantidad}}</td>
            <td>{{$bibliotecas->precio}}</td>
            <td>{{$bibliotecas->estado}}</td>
            <td><a href="{{route('biblioteca.edit', $bibliotecas->id)}}">Clid aqui</a></td>
            <td>
                        <form action="{{ route('biblioteca.destroy', $bibliotecas->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    <br>
        <a href="{{route('biblioteca.create')}}">Ingresar Nuevo libro</a>

</body>
</html>