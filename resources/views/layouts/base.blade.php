<!DOCTYPE html>
<html lang="es" >
	<head>
		<meta charset="utf-8" />
		<title>
			@yield('titulo') | {{ config('app.name', 'Laravel') }}
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="{{ asset('vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/custom.css')}}" rel="stylesheet" type="text/css" />
		<link href="manifest.json">
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		@yield('css')
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
		    <!-- BEGIN: Header -->
		    @include('layouts.header')
		    <!-- END: Header -->
		    <!-- begin::Body -->
		    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
		        <!-- BEGIN: Left Aside -->
		        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
		            <i class="la la-close"></i>
		        </button>
		        @include('layouts.menu')
		        <!-- END: Left Aside -->
		        @yield('contenido')
		    </div>
		    <!-- end:: Body -->
		    <!-- begin::Footer -->
		    <footer class="m-grid__item	m-footer">
		        <div class="m-container m-container--fluid m-container--full-height m-page__container">
		            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
		                <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
		                    <span class="m-footer__copyright"> 2018 &copy;</span>
		                </div>
		            </div>
		        </div>
		    </footer>
		    <!-- end::Footer -->
		</div>
		<!-- end:: Page -->
		
	
		<!--begin::Base Scripts -->
		<script src="{{ asset('vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{ asset('js/scripts.bundle.js')}}" type="text/javascript"></script>
		<!--end::Base Scripts -->   
        <!--begin::Page Vendors -->
		<script src="{{ asset('vendors/custom/bootstrap-datepicker.es.min.js')}}" type="text/javascript"></script>
		<!--end::Page Vendors -->  
        <!--begin::Page Snippets -->

        <script type="text/javascript">
        	$('.m-select2').select2();
        </script>
        @yield('js')
		<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>
