<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        {{config('app.name')}}
    </title>

    @vite('resources/css/app.css')
</head>
<body class="bg-[#FFEDD6]">
    <x-header/>

    {{$slot}}

    <x-footer/>
</body>
</html>
