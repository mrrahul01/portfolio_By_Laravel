<!DOCTYPE HTML>
<html>
<head>
<title> Md.Ruhul Khan </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->

{!!Html::style('../resources/assets/assets/assets2/css/bootstrap.css')!!}
<!-- Custom CSS -->

{!!Html::style('../resources/assets/assets/assets2/css/style.css')!!}
<!-- font CSS -->
<!-- font-awesome icons -->

{!!Html::style('../resources/assets/assets/assets2/css/font-awesome.css')!!}
<!-- //font-awesome icons -->
 <!-- js-->

{!!Html::script('../resources/assets/assets/assets2/js/jquery-1.11.1.min.js')!!}

{!!Html::script('../resources/assets/assets/assets2/js/modernizr.custom.js')!!}
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>


{!!Html::style('../resources/assets/assets/assets2/css/animate.css')!!}

{!!Html::style('../resources/assets/assets/assets2/css/clndr.css')!!}
{!!Html::style('../resources/assets/assets/assets2/css/custom.css')!!}

 <link rel="shortcut icon" href="{{{ asset('../resources/assets/assets/img/favicon.png') }}}">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
        				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="{{ url('/dashboard') }}" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						
							
						
				

			</div>
		</div>
		
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="{{ url('/dashboard') }}">
						<h1>Your Profile</h1>
						<span>!!! Live Your Way !!!</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<div class="search-box">
		
				</div><!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">

				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									
										<div class="user-name">
										<p>{{ Auth::user()->name }} </p>
										
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
						<ul class="dropdown-menu drp-mnu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>

						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>	
		</div>
		
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4> You Can Edit Your Profile</h4>
						</div>
						<div class="form-body">
							<form action="{{route('postEditRoute',Auth::user()->id)}}" method="POST" enctype="multipart/form-data" files="true"> 
								
							<input type="hidden" name="_token" value="{{csrf_token()}}">

								<img src="../resources/assets/assets/images/{{Auth::user()->image}}" height="130px" width="130px" alt="">
								
								<div class="form-group"> 
									<label for="exampleInputName"> Your Images </label>
									 <input type="file" name="image" class="form-control" value="">
								</div> 



								<div class="form-group"> 
									<label for="exampleInputName"> Full Name </label>
									 <input type="text" name="full_name" class="form-control" value="" placeholder="{{ Auth::user()->full_name }}">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputEmail1"> Present Address </label>
									 <input type="text" name="address" class="form-control" value=""placeholder="{{ Auth::user()->address }}">
								</div> 
								
								<div class="form-group"> 
									<label for="exampleInputEmail1"> Email </label>
									 <input type="email" name="email" class="form-control" value=""placeholder="{{ Auth::user()->email}}">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputNum">  Phone Number</label>
									 <input type="text" name="phone" class="form-control" value="" placeholder="{{ Auth::user()->phone}}">
								</div> 

								<div class="form-group"> 
									<label for="exampleInputNum">  Password </label>
									<?php $password = bcrypt( Auth::user()->password);?>
									 <input type="text" name="password" class="form-control" value="" placeholder="">
								</div>

								</div>
								
							
								 <button type="submit" name="submit" class="btn btn-default">Submit</button>
							 </form> 
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	{!!Html::script('../resources/assets/assets/assets2/js/bootstrap.js')!!}
</body>
</html>