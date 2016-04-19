<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Sistema de Gestão Acadêmica - SGA" />
	<meta name="author" content="" />

	<title>@yield('title')SGA - Sistema de Gestão Acadêmica</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="{{ asset('assets/css/fonts/linecons/css/linecons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/fonts/fontawesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/xenon-core.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/xenon-forms.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/xenon-components.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/xenon-skins.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

	<script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/inputmask/jquery.mask.js') }}"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="page-body">

    @include('layout.top')
	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

        @include('layout.sidebar')

            <div class="main-content">
            @include('layout.menubar')

            @yield('conteudo')

            @include('layout.footer')

            </div>
    </div>
    @yield('js')
    
	<!-- Bottom Scripts -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
	<script src="{{ asset('assets/js/resizeable.js') }}"></script>
	<script src="{{ asset('assets/js/joinable.js') }}"></script>
	<script src="{{ asset('assets/js/xenon-api.js') }}"></script>
	<script src="{{ asset('assets/js/xenon-toggles.js') }}"></script>

	<!-- JavaScripts initializations and stuff -->
	<script src="{{ asset('assets/js/xenon-custom.js') }}"></script>
    
</body>
</html>