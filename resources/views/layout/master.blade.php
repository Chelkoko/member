<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{!!asset('css/bootstrap.min.css')!!}">
</head>
<body>
	@include('layout.nav')
	@yield('content')
	<script type="text/javascript" src="{!!asset('js/jquery-3.4.1.min.js')!!}"></script>
	<script type="text/javascript" src="{!!asset('js/bootstrap.min.js')!!}"></script>
</body>
</html>