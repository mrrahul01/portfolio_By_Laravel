<!DOCTYPE HTML>
<html>
<head>
<title>Mr.Ruhul Khan </title>
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
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>


{!!Html::script('../resources/assets/assets/assets2/js/metisMenu.min.js')!!}

{!!Html::script('../resources/assets/assets/assets2/js/custom.js')!!}
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
							<a href="{{ url('/home') }}" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						
							
							</ul>
							</nav>
							
				
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
					<div class="logo">
					<a href="dashboard.php">
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
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									
									<div class="user-name">
										<p>For Admin</p>
										<span>Admin</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								
								<li> <a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
				<div class="tables">
					<div class="table-responsive bs-example widget-shadow">
						<h4 class="title1"> Signup user Details </h4>
						<table class="table table-bordered"> 
							<thead>
								 <tr> 
								 	 <th> SL </th>
								 	 <th> Full Name </th> 
								 	 <th> Phone No </th> 
								 	 <th> Address</th> 
								 	 <th> Email </th> 
								 	 {{-- <th> Username </th> --}} 
								 	 {{-- <th> Password </th>  --}}
								 	  
								 	
								 	 <th> Action </th> 
								 </tr>
							 </thead> 
							 
							 <tbody> 
							 <?php $i=1; ?>
							 @foreach($data as $row)
							 	<tr> 
							 		<td>{{$i}}</td> 
							 		<td>{{$row->full_name}}</td> 
							 		<td>{{$row->phone}}</td> 
							 		<td>{{$row->address}}</td> 
							 		<td>{{$row->email}}</td> 
							 		{{-- <td>{{$row->username}}</td>
							 		<td>{{$row->password}}</td>  --}}
							 		
							 		
							 		<td> {{-- <a href="#" class="btn btn-xs btn-default  glyphicon glyphicon-ok"></a> <a href="#" class="btn btn-xs btn-default glyphicon glyphicon-remove"></a> --}}

									<a href="#" class="btn btn-warning">Accept</a>
									<form action="{{route('deleteUser',$row->id)}}" method="POST" style="display: inline;" onsubmit="if(confirm('delete? Are you sure?')) {return true} else {return false};">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<button type="submit" class="btn btn-danger">Delete</button>
									</form>

							 		</td> 
							 	</tr>
							 	@endforeach 
						    </tbody> 
						    
						</table> 
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		  {{-- <center> <p> &copy; 2017 All Rights Reserved </p></center> --}}
		</div>
        <!--//footer-->
	</div>
	
	{!!Html::script('../resources/assets/assets/assets2/js/bootstrap.js')!!}
</body>
</html>