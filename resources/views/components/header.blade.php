<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Links --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <title>Document</title>
</head>

<body>

    {{ $slot }}
    @livewireScripts()

</body>

</html>