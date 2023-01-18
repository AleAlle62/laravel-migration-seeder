<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>TRENI</title>
</head>
    <body>
        <div class="biglietti">
            <h1>BIGLIETTI TRENO</h1>
            @foreach ($treni as $treno)
                <li>azienda : <span class="info">{{$treno->azienda}}</span></li>
                <li>stazione di partenza : <span class="info">{{$treno->stazione_partenza}}</ class="info"></li>
                <li>stazione di arrivo : <span class="info">{{$treno->stazione_arrivo}}</span></li>
                <li>orario di partenza : <span class="info">{{$treno->orario_partenza}}</span></li>
                <li>orario di arrivo : <span class="info">{{$treno->orario_arrivo}}</span></li>
                <li>codice treno : <span class="info">{{$treno->codice_treno}}</span></li>
                <li>numero carrozze : <span class="info">{{$treno->numero_carrozze}}</span></li>
                <br>
            @endforeach
        </div>
    </body>
</html>

