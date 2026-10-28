<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Campus Gear')</title>
    <style>
        body { font-family: system-ui, -apple-system, sans-serif; background: #f5f6f8; margin: 0; }
        .container { max-width: 920px; margin: 40px auto; padding: 0 16px; }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>