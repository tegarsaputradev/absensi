<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('temp.rel.rel')
    <title>{{$title}}</title>
</head>

<body>
    @yield('isi')
    @include('temp.script.script')
</body>

</html>
