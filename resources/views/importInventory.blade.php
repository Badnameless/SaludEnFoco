<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data" action="{{route('inventories.import')}}">
        @csrf
        <input type="file" name="fileImport" id="fileImport">
        <button type="submit">Importar</button>
    </form>
</body>
</html>