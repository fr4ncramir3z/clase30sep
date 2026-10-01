<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editar registro existente:</h1>
    <form action="{{ route('biblioteca.update', $bibliotecas->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Libro:</label>
        <br>
        <input type="text" name="libro" value="{{ $bibliotecas->libro }}">
        <br>
        <label for="">Categoria:</label>
        <br>
        <input type="text" name="categoria" value="{{ $bibliotecas->categoria }}">
        <br>
        <label for="">Autor:</label>
        <br>
        <input type="text" name="autor" value="{{ $bibliotecas->autor }}">
        <br>
        <label for="">Cantidad:</label>
        <br>
        <input type="number" name="cantidad" value="{{ $bibliotecas->cantidad }}">
        <br>
        <label for="">Precio:</label>
        <br>
        <input type="number" name="precio" value="{{ $bibliotecas->precio }}">
        <br>
        <label for="">Estado:</label>
        <br>
        <select name="estado" id="" class="opcion">
            <option value="Disponible" {{ $bibliotecas->estado =='Disponible' ? 'selected' : '' }}>Disponible</option>
            <option value="Prestado" {{ $bibliotecas->estado =='Prestado' ? 'selected' : '' }}>Prestado</option>
            <option value="Devuelto" {{ $bibliotecas->estado =='Devuelto' ? 'selected' : '' }}>Devuelto</option>
            <option value="Sin Existencia">Sin Existencia</option>
        </select>
        <br>
        <button type="submit" >Actualizar</button>
    </form>
    <br>
    <a href="{{route('biblioteca.index')}}">Pagina principal</a>
    
</body>
</html>