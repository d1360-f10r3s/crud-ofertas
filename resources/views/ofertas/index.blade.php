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
     <h1>Lista Ofertas</h1>

    <p>
        <a href="{{ route('ofertas.create') }}">Crear nueva oferta</a>
    </p>

    <ul>
        @foreach ($ofertas as $oferta)
            <li>
                <a href="{{ route('ofertas.show', $oferta) }}">{{ $oferta->titulo }}</a> - {{ $oferta->tienda }} - 
                Vigencia: {{ $oferta->vigencia }} - Precio Original: {{ $oferta->precio_original }} - 
                Precio con Descuento: {{ $oferta->precio_descuento }} - Porcentaje de Descuento: {{ number_format($oferta->getPorcentajeDescuento(), 2) }}%
                @if ($oferta->getPorcentajeDescuento() >= 35)
                🔥 OFERTA FUERTE
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>