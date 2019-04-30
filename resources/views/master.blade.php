<?php 
	$user_status = Session::has('user_status') ? Session::get('user_status') : '';
	$organization_name = Session::has('organization_name') ? Session::get('organization_name') : '';
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Inventory Management</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Admin Panel">
		<meta name="author" content="Mustakim Hayder">

		<!-- The styles -->
		<link  href="{{URL::asset('admin/css/bootstrap-cerulean.css')}}" rel="stylesheet">
		<style type="text/css">
		body {
			padding-bottom: 40px;
		}
		.sidebar-nav {
			padding: 9px 0;
		}
		</style>
		<link href="{{URL::asset('admin/css/bootstrap-responsive.css')}}" rel="stylesheet">
		<link href="{{URL::asset('admin/css/charisma-app.css')}}" rel="stylesheet">
		<link href="{{URL::asset('admin/css/jquery-ui-1.8.21.custom.css')}}" rel="stylesheet">
		<link href="{{URL::asset('admin/css/fullcalendar.css')}}" rel='stylesheet'>
		<link href="{{URL::asset('admin/css/fullcalendar.print.css')}}" rel='stylesheet'  media='print'>
		<link href="{{URL::asset('admin/css/chosen.css')}}" rel='stylesheet'>
		<link href="{{URL::asset('admin/css/uniform.default.css')}}" rel='stylesheet'>
		<link href="{{URL::asset('admin/css/colorbox.css')}}" rel='stylesheet'>
		<link href="{{URL::asset('admin/css/jquery.cleditor.css')}}" rel='stylesheet'>
		<link href="{{URL::asset('admin/css/jquery.noty.css')}}" rel='stylesheet'>
		<link href="{{URL::asset('admin/css/noty_theme_default.css')}}" rel='stylesheet'>
		<link href="{{URL::asset('admin/css/elfinder.min.css')}}" rel='stylesheet'>
		<link href="{{URL::asset('admin/css/elfinder.theme.css')}}" rel='stylesheet'>
		<link href="{{URL::asset('admin/css/jquery.iphone.toggle.css')}}" rel='stylesheet'>
		<link href="{{URL::asset('admin/css/opa-icons.css')}}" rel='stylesheet'>
		<link href="{{URL::asset('admin/css/uploadify.css')}}" rel='stylesheet'>

		<!-- The fav icon -->
		<link rel="shortcut icon" href="{{URL::asset('admin/img/favicon.ico')}}">
	</head>

	<body>
		<!-- topbar starts -->
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="/"> <span>Ecommerce Inventory Management</span></a>
					<!-- user dropdown starts -->
					<div class="btn-group pull-right" >
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="icon-user"></i>
							<span class="hidden-phone"> 
								<?=$organization_name ?></span>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="{{URL::to('/logout')}}">Logout</a></li>
						</ul>
					</div>
					<!-- user dropdown ends -->
				</div>
			</div>
		</div>
		<!-- topbar ends -->
		<div class="container-fluid">
			<div class="row-fluid">	
				<!-- left menu starts -->
				<div class="span2 main-menu-span">
					<div class="well nav-collapse sidebar-nav">
						<ul class="nav nav-tabs nav-stacked main-menu">
							<li class="nav-header hidden-tablet">Main</li>
							<?php 
								if($user_status === 'company'){?>
									<li><a class="ajax-link" href="{{URL::to('/company_dashboard')}}"><i class="icon-home"></i><span class="hidden-tablet"> Dashbord</span></a></li>
									<li><a class="ajax-link" href="{{URL::to('/product_request')}}"><i class="icon-eye-open"></i><span class="hidden-tablet">product Request</span></a></li>
									<li><a class="ajax-link" href="{{URL::to('/manage_product')}}"><i class="icon-eye-open"></i><span class="hidden-tablet"> Received Products from Supplier</span></a></li>
							<?php }
								elseif($user_status === 'supplier'){?>
									<li><a class="ajax-link" href="{{URL::to('/supplier_dashboard')}}"><i class="icon-home"></i><span class="hidden-tablet"> Dashbord</span></a></li>
									<li><a class="ajax-link" href="{{URL::to('/company_request')}}"><i class="icon-eye-open"></i><span class="hidden-tablet"> Product Request from Company </span></a></li>
									<li><a class="ajax-link" href="{{URL::to('/send_products')}}"><i class="icon-eye-open"></i><span class="hidden-tablet"> Send Products</span></a></li>
									<li><a class="ajax-link" href="{{URL::to('/sold_products')}}"><i class="icon-eye-open"></i><span class="hidden-tablet"> Sold Pdoducts</span></a></li>
							<?php } ?>
						</ul>
					</div><!--/.well -->
				</div><!--/span-->
				<!-- left menu ends -->
				<noscript>
					<div class="alert alert-block span10">
						<h4 class="alert-heading">Warning!</h4>
						<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
					</div>
				</noscript>
				
				<div id="content" class="span10">
				<!-- content starts -->
								
                    @yield('content')
							
				<!-- content ends -->
				</div>
			</div><!--/fluid-row-->
					
			<hr>

			<div class="modal hide fade" id="myModal">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">Ã—</button>
					<h3>Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here settings can be configured...</p>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn" data-dismiss="modal">Close</a>
					<a href="#" class="btn btn-primary">Save changes</a>
				</div>
			</div>
			
		</div><!--/.fluid-container-->

		<!-- external javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->

		<!-- jQuery -->
		<script src="{{URL::asset('admin/js/jquery-1.7.2.min.js')}}"></script>
		<!-- jQuery UI -->
		<script src="{{URL::asset('admin/js/jquery-ui-1.8.21.custom.min.js')}}"></script>
		<!-- transition / effect library -->
		<script src="{{URL::asset('admin/js/bootstrap-transition.js')}}"></script>
		<!-- alert enhancer library -->
		<script src="{{URL::asset('admin/js/bootstrap-alert.js')}}"></script>
		<!-- modal / dialog library -->
		<script src="{{URL::asset('admin/js/bootstrap-modal.js')}}"></script>
		<!-- custom dropdown library -->
		<script src="{{URL::asset('admin/js/bootstrap-dropdown.js')}}"></script>
		<!-- scrolspy library -->
		<script src="{{URL::asset('admin/js/bootstrap-scrollspy.js')}}"></script>
		<!-- library for creating tabs -->
		<script src="{{URL::asset('admin/js/bootstrap-tab.js')}}"></script>
		<!-- multiple file upload plugin -->
		<script src="{{URL::asset('admin/js/jquery.uploadify-3.1.min.js')}}"></script>
		<!-- history.js for cross-browser state change on ajax -->
		<script src="{{URL::asset('admin/js/jquery.history.js')}}"></script>
		<!-- application script for Charisma demo -->
		<script src="{{URL::asset('admin/js/charisma.js')}}"></script>

	</body>
	</html>
