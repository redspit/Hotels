<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>
		<meta name="description" content="" />
		<meta name="author" content="" />

		<title>@yield('title')</title>
		@vite(['resources/css/app.css','resources/js/app.js'])
	</head>

	<body class="min-h-screen min-w-screen">
		<div class="flex">
			<div class="relative">
				<!-- Sidebar -->
				@include('partials._sideMenu')
				<!-- End of Sidebar -->
			</div>
			<div class="flex flex-col w-full">
				<div class="bg-gray-500 py-5 px-5 flex justify-between">
					<div>Search</div>
					<div>account</div>
				</div>
				@yield('content')
			</div>
		</div>

		<script src="{{ asset ('js/theme.js') }}"></script>
		<script src="{{ asset ('js/menu.js') }}"></script>
	</body>
</html>
