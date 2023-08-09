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
            <h1>Page d'Administration</h1>
            <div class="admin-links">
                <a href="{{ route('reserve_liste') }}" class="btn btn-primary"> Liste des Réservations</a>
                <a href="{{ route('Administrateur') }}" class="btn btn-primary">Liste des Managers</a>
            </div>
        </div>
        
        <div class="admin-content">

            <a href="{{ route('ajout')}}" class="btn btn-success">Ajouter</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                 <button type="submit" class="btn btn-primary">Logout</button>
            </form>


            </>

            <h2>Liste des Managers</h2>

        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @csrf
                @foreach($users as $user)
                  <tr>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                      <td class="action-buttons">

<a href="{{ route('manager.edit',$user->id) }}">
    <button type="submit" class="btn btn-primary">Modifier</button>
</a>
</td>
<td>

<div>
    <form action="{{ route('manager.destroy',$user->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Supprimer</button>
    </form>
</div>


                      </td>
                  </tr>
                  @endforeach
              </tbody>
        </table>

    </div>



</body>
</html>
