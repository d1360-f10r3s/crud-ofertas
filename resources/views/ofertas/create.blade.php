<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Index de ofertas">
    <meta name="author" content="Diego Emilio Flores González">
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
    <title>Index de ofertas</title>
</head>

<body>
     <h1>Crear Oferta</h1>

    <p>
        <a href="{{ route('ofertas.index') }}">Volver a la lista de ofertas</a>
    </p>

    <form action="{{ route('ofertas.store') }}" method="POST">
        @csrf
        
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" required>
        <br><br>
            <label for="vigencia">Vigencia:</label>
            <input type="date" name="vigencia" id="vigencia" required>
        <br><br>
            <label for="tienda">Tienda:</label>
            <input type="text" name="tienda" id="tienda" required>
        <br><br>
            <label for="precio_original">Precio Original:</label>
            <input type="number" name="precio_original" id="precio_original" required>
        <br><br>
            <label for="precio_descuento">Precio con Descuento:</label>
            <input type="number" name="precio_descuento" id="precio_descuento" required>
        <br><br>

        <button type="submit">Crear Oferta</button>
    </form>
</body>
</html>