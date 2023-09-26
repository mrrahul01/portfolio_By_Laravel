<!DOCTYPE HTML>
<html>
<head>
<title>Mr.Ruhul Khan </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head> 
<body>
<div class="about-section">
   <div class="text-content">
     <div class="span7 offset1">
        <!-- @if(Session::has('success'))
          <div class="alert-box success">
          <h2>{!! Session::get('success') !!}</h2>
          </div>
        @endif -->
        <div class="secure">Upload form</div>
        {!! Form::open(array('url'=>'/userlogin','method'=>'POST', 'files'=>true)) !!}
         <div class="control-group">
          <div class="controls">
          <!-- {!! Form::file('image') !!} -->
          {!! Form::file('picture') !!}
	  <!-- {{-- <p class="errors">{!!$errors->first('picture')!!}</p> -->
	<!-- @if(Session::has('error'))
	<p class="errors">{!! Session::get('error') !!}</p>
	@endif --}} -->
        </div>
        </div>
        <div id="success"> </div>
      {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
      {!! Form::close() !!}
      </div>
   </div>
</div>
</body>

</html>