<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>{{$title ?? ""}}</title>
</head>
<body>

    <x-nav/>     <!-- // tag che nasce e muore, quindi tag conclusivo. -->
    {{-- variabile segna posto --}}
    {{ $slot }}

    <x-footer/>

    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>