<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ @asset('button.css') }}">
    <link rel="stylesheet" href="{{ @asset('css/app.css') }} ">
    <title>@yield('title-block')</title>
</head>
<body>
    <style>
        .body{
  background-image: url('https://img.freepik.com/free-vector/vibrant-pink-watercolor-painting-background_53876-58931.jpg?w=2000');
}
    </style>
    <div class="body">
    @include('inc.header')
    
    @yield('content')
    </div>

</body>
</html>
