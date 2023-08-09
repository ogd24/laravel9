<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/register.css')}}">
    <title>Document</title>
</head>
<body>


    <div class="glass-container">
        <h1>Modifier le  manager </h1>
        <form action="{{ route('manager.update',$users->id) }}" method="post">
@csrf
@method('PUT')
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" value="{{ $users->name }}" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ $users->email }}" required>
            </div>

            <button type="submit">Valider</button>




        </form>
    </div>





</body>
</html>
