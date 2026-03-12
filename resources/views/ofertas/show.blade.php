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
    <div>
        <h2>{{ $oferta->titulo }}</h2>
        <p>ID: {{ $oferta->id }}</p>
        <p>Tienda: {{ $oferta->tienda }}</p>
        <p>Vigencia: {{ $oferta->vigencia }}</p>
        <p>Precio Original: {{ $oferta->precio_original }}</p>
        <p>Precio con Descuento: {{ $oferta->precio_descuento }}</p>
        <p>Porcentaje de Descuento: {{ number_format($oferta->getPorcentajeDescuento(), 2) }}%
            @if ($oferta->getPorcentajeDescuento() >= 35)
            🔥 OFERTA FUERTE
            @endif
        </p>
        <p>Creado en: {{ $oferta->created_at }}</p>
        <p>Actualizado en: {{ $oferta->updated_at }}</p>
    </div>

    <p>
        <a href="{{ route('ofertas.index') }}">Volver a la lista de ofertas</a>
    </p>

    <p>
        <a href="{{ route('ofertas.edit', $oferta->id) }}">Editar oferta</a>
    </p>

    <form action="{{ route('ofertas.destroy', $oferta->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button onclick="return confirm('¿Eliminar oferta?')">
                Eliminar
            </button>
    </form>

</body>
</html>