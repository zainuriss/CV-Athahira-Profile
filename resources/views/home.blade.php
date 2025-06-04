<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CV Athahira">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Fonts --}}
    <link rel="icon" href="{{ asset('storage/assets/logo-athahira.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- Styles / Scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>CV Athahira: LPK Multimedia dan LKP Parenting</title>
</head>
<body class="dark:bg-neutral-900 bg-white">
    @include('layouts.navigation')
    <div class="w-full min-h-screen flex items-center justify-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="bg-white dark:bg-neutral-800 overflow-hidden shadow-sm w-full rounded-lg">
                <div class="p-6 text-neutral-900 dark:text-neutral-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>