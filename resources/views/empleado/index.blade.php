<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!-- Employee List Presentation styled with Tailwind CSS -->
    <div class="container mx-auto py-10">
        <div class="text-center">
            <h1 class="text-3xl font-bold">Employee List</h1>
            <a href="{{ url('/empleado/create') }}"
                class="mt-4 cursor-pointer hover:bg-green-400 inline-block px-4 py-2 rounded font-bold border border-black transition-all duration-300">
                Create new
            </a>
        </div>
    </div>

    <!-- Show Employee List -->
    <div class="container mx-auto">
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Photo</th>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Apellido Paterno</th>
                    <th class="px-4 py-2">Apellido Materno</th>
                    <th class="px-4 py-2">Correo</th>
                    <th class="px-4 py-2">Estado</th>
                    <th class="px-4 py-2">Ciudad</th>
                    <th class="px-4 py-2">País</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td class="border px-4 py-2">{{ $empleado->id }}</td>
                        <td class="border px-4 py-2">
                            <img src="{{ asset('storage/' . $empleado->foto) }}" alt="profile pic" class="w-20">
                        </td>

                        <td class="border px-4 py-2">{{ $empleado->nombre }}</td>
                        <td class="border px-4 py-2">{{ $empleado->apellidoPaterno }}</td>
                        <td class="border px-4 py-2">{{ $empleado->apellidoMaterno }}</td>
                        <td class="border px-4 py-2">{{ $empleado->correo }}</td>
                        <td class="border px-4 py-2">{{ $empleado->estado }}</td>
                        <td class="border px-4 py-2">{{ $empleado->ciudad }}</td>
                        <td class="border px-4 py-2">{{ $empleado->pais }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ url('/empleado/' . $empleado->id . '/edit') }}"
                                class="bg-blue-600 text-white cursor-pointer hover:bg-blue-400 inline-block px-4 py-2 rounded font-bold transition-all duration-300">
                                Edit
                            </a>

                            <form action="{{ url('/empleado/' . $empleado->id) }}" class="inline-block" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('¿Quieres borrar?')"
                                    class="bg-red-600 text-white cursor-pointer hover:bg-red-400 inline-block px-4 py-2 rounded font-bold transition-all duration-300"
                                    value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="container mx-auto my-4">
            {{ $empleados->links() }}
        </div>
    </div>

</body>

</html>
