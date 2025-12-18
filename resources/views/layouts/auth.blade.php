<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Login' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    @yield('content')
</body>
</html>
