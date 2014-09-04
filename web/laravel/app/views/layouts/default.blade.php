<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
<div class="container">
	@include('includes.navbar')

    <div class="begin-section container">
        @yield('content')
    </div>

	@include('includes.footer')
</div>
</body>
</html>
