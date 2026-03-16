<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Index de ofertas">
    <meta name="author" content="Diego Emilio Flores González">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Mostrar Oferta Individual</title>
</head>

<body class="font-mono max-w-xl mx-auto min-h-dvh bg-slate-900 text-white">

    <h1 class="text-4xl font-extrabold font-mono leading-tight mt-8 mb-6 text-orange-500 text-center">Detalles de la oferta</h1>

    <div class="bg-slate-800 p-4 rounded-lg shadow-md">
        <h2 class="text-yellow-400 text-center text-lg font-bold">{{ $oferta->titulo }}</h2>
        <p class="text-white"><span class="text-yellow-400">ID: </span>{{ $oferta->id }}</p>
        <p class="text-white"><span class="text-yellow-400">Tienda: </span>{{ $oferta->tienda }}</p>
        <p class="text-white"><span class="text-yellow-400">Vigencia: </span>{{ $oferta->vigencia }}</p>
        <p class="text-white"><span class="text-yellow-400">Precio original: </span>{{ $oferta->precio_original }}</p>
        <p class="text-white"><span class="text-yellow-400">Precio con descuento: </span>{{ $oferta->precio_descuento }}</p>
        <p class="text-white"><span class="text-yellow-400">Porcentaje de descuento: </span>{{ number_format($oferta->getPorcentajeDescuento(), 2) }}%
            @if ($oferta->getPorcentajeDescuento() >= 35)
            <p class="font-bold">🔥 GRAN OFERTA </p>
            @endif
        </p>
        <p class="text-white"><span class="text-yellow-400">Creado en: </span>{{ $oferta->created_at }}</p>
        <p class="text-white"><span class="text-yellow-400">Actualizado en: </span>{{ $oferta->updated_at }}</p>
    </div>

    <div class="flex justify-center mt-6 mb-4 gap-8">
        <a href="{{ route('ofertas.edit', $oferta->id) }}" class="bg-orange-600 hover:bg-blue-900 text-white
        font-bold py-3 px-8 rounded-lg text-center
        shadow-md font-mono" type="submit" value="Enviar">Editar oferta</a>
    
        <form action="{{ route('ofertas.destroy', $oferta->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-red-600 hover:bg-red-900 text-white
                font-bold py-2 px-4 rounded-lg text-center
                shadow-md font-mono" type="submit" value="Enviar" 
                onclick="return confirm('¿Eliminar oferta?')">
                    Eliminar oferta
                </button>
        </form>
    </div>

    <a href="{{ route('ofertas.index') }}" 
        class="text-orange-300 hover:text-blue-900 underline
        font-bold py-2 px-4 rounded-lg text-center flex justify-center" type="submit" value="Enviar">
        Volver a la lista de ofertas
    </a>
</body>
</html>