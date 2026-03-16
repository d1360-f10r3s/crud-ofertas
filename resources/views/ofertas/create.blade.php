<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Index de ofertas">
    <meta name="author" content="Diego Emilio Flores González">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Creación de ofertas</title>
</head>

<body class="font-mono max-w-xl mx-auto min-h-dvh bg-slate-900 text-white">

    @if($errors->any())
        <div class="alert alert-danger mb-6 px-4 py-3 rounded bg-red-500 text-white">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ofertas.store') }}" method="POST">
        @csrf
    
    <h1 class="text-4xl font-extrabold leading-tight mt-8 mb-6 text-center text-orange-500">Crear Oferta</h1>

        
            <label class="text-gray-300 font-extrabold">Título:</label>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" class="w-full mb-4 px-3 py-2 bg-transparent border border-white rounded text- focus:outline-none focus:border-orange-400">
        <br><br>
            <label class="text-gray-300 font-extrabold">Vigencia:</label>
            <input type="date" name="vigencia" id="vigencia" class="w-full mb-4 px-3 py-2 bg-transparent border border-white rounded text- focus:outline-none focus:border-orange-400">
        <br><br>
            <label class="text-gray-300 font-extrabold">Tienda:</label>
            <input type="text" name="tienda" id="tienda" value="{{ old('tienda') }}" class="w-full mb-4 px-3 py-2 bg-transparent border border-white rounded text- focus:outline-none focus:border-orange-400">
        <br><br>
            <label class="text-gray-300 font-extrabold">Precio original:</label>
            <input type="number" name="precio_original" id="precio_original" value="{{ old('precio_original') }}" class="w-full mb-4 px-3 py-2 bg-transparent border border-white rounded text- focus:outline-none focus:border-orange-400">
        <br><br>
            <label class="text-gray-300 font-extrabold">Precio con descuento:</label>
            <input type="number" name="precio_descuento" id="precio_descuento" value="{{ old('precio_descuento') }}" class="w-full mb-4 px-3 py-2 bg-transparent border border-white rounded text- focus:outline-none focus:border-orange-400">
        <br><br>

        <div class="flex justify-center">
        <button class="bg-orange-600 hover:bg-blue-900 text-white
        font-bold py-2 px-4 rounded-lg text-center" type="submit" value="Crear Oferta">Crear Oferta</button>
        </div>

        <br>

        <a href="{{ route('ofertas.index') }}" 
        class="text-orange-300 hover:text-blue-900 underline
        font-bold py-2 px-4 rounded-lg text-center flex justify-center" type="submit" value="Enviar">
        Volver a la lista de ofertas
        </a>
    

    </form>
</body>
</html>