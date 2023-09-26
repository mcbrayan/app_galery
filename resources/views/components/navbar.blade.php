<!-- component -->
<div class="relative bg-white border border-black rounded-lg shadow-lg">
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat bg-fixed"></div>

    <div class="w-full backdrop-blur-sm">
        <div class="relative z-1 h-16 mx-auto px-5 max-w-7xl flex items-center justify-between text-white">
            <a class="text-2x1 text-black " href="{{ route('etiqueta.index') }}">App Galery</a>

            <ul class="flex items-center gap-5">
                <li><a class="text-black" href="{{ route('imagen.index') }}">Imagenes</a>
                </li>
                <li><a class="text-black" href="{{ route('etiqueta.index') }}">Etiquetas</a>
                </li>
            </ul>
        </div>
    </div>
</div>
