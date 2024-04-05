<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listar Cursos</h1>

    @foreach ($cursos as $curso)
    <tr>
        <br>
        <td>{{$curso->name}}</td>
        <td>{{$curso->descripcion}}</td>
        <td>{{$curso->urlPdf}}</td>
        <td> <iframe src="{{ 'http://localhost/larav0967/public/storage/imagenes/' .$curso->urlPdf }}"  frameborder="0"></iframe></td>
        <td><a href="{{route('curso.show',$curso->id)}}">Mostrar</a></td>
        
        <form action="{{route('curso.destroy',$curso->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
         </form>
        
    </tr>
@endforeach

    
</body>
</html>