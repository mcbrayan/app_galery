<x-layouts.cliente>
    <form action="{{ route('etiqueta.update') }}" method="post">
        <div class="flex flex-col">
            <label for="titulo">Titulo</label>
            <input class="border border-black rounded" name="title" id="titulo" type="text"
                value="{{ old('etiqueta', $etiqueta->title) }}">
        </div>


    </form>


</x-layouts.cliente>
