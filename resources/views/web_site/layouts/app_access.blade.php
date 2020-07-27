<!DOCTYPE html>
<html lang="es">

<head>
    <title>
        Day To Day - @yield('title')
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    @include('web_site.layouts.css')
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">		
			@yield('content')
        </div>
    </div>

	@include('web_site.layouts.js')
	
</body>

</html>
