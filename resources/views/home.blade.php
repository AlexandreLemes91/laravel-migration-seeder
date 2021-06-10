<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>
            <div class="travel">
                @foreach ($travels as $travel)
                    <ul> 
                        <li>State: {{ $travel->state }}</li>
                        <li>City: {{ $travel->city }}</li>
                        <li>Hotel: {{ $travel->hotel }}</li>
                        <li>Stars: {{ $travel->hotel_star }}</li>
                        <li>Beds: {{ $travel->beds }}</li>
                        <li>Complete pension: {{ $travel->pension_complete }}</li>
                        <li>Price/Nigth: €{{ $travel->price_night }}</li>
                    </ul>
                @endforeach
            </div>
        </h1>
    </body>
</html>
