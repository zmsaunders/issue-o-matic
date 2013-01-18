<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Current Issues</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ Asset::container('bootstrapper')->styles() }}
</head>
<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2">
                <div class="well sidebar-nav">
                    <ul class="nav nav-list">
                        @section('nav')
                            <li class="nav-header">Tickets</li>
                            <li><a href="/">New</a></li>
                        @yield_section
                    </ul>
                </div>
            </div>
            <div class="span10">
                <header class="row-fluid">
                    <h1>What is this, I don't even.</h1>
                </header>
                @yield('content')
            </div>
        </div>
    </div>

    {{ Asset::container('bootstrapper')->scripts() }}
</body>
</html>
