<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>{{ config('app.name') }}</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/erwmlogo.png') }}" />
    
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<body class="bg-white dark:bg-slate-900">
    @inertia
</body>
</html>