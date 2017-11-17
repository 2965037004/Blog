<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title','博客') --小家博客</title>
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body>
		@include('layouts._header')

		@yield('content')

		@include('layouts._footer')
		<script src="/js/app.js">
	</body>
</html>
