<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://kit.fontawesome.com/951e01f29f.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="px-8">
        <x-navbar />
        {{ $slot }}
    </div>
    <div class="hidden absolute top-0 h-screen w-screen bg-white" id="ModalBody">
        <div class="flex justify-between px-6">
            <div id="modal-componet-container">
                <div class="modal-flex-container">
                    <div class="modal-bg-container"></div>
                    <div class="modal-space-container"></div>
                    <div class="modal-container">
                        <div class="modal-wrapper"></div>
                        <div class="modal-actions">
                            <button class="p-3 bg-red-700 text-white" onclick="ShowModal()">Cerrar</button>
                            <button class="p-3 bg-blue-400 text-white">Guardar</button>

                        </div>

                    </div>
                </div>
            </div>
            <div>Titulo</div>
            <div>
                <button onclick="ShowModal()">x</button>
            </div>
            <br>
            <div class="my-8">
                <form action="{{ route('imagen.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="imagen" id="" accept="image/*">
                    <br>
                    @error('imagen')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                    <button type="sutmi"
                        class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                        Primary
                    </button>
                </form>
            </div>
        </div>
        <div class="h-9">
            <form>
                <textarea class="border border-black, m-4 flex" name="description" id="" cols="20" rows="5"></textarea>
            </form>
        </div>
        <br>
        <div>
            <br>
            <div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        function ShowModal() {
            $("#ModalBody").toggle();
        }
    </script>
    @stack('script')
</body>


</html>
