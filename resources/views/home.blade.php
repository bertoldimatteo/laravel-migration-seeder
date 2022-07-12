<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Train</title>
</head>
<body>
    <h1>Treni di oggi</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                <h2>Compagnia:</h2>
                <p>{{$train->azienda}}</p>
                <h3>Stazione di partenza</h3>
                <p>{{$train->stazione_di_partenza}}</p>
                <h3>Orario previsto di arrivo:</h3>
                <p>{{$train->orario_di_partenza}}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>