<!DOCTYPE HTML>
<html>
<head>
<title> Md.Ruhul Khan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


{!!Html::style('../resources/assets/assets/assets2/css/bootstrap.css')!!}

{!!Html::style('../resources/assets/assets/assets2/css/style.css')!!}


{!!Html::style('../resources/assets/assets/assets2/css/font-awesome.css')!!}


{!!Html::script('../resources/assets/assets/assets2/js/jquery-1.11.1.min.js')!!}

<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>


{!!Html::style('../resources/assets/assets/assets2/css/animate.css')!!}

{!!Html::style('../resources/assets/assets/assets2/css/clndr.css')!!}
{!!Html::style('../resources/assets/assets/assets2/css/custom.css')!!}
 <link rel="shortcut icon" href="{{{ asset('../resources/assets/assets/img/favicon.png') }}}">
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
						</ul>
							</nav>
							
				
			</div>
		</div>
		
		<div class="sticky-header header-section ">
			<div class="header-left">
				
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				
				
				<div class="logo">
					<a href="{{ url('/dashboard') }}">
						<h1>Your Profile</h1>
						<span>!!! Live Your Way !!!</span>
					</a>
				</div>
				
				<div class="search-box">
			
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									
									<div class="user-name">
										<p> {{ Auth::user()->name }} </p>
										
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
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h1 style="font-size: 240%;color: #4d9900;font-weight: bold;"><center>Welcome to your profile.</center></h1><br>
				<h4 style="color: black;"><center>Here You Can See All of Your Information and <span><a href="{{ url('/editprofile') }}"> Manage  </a>Your Personal Information.</span></center></h4><br>
					<div class="col-md-12 ">
				<div class="col-md-6 ">
						<h4 class="title3">Profile</h4>
					
						<div class="profile-top">
						
							<img src="../resources/assets/assets/images/{{Auth::user()->image}}" height="130px" width="130px" alt="">
							<h4>{{ Auth::user()->name }}</h4>
							
							
						</div>
						</div>
						
						<div class="col-md-6 ">
						<div class="profile-text">
							<div class="profile-row">
								<div class="profile-left">
									<i class="fa fa-envelope profile-icon"></i>
								</div>
								<div class="profile-right">
									<h4 style="color: black;">{{ Auth::user()->email }}</h4>
									<p>Email</p>
								</div> 
								<div class="clearfix"> </div>	
							</div>
							<div class="profile-row row-middle">
								<div class="profile-left">
									<i class="fa fa-mobile profile-icon"></i>
								</div>
								<div class="profile-right">
									<h4 style="color: black;">{{ Auth::user()->phone }}</h4>
									<p>Contact Number</p>
								</div> 
								<div class="clearfix"> </div>	
							</div>

							<div class="profile-row">
								<div class="profile-left">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="profile-right">
									<h4 style="color: black;">{{ Auth::user()->address }}</h4>
									<p>Present Address</p>
								</div> 
								<div class="clearfix"> </div>	
							</div>
							<br>

							</div>
								</div>
								
						<br>

					</div>
					
					<div class="clearfix"> </div><br>	
				<h1>For Getting All The URL And Username & Password <a href="https://docs.google.com/document/d/16x4R7u9f4Z857UojLIbrD4zSp8wE4dfkVxSrWdf8EZc/edit?usp=sharing
"> <button style="color: red">Please Click me</button></a></h1>
				</div>
		</div>
		
	</div>
	
 
 {!!Html::script('../resources/assets/assets/assets2/js/bootstrap.js')!!}
</body>
</html>