<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top w3-card-4 "  >
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
        <li><a href="http://kold.co.nf/message/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<br/><br/><br/><br/><br/><br/>
<div calss = "container" >
	<div class="row">	
	    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4   ">
		    <div class="panel panel-default w3-card-8">
				<div class="panel-heading">
					<h4 class="panel-title">Verification</h4>
				</div>
				<div class="panel-body">
					<form role="form" id = "myForm" method = "post" action = "http://kold.co.nf/message/signup2.php">
					    <p style="color:green;font-weight: 30px;" > We have sent verification code to </p>
						<div class = "form-group">
						    <label for="mobileNumber" >Mobile Number</label>
		  					<input type="text" class="form-control" id="mobileNumber" placeholder="Mobile Number" name = "mobileNumber" value=<?php echo $_GET['mobileNumber']; ?> eadonly="readonly">
		  				</div>
		  				<div class = "form-group">
							<label for="verificationCode" >Verification Code</label>
	  						<input type="text" class="form-control" id="verificationCode" placeholder="Enter verification code" name = "verificationCode" >
		  				    <?php
		  				    if($_GET['error']==1)
		  				    echo '<p style="color:red;font-weight: 30px;" > Verification Code does not match </p>';
		  				    ?>
		  				</div>
		  				<button type="button" id="verificationButton" class="btn btn-primary btn-block">Verify me</button>
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
		$("#verificationButton").click(function()
			{
               	if(!validateText("verificationCode"))
               		{
              			return false;
              		}
              	

              		$("#myForm").submit();
			}	
		);
});

$(document).ready(function(){ $("#verificationCode").focus(); })

</script>
</body>
</html>