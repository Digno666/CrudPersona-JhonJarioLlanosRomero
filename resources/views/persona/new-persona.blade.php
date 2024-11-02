<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registrar Persona</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans antialiased">
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Registrar Persona</h1>

    @if ($errors->any())
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
        <strong class="font-bold">Por favor corrige los errores debajo:</strong>
        <ul class="mt-2 list-disc list-inside">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ url('persona') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      {{ csrf_field() }}
      
      <div class="mb-4">
        <label for="per_cod" class="block text-gray-700 text-sm font-bold mb-2">Carnet:</label>
        <input type="text" name="per_cod" placeholder="3924123" value="{{ old('per_cod') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
      </div>
      
      <div class="mb-4">
        <label for="per_nom" class="block text-gray-700 text-sm font-bold mb-2">Nombres:</label>
        <input type="text" name="per_nom" placeholder="Juan Carlos" value="{{ old('per_nom') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
      </div>
      
      <div class="mb-4">
        <label for="per_appm" class="block text-gray-700 text-sm font-bold mb-2">Apellidos:</label>
        <input type="text" name="per_appm" placeholder="Perez Quintanilla" value="{{ old('per_appm') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
      </div>

      <div class="mb-4">
        <label for="per_prof" class="block text-gray-700 text-sm font-bold mb-2">Profesión:</label>
        <input type="text" name="per_prof" placeholder="Ingeniero" value="{{ old('per_prof') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      
      <div class="mb-4">
        <label for="per_telf" class="block text-gray-700 text-sm font-bold mb-2">Teléfono:</label>
        <input type="text" name="per_telf" placeholder="335-99037" value="{{ old('per_telf') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      
      <div class="mb-4">
        <label for="per_cel" class="block text-gray-700 text-sm font-bold mb-2">Celular:</label>
        <input type="text" name="per_cel" placeholder="721-07856" value="{{ old('per_cel') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      
      <div class="mb-4">
        <label for="per_email" class="block text-gray-700 text-sm font-bold mb-2">Correo:</label>
        <input type="email" name="per_email" placeholder="juanperez@uagrm.edu.bo" value="{{ old('per_email') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      
      <div class="mb-4">
        <label for="per_dir" class="block text-gray-700 text-sm font-bold mb-2">Dirección:</label>
        <input type="text" name="per_dir" placeholder="Av. Brasil #540" value="{{ old('per_dir') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      
      <div class="mb-4">
        <label for="per_fnac" class="block text-gray-700 text-sm font-bold mb-2">Fecha Nac.:</label>
        <input type="date" name="per_fnac" value="{{ old('per_fnac') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      
      <div class="mb-4">
        <label for="per_lnac" class="block text-gray-700 text-sm font-bold mb-2">Lugar Nac.:</label>
        <input type="text" name="per_lnac" placeholder="Santa Cruz" value="{{ old('per_lnac') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      
      <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Registrar Amigo</button>
      
      <div class="mt-4">
        <a href="{{ route('persona.index') }}" class="text-blue-500 hover:underline">Volver a Amigos</a>
      </div>
    </form>
  </div>
</body>
</html>
