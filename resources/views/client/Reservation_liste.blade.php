<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
 <div class="admin-container">
        <div class="admin-header">
            <h1>Liste des Réservations</h1>
            {{-- <div class="admin-links">
                <a href="#" class="btn btn-primary">Liste des Managers</a>
                <a href="#" class="btn btn-primary"></a>
            </div> --}}
        </div>

        <div class="admin-content">

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                 <button type="submit" class="btn btn-primary">Logout</button>
            </form>
            <h2>Liste des reservations</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Nombre de tickets</th>

                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                  <tr>
                          <td>{{$user->name}}</td>
                          <td>{{$user->place}}</td>
                      {{-- <td class="action-buttons">
                          <a href="#" class="btn btn-primary">Modifier</a>
                           <button type="submit" class="btn btn-danger">Supprimer</button>

                      </td> --}}
                  </tr>
                  @endforeach
              </tbody>
        </table>

    </div>



</body>
</html>
