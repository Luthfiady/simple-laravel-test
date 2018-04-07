<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Simple Laravel Test</title>

		<!-- css style -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/toastr/toastr.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('js/jquery-ui/jquery-ui.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">

		<!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">

		<!-- Scripts -->
		<script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>

	</head>
	<body>
        <div class="jumbotron">
            <div class="container">
                <div class="page-header">
                    <h1 class="text-center">Welcome to Simple Laravel Test</h1>
                </div>
            </div>
        </div>
		
        <div class="container">
            @yield('content')
		</div>

        <div class="footer"></div>

        <!-- Scripts -->
		<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery-ui/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/toastr/toastr.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/validate/jquery.validate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

        <script>
            toastr.options = {
                "closeButton" : true,
                "progressBar" : true,
                "positionClass" : "toast-bottom-right",
                "showDuration": "400",
                "hideDuration": "1000",
                "timeOut": "7000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        </script>

        @yield('scripts')
	</body>
</html>
