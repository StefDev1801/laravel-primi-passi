<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
        
    </head>
    <body class="antialiased">
        <div class="nav_bar">
            <ul>
                @foreach ($navBarItems as $navBarItem)
                <li>
                    {{ $navBarItem }}
                </li>
                @endforeach
            </ul>
        </div>
        <h1>{{ $hello }}</h1>
        <div>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla corporis, fuga possimus aut perspiciatis repellat aspernatur sequi iste quidem dolorum, reiciendis ratione, cum rerum omnis porro maxime voluptatibus repudiandae explicabo.
        </div>
    </body>
</html>
