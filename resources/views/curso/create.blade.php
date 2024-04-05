<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear Curso</h1>

<form action="{{route('curso.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese el nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Ingrese la descripcion:
    <br>
    <input type="text" name="descripcion">
</label>
<br><br>
<label >Adjuntar archivo PDF</label>
<br><br>
<input type="file" name="urlPdf" class="form-control-file" accept="pdf/*">
<br><br>
<button type="submit">Enviar Formulario:</button>

</form>

    
</body>
</html>