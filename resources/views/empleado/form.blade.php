<div class="grid grid-cols-2 gap-4">
    <div>
        <div class="mb-4">
            <label for="nombre" class="text-gray-700">Nombre:</label>
            <input type="text"
                class="form-input border-yellow-300 border p-2 rounded-md mt-1 block w-full focus:outline-none focus:border-sky-500 focus:ring-blue-500 focus:ring-1"
                id="nombre" name="nombre" value="{{ $empleado->nombre }}" required>
        </div>

        <div class="mb-4">
            <label for="apellidoPaterno" class="text-gray-700">Apellido Paterno:</label>
            <input type="text"
                class="form-input border-yellow-300 border p-2 rounded-md mt-1 block w-full focus:outline-none focus:border-sky-500 focus:ring-blue-500 focus:ring-1"
                id="apellidoPaterno" name="apellidoPaterno" value="{{ $empleado->apellidoPaterno }}" required>
        </div>

        <div class="mb-4">
            <label for="apellidoMaterno" class="text-gray-700">Apellido Materno:</label>
            <input type="text"
                class="form-input border-yellow-300 border p-2 rounded-md mt-1 block w-full focus:outline-none focus:border-sky-500 focus:ring-blue-500 focus:ring-1"
                id="apellidoMaterno" name="apellidoMaterno" value="{{ $empleado->apellidoMaterno }}" required>
        </div>

        <div class="mb-4">
            <label for="correo" class="text-gray-700">Correo:</label>
            <input type="email"
                class="form-input border-yellow-300 border p-2 rounded-md mt-1 block w-full focus:outline-none focus:border-sky-500 focus:ring-blue-500 focus:ring-1"
                id="correo" name="correo" value="{{ $empleado->correo }}" required>
        </div>

        <div class="mb-4">
            <label for="foto" class="text-gray-700">Foto:</label>
            <input type="file"
                class="form-input border-yellow-300 border p-2 rounded-md mt-1 block w-full focus:outline-none focus:border-sky-500 focus:ring-blue-500 focus:ring-1"
                id="foto" value="{{ $empleado->foto }}" name="foto">
        </div>

        <div class="mb-4">
            <label for="estado" class="text-gray-700">Estado:</label>
            <input type="text"
                class="form-input border-yellow-300 border p-2 rounded-md mt-1 block w-full focus:outline-none focus:border-sky-500 focus:ring-blue-500 focus:ring-1"
                id="estado" value="{{ $empleado->estado }}" name="estado">
        </div>
    </div>

    <div>
        <div class="mb-4">
            <label for="ciudad" class="text-gray-700">Ciudad:</label>
            <input type="text"
                class="form-input border-yellow-300 border p-2 rounded-md mt-1 block w-full focus:outline-none focus:border-sky-500 focus:ring-blue-500 focus:ring-1"
                id="ciudad" value="{{ $empleado->ciudad }}" name="ciudad">
        </div>

        <div class="mb-4">
            <label for="pais" class="text-gray-700">País:</label>
            <input type="text"
                class="form-input border-yellow-300 border p-2 rounded-md mt-1 block w-full focus:outline-none focus:border-sky-500 focus:ring-blue-500 focus:ring-1"
                id="pais" value="{{ $empleado->pais }}" name="pais">
        </div>

        <div class="mb-4">
            <label for="estadoCivil" class="text-gray-700">Estado Civil:</label>
            <input type="text"
                class="form-input border-yellow-300 border p-2 rounded-md mt-1 block w-full focus:outline-none focus:border-sky-500 focus:ring-blue-500 focus:ring-1"
                id="estadoCivil" value="{{ $empleado->estadoCivil }}" name="estadoCivil">
        </div>

        <div class="mb-4">
            <label for="genero" class="text-gray-700">Género:</label>
            <select
                class="form-input border-yellow-300 border p-2 rounded-md mt-1 block w-full focus:outline-none focus:border-sky-500 focus:ring-blue-500 focus:ring-1"
                id="genero" name="genero">
                <option value="Masculino" {{ $empleado->genero === 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Femenino" {{ $empleado->genero === 'Femenino' ? 'selected' : '' }}>Femenino</option>
            </select>

        </div>
    </div>
</div>

<button type="submit"
    class="rounded-full bg-blue-500 w-28 h-10 text-white mt-2 hover:text-black hover:bg-blue-300 transition-all duration-150">Guardar</button>
