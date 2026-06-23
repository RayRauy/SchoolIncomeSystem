<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>404 Not Found</title>

    @vite(['resources/css/style.css', 'resources/css/font-awesome.min.css'])
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,900" rel="stylesheet">
</head>

<body>

	<div id="notfound">
		<div class="notfound-bg"></div>
		<div class="notfound">
			<div class="notfound-404">
				<h1>404</h1>
			</div>
			<h2>we are sorry, but the page you requested was not found</h2>
            @if (Auth::check())
			    <a href="{{ route('home') }}" class="home-btn">Go Home</a>
            @endif
            <a href="{{ route('not-logged-in') }}" class="home-btn">Go NOT HOME</a>
			<a href="#" class="contact-btn">Contact us</a>
		</div>
	</div>

</body>

</html>
