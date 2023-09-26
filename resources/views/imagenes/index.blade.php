<x-layouts.cliente>
    <div class="py-8">
        <a href="{{ route('etiqueta.create') }}">
            <button type="button"
                class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">
                <i class="fa-solid fa-plus"></i>
            </button>
        </a>
    </div>
    <div class="grid grid-cols-5 gap-2">
        @foreach ($imagenes as $imagen)
            <div class="border rounded-lg shadow-lg">
                <img src="{{ asset('storage/imagen/' . $imagen->url) }}" class="w-full rounded-t-lg" alt="">
                <h3 class="font-medium">{{ $imagen->title }}</h3>
            </div>
        @endforeach
    </div>
    {{-- @section('css')
        <style>
            .image-whaper {
                position: relative;
                padding-bottom: 56.25%
            }

            .image-whaper img {
                position: absolute;
                object-fit: cover;
                width: 100%;
                height: 100%;
            }
        </style>
    @endsection --}}
</x-layouts.cliente>
