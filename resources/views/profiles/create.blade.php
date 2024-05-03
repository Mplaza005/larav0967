<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Formulario profil</h1>
    <form action="{{route('profile.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
      

        <br>
      
        <select name="user_id">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->id }} - {{ $user->name }}- {{ $user->email }}</option>
            @endforeach
        </select>

        <br><br>

        <label>
            title:
            <br>
            <input type="text" name="title">
        </label>
        <br><br>
        <label>
            biografia:
            <br>
            <input type="text" name="biografia">
        </label>
        <br>
        <br>
        <label>
            website:
            <br>
            <input type="text" name="website">
        </label>

       
         <br> <br>
        <button type="submit">Enviar Formulario:</button>
        </form>
           
</body>
</html>