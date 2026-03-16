<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Index de ofertas">
    <meta name="author" content="Diego Emilio Flores González">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Index de ofertas</title>
</head>

<body class="font-mono max-w-xl mx-auto min-h-dvh bg-slate-900 text-white">
    <h1 class="text-4xl font-extrabold leading-tight mt-8 mb-6 text-center text-orange-500">Lista de ofertas</h1>

    <div class="bg-slate-800 p-4 rounded-lg shadow-md text-center">
    <ul>
        @foreach ($ofertas as $oferta)
            <li>
                <a class="text-orange-500 hover:text-orange-300 underline" href="{{ route('ofertas.show', $oferta) }}"> {{ $oferta->titulo }}</a> - <span class="italic">{{ $oferta->tienda }} </span> <br> <span class="font-bold"> Precio Original: </span> {{ $oferta->precio_original }} <br> <span class="font-bold"> Precio con Descuento: </span>{{ $oferta->precio_descuento }} <br>
                @if ($oferta->getPorcentajeDescuento() >= 35)
                <p class="font-bold text-amber-300">🔥 GRAN OFERTA</p>
                @endif
                <br>
            </li>
        @endforeach
    </ul>
    </div>

    <div class="flex justify-center mt-6 mb-4">
        <a href="{{ route('ofertas.create') }}" class="bg-orange-600 hover:bg-blue-900 text-white
        font-bold py-3 px-8 rounded-lg text-center
        shadow-md font-mono" type="submit" value="Enviar">Crear nueva oferta</a>
    </div>

</body>
</html>