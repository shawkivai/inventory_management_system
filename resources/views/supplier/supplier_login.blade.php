<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Customer Panel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
		<meta name="author" content="Muhammad Usman">

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

		<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js')}}""></script>
		<![endif]-->

		<!-- The fav icon -->
		<link rel="shortcut icon" href="{{URL::asset('img/favicon.ico')}}">
			
	</head>

	<body>
			<div class="container-fluid">
			<div class="row-fluid">
			
				<div class="row-fluid">
					<div class="span12 center login-header">
						<h2>Inventory Management Supplier Login</h2>
					</div><!--/span-->
				</div><!--/row-->
				
				<div class="row-fluid">
					<div class="well span5 center login-box">
						 <form class="form-horizontal" action="/supplier_login_check" method="">
						    @csrf
							<fieldset>
								<div class="input-prepend" title="Username" data-rel="tooltip">
									<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="supplier_username" placeholder="username" id="username" type="text"  />
								</div>
								<div class="clearfix"></div>

								<div class="input-prepend" title="Password" data-rel="tooltip">
									<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="supplier_password" placeholder="password" id="password" type="password" />
								</div>
								<div class="clearfix"></div>

								<div class="input-prepend">
								<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
								</div>
								<div class="clearfix"></div>

								<p class="center span5">
								<button type="submit" class="btn btn-primary">Login</button>
								</p>
							</fieldset>
                            
						</form>
					</div><!--/span-->
				</div><!--/row-->
					</div><!--/fluid-row-->
			
		</div><!--/.fluid-container-->

	</body>
	</html>
