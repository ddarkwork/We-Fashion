<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield("description")">
    <title>@yield("title")</title>
</head>
<body>
    {{-- Navbar --}}
    @include("components.admin_navbar")
    @yield("content")
</body>
<hr>
<footer>
    @include("components.footer")
</footer>
</html>