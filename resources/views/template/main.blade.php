<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <title>@yield('title', 'PPDB Online - SMP Putra Perintis')</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @yield('head')
</head>

<body>
    @yield('body')
    @yield('foot')
</body>

</html>
