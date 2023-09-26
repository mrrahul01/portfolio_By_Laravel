<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Md.Ruhul Khan</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        {!!Html::style('../resources/assets/assets/css/login/stylelogin.css')!!}
        <link rel="shortcut icon" href="{{{ asset('../resources/assets/assets/img/favicon.png') }}}">
        
    </head>
    <body>
        <div class="container">
           
            <header>
                <h1 style="color:#3D9DB3"><center>Back To  <a href="{{ url('/') }}" style="color: #29BE6B">  My portfolio </a></center></h1>
                
            </header>
            <section>               
                <div id="container_demo" >
                    
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="" > 
                                <h1>Log in for User</h1> 
                                <p> 
                                    <label for="username" class="uname" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                
                                <p class="keeplogin"> 
                                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                                    <label for="loginkeeping">Keep me logged in</label>
                                </p>
                                <p class="signin button"> 
                                    <input type="submit" value="Sign in"/> 
                                </p>
                                
                                <p class="change_link">
                                    Not a member yet ?
                                    <a href="#toregister" class="to_register">Join us</a>
                                </p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="{{url('/login')}}" enctype="multipart/form-data" files="true" autocomplete="on" method="POST"> 
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" >Your username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail"  > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="password" >Your password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" >Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="confirm_password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                
                                <p> 
                                    <label for="full name" class="uname" >Please provide your Full name</label>
                                    <input id="usernamesignup" name="full_name" required="required" type="text" placeholder="eg.Md.Ruhul Khan" />
                                </p>
                                
                                <p> 
                                    <label for="address" class="youpasswd" >Please provide your Address </label>
                                    <input id="usernamesignup" name="address" required="required" type="text" placeholder="eg.Dhaka Bangladesh"/>
                                </p>
                                
                                <p> 
                                    <label for="phoneNumber" class="youpasswd" >Please provide your Phone Number </label>
                                    <input id="usernamesignup" name="phone" required="required" type="text" placeholder="eg.01780563209"/>
                                </p>
                                
                                <p> 
                                    <label for="profile picture" class="youpasswd" >Please provide your Profile Picture </label>
                                    <input id="primag" name="picture" required="required" type="file" placeholder="enter you profile picture"/>
                                </p>
                                <p class="signin button"> 
                                    <input type="submit" value="Sign up"/> 
                                </p>
                                <p class="change_link">  
                                    Already a member ?
                                    <a href="#tologin" class="to_register"> Go and log in </a>
                                </p>

                                
                            </form>
                        </div>
                        
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>