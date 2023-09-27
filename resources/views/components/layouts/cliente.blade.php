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
            <div>Titulo</div>
            <div>
                <button onclick="ShowModal()">x</button>
            </div>
        </div>
        <div class="h-9">
            body
            {{-- Info --}}
        </div>
        <div>
            <div>
                <button onclick="ShowModal()">Cerrar</button>
                <button onclick="">Guardar</button>
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
