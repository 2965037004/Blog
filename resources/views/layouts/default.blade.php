<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title','博客') --小家博客</title>
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body>
		@include('layouts._header')

		<div class="container">
			@yield('content')

			@include('layouts._footer')
		</div>
		<script src="/js/app.js"></script>
	</body>
</html>