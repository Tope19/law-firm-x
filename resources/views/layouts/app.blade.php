<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{$title ?? ''}} | Law-Firm-x</title>
	@include('layouts.includes.style')
  <!-- End layout styles -->
  <link rel="shortcut icon" type="image/png" href="">

</head>
<body class="sidebar-dark">
	<div class="main-wrapper">

		@include('layouts.includes.sidebar')

		<div class="page-wrapper">

			@include('layouts.includes.header')

			<div class="page-content">

                @yield('content')

		    </div>

			@include('layouts.includes.footer')

		</div>
	</div>

	@include('layouts.includes.script')
</body>
    @toastr_render
</html>
