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

    <div class="container">
        <h1>Page de Réservation</h1>
        <div class="welcome-message">
            <h2>Bienvenue à la Nuit du Rire !</h2>
            <p>Rejoignez-nous pour une soirée de divertissement et de rires ! Réservez dès maintenant votre place.</p>
        </div>



        <form  action="/reserverTicket"  method="POST"  class="reservation-form">
            @csrf
            <div class="form-group">
                <label for="numero">Numéro WhatsApp :</label>
                <input type="number" id="numero" name="numero" class="form-control" >
            </div>
            <div class="form-group">
                <label for="places">Nombre de Places :</label>
                <input type="number" id="places" name="place" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Réserver</button>
        </form>
    </div>
</body>
</html>
