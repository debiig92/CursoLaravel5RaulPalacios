<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Frond End</title>
</head>
<body>
    @yield('content')

    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/myjs.js') !!}
</body>
</html>