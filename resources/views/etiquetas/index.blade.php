<x-layouts.cliente>

    <div class="py-8">
        <a href="{{ route('etiqueta.create') }}">
            <button type="button"
                class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">
                <i class="fa-solid fa-plus"></i>
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
                    <td width="10px" class="flex">
                        <a href="{{ route('etiqueta.edit', ['etiqueta' => $etiqueta->id]) }}">
                            <button type="button"
                                class="border border-teal-500 bg-teal-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-teal-600 focus:outline-none focus:shadow-outline">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                        </a>
                        <form method="POST" action="{{ route('etiqueta.destroy', ['id' => $etiqueta->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        @push('script')
            <script>
                new DataTable('#example');
            </script>
        @endpush

    </table>
</x-layouts.cliente>
