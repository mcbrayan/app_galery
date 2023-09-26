<x-layouts.cliente>
    <form action="{{ route('etiqueta.store') }}" method="POST">

        @csrf
        <br>
        Crear Etiqueta: <br>
        <br>
        @if (session('info'))
            <div class="alert alert-success">
                <strong>{{ session('info') }}</strong>

            </div>
        @endif
        <div>
            <form class="m-4 flex">
                <input class="rounded-l-lg p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white"
                    placeholder="Crear Etiqueta" / name="title">
                <button
                    class="px-8 rounded-r-lg bg-yellow-400  text-gray-800 font-bold p-4 uppercase border-yellow-500 border-t border-b border-r">Crar</button>
            </form>
        </div>


    </form>


</x-layouts.cliente>
