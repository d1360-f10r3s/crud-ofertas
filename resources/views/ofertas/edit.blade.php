<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Index de ofertas">
    <meta name="author" content="Diego Emilio Flores González">
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
    <title>Mostrar Oferta Individual</title>
</head>

<body>
    <form action="{{ route('ofertas.update', $oferta->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        
            <label>Título:</label>
            <input type="text" id="titulo" name="titulo"
            value="{{ old('titulo', $oferta->titulo) }}" >
            <br><br>
        
            <label>Vigencia:</label>
            <input type="date" name="vigencia" id="vigencia" 
            value="{{ old('vigencia', $oferta->vigencia) }}" >
            <br><br>
        
            <label>Tienda:</label>
            <input type="text" name="tienda" id="tienda" 
            value="{{ old('tienda', $oferta->tienda) }}" >
            <br><br>
        
            <label>Precio Original:</label>
            <input type="number" name="precio_original" id="precio_original" 
            value="{{ old('precio_original', $oferta->precio_original) }}" >
            <br><br>
            
            <label for="precio_descuento">Precio con Descuento:</label>
            <input type="number" name="precio_descuento" id="precio_descuento" 
            value="{{ old('precio_descuento', $oferta->precio_descuento) }}" >
            <br><br>

            <button type="submit">Actualizar Oferta</button>
            <br><br>
            <p>
                <a href="{{ route('ofertas.index') }}">Volver a la lista de ofertas</a>
            </p>

    </form>
</body>
</html>