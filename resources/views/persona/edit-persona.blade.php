<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Editar Amigo</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <strong class="font-bold">Por favor corrige los errores debajo:</strong>
                <ul class="mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method='POST' action="{{url('persona')}}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}

            <div class="mb-4">
                <label for="per_cod" class="block text-sm font-medium text-gray-700">Carnet:</label>
                <input type='text' name='per_cod' value="{{ $amigo->per_cod }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                @if ($errors->has('per_cod'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('per_cod') }}</p>
                @endif
            </div>

            <div class="mb-4">
                <label for="per_nom" class="block text-sm font-medium text-gray-700">Nombres:</label>
                <input type='text' name='per_nom' value="{{ $amigo->per_nom }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                @if ($errors->has('per_nom'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('per_nom') }}</p>
                @endif
            </div>

            <div class="mb-4">
                <label for="per_appm" class="block text-sm font-medium text-gray-700">Apellidos:</label>
                <input type='text' name='per_appm' value="{{ $amigo->per_appm }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                @if ($errors->has('per_appm'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('per_appm') }}</p>
                @endif
            </div>

            <div class="mb-4">
                <label for="per_prof" class="block text-sm font-medium text-gray-700">Profesión:</label>
                <input type='text' name='per_prof' value="{{ $amigo->per_prof }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                @if ($errors->has('per_prof'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('per_prof') }}</p>
                @endif
            </div>

            <div class="mb-4">
                <label for="per_telf" class="block text-sm font-medium text-gray-700">Teléfono:</label>
                <input type='text' name='per_telf' value="{{ $amigo->per_telf }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                @if ($errors->has('per_telf'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('per_telf') }}</p>
                @endif
            </div>

            <div class="mb-4">
                <label for="per_cel" class="block text-sm font-medium text-gray-700">Celular:</label>
                <input type='text' name='per_cel' value="{{ $amigo->per_cel }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                @if ($errors->has('per_cel'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('per_cel') }}</p>
                @endif
            </div>

            <div class="mb-4">
                <label for="per_email" class="block text-sm font-medium text-gray-700">Correo:</label>
                <input type='text' name='per_email' value="{{ $amigo->per_email }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                @if ($errors->has('per_email'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('per_email') }}</p>
                @endif
            </div>

            <div class="mb-4">
                <label for="per_dir" class="block text-sm font-medium text-gray-700">Dirección:</label>
                <input type='text' name='per_dir' value="{{ $amigo->per_dir }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>

            <div class="mb-4">
                <label for="per_fnac" class="block text-sm font-medium text-gray-700">Fecha Nac.:</label>
                <input type='text' name='per_fnac' value="{{ $amigo->per_fnac }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                @if ($errors->has('per_fnac'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('per_fnac') }}</p>
                @endif
            </div>

            <div class="mb-4">
                <label for="per_lnac" class="block text-sm font-medium text-gray-700">Lugar Nac.:</label>
                <input type='text' name='per_lnac' value="{{ $amigo->per_lnac }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                @if ($errors->has('per_lnac'))
                    <p class="text-red-500 text-xs italic">{{ $errors->first('per_lnac') }}</p>
                @endif
            </div>

            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded">Actualizar Usuario</button>
        </form>

        <p class="mt-4">
            <a href="{{ route('persona.index') }}" class="text-blue-500 hover:underline">Volver a Amigos</a>
        </p>
    </div>
</body>
</html>
