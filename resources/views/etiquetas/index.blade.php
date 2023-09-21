<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>

<body>
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
                        <a class="btn btn-primary btn-sm" href="{{ route('etiqueta.edit', $etiqueta) }}">Editar</a>
                        <form method="POST" action="{{ route('etiqueta.destroy', ['id' => $etiqueta->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>
