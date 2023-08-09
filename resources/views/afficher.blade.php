<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
    <title>Document</title>
</head>
<body>
 <div class="admin-container">
        <div class="admin-header">
            <h1>Page d'Administration</h1>
            <div class="admin-links">
                <a href="#" class="btn btn-primary">Liste des Managers</a>
                <a href="#" class="btn btn-primary">Liste des Réservations</a>
            </div>
        </div>

        <div class="admin-content">
            <a href="#"class="btn btn-success">Ajouter</a>
            <h2>Liste des Managers</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                  <tr>
                          <td>{{$user->name}}</td>
                      <td class="action-buttons">
                          <a href="#" class="btn btn-primary">Modifier</a>
                           <button type="submit" class="btn btn-danger">Supprimer</button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
        </table>

    </div>



</body>
</html>
