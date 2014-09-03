<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
<div class="container">
	@include('includes.navbar')
	@yield('content')
	@include('includes.footer')
</div>
</body>
</html>