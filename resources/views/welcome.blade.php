<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
        @foreach ($treni as $treno)
            <li>azienda : <h3>{{$treno->azienda}}</h3></li>
            <li>stazione di partenza : <h3>{{$treno->stazione_partenza}}</h3></li>
            <li>stazione di arrivo : <h3>{{$treno->stazione_arrivo}}</h3></li>
            <li>orario di partenza : <h3>{{$treno->orario_partenza}}</h3></li>
            <li>orario di arrivo : <h3>{{$treno->orario_arrivo}}</h3></li>
            <li>codice treno : <h3>{{$treno->codice_treno}}</h3></li>
            <li>numero carrozze : <h3>{{$treno->numero_carrozze}}</h3></li>
        @endforeach
    </body>
</html>

