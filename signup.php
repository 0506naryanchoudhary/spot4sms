<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top w3-card-4 " >
  <div class="container-fluid" id = "navi">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand"> <img src="uuui.png" class="img-responsive" style="width:150px;margin-top:-5;"></a>
 	   </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active" ><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href=":http//spot4sms.pe.hu/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<br/><br/><br/><br/><br/><br/>
<div calss = "container" >
	<div class="row">	
	    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4   ">
		    <div class="panel panel-default w3-card-4">
				<div class="panel-heading">
					<h4 class="panel-title">Sign Up</h4>
				</div>
				<div class="panel-body">
					<form role="form" id = "myForm" method = "post" action = "http://spot4sms.pe.hu/signup0.php">
						<div class = "form-group">
						    <label for="mobileNumber" >Mobile Number</label>
		  					<input type="text" class="form-control" id="mobileNumber" placeholder="Mobile Number" name = "mobileNumber" value=<?php if (isset($_GET['mobileNumber'] )) echo $_GET['mobileNumber']; ?>>
                                                        <?php
                                                            if($_GET['exist']==1)
                                                            echo '<p style="color:red;font-weight: 30px;" > User already exist </p>';
                                                        ?>
		  				</div>
		  				<div class = "form-group">
							<label for="password" >Password</label>
	  						<input type="password" class="form-control" id="password" placeholder="New Password" name = "password" >
		  				</div>
		  				<div class = "form-group">
		  					<label for="password" >Re-enter Password</label>
		  					<input type="password" class="form-control" id="repassword" placeholder="Re-enter password">
		  				</div>
		  				<button type="button" id="submitButton" class="btn btn-primary btn-block">Send verification code</button>
					</form>	
				</div>	
			</div>
		</div>	
	</div>	
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script>
function validateText(id) // This function if for validating text in a passed id input element.
{
	if($("#"+id).val()==null || $("#"+id).val()== "")
		{
			var div = $("#"+id).closest("div");

			$("#glyp"+id).remove();
			div.removeClass("has-success has-feedback");
			div.addClass("has-error has-feedback");
			div.append("<span id = 'glyp"+id+"'class = 'glyphicon glyphicon-remove form-control-feedback' ></span>");
			return false;
		}
		else
		{
			var div = $("#"+id).closest("div");
			div.removeClass("has-error has-feedback");
			div.addClass("has-success has-feedback ");
            $("#glyp"+id).remove();  
			div.append("<span id = 'glyp"+id+"' class = 'glyphicon glyphicon-ok form-control-feedback' ></span>");
			return true;
		}
}

$(document).ready(

	function()		
	{
		$("#submitButton").click(function()
			{
               	if(!validateText("mobileNumber"))
               		{
              			return false;
              		}
              	if(!validateText("password"))
              		{
              			return false;
              		}	  
              	if(!($("#password").val()==$("#repassword").val()))
              	   {
              	   	 var div = $("#repassword").closest("div");
              	     div.removeClass("has-success has-feedback");
					 div.addClass("has-error has-feedback");
					 div.append("<span id = 'glyprepassword'class = 'glyphicon glyphicon-remove form-control-feedback' ></span>");
              	   	 alert('Your password do not match');
              	   	 return false;
              	   }

              		$("#myForm").submit();
			}	
		);
});

$(document).ready(function(){ $("#mobileNumber").focus(); })

</script>
</body>
</html>
