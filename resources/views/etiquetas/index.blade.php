<x-layouts.cliente>

    <div>
        <a href="{{ route('etiqueta.create') }}">
            <button type="button"
                class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">
                Crear Etiqueta
            </button>
        </a>
    </div>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>titulo</th>
                <th>accion</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($etiquetas as $etiqueta)
                <tr>
                    <td>{{ $etiqueta->id }}</td>
                    <td>{{ $etiqueta->title }}</td>
                    <td width="10px">
                        <a href="{{ route('etiqueta.edit') }}">
                            <button type="button"
                                class="border border-teal-500 bg-teal-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-teal-600 focus:outline-none focus:shadow-outline">
                                Editar
                            </button></a>
                        <form method="POST" action="{{ route('etiqueta.destroy', ['id' => $etiqueta->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="button"
                                class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    @push('script')
        <script>
            new DataTable('#example');
        </script>
    @endpush
</x-layouts.cliente>
