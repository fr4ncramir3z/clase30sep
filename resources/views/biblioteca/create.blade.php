<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Libro</title>
</head>
<body>
    <h1>Registrar nuevo libro:</h1>
    <form action="{{ route('biblioteca.store')}}" method="POST">
        @csrf
        <label for="">Libro:</label>
        <br>
        <input type="text" name="libro" >
        <br>
        <label for="">Categoria:</label>
        <br>
        <input type="text" name="categoria" >
        <br>
        <label for="">Autor:</label>
        <br>
        <input type="text" name="autor" >
        <br>
        <label for="">Cantidad:</label>
        <br>
        <input type="number" name="cantidad" >
        <br>
        <label for="">Precio:</label>
        <br>
        <input type="number" name="precio" >
        <br>
        <label for="">Estado:</label>
        <br>
        <select name="estado" id="" class="opcion">
            <option value="Disponible">Disponible</option>
            <option value="Prestado">Prestado</option>
            <option value="Devuelto">Devuelto</option>
            <option value="Sin Existencia">Sin Existencia</option>
        </select>
        <br>
        <button type="submit" >Guardar</button>
    </form>
    <br>
    <a href="{{route('biblioteca.index')}}">Pagina principal</a>

</body>
</html>