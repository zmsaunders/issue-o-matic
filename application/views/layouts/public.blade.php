<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Current Issues</title>
    <meta name="viewport" content="width=device-width">
    {{ Asset::container('bootstrapper')->styles() }}
</head>
<body>

    @yield('content')

    {{ Asset::container('bootstrapper')->scripts() }}
</body>
</html>
