<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
body { background: rgba(33,136,232,1);
background: -moz-linear-gradient(top, rgba(33,136,232,1) 0%, rgba(33,136,232,1) 18%, rgba(75,166,236,1) 44%, rgba(75,166,236,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(33,136,232,1)), color-stop(18%, rgba(33,136,232,1)), color-stop(44%, rgba(75,166,236,1)), color-stop(100%, rgba(75,166,236,1)));
background: -webkit-linear-gradient(top, rgba(33,136,232,1) 0%, rgba(33,136,232,1) 18%, rgba(75,166,236,1) 44%, rgba(75,166,236,1) 100%);
background: -o-linear-gradient(top, rgba(33,136,232,1) 0%, rgba(33,136,232,1) 18%, rgba(75,166,236,1) 44%, rgba(75,166,236,1) 100%);
background: -ms-linear-gradient(top, rgba(33,136,232,1) 0%, rgba(33,136,232,1) 18%, rgba(75,166,236,1) 44%, rgba(75,166,236,1) 100%);
background: linear-gradient(to bottom, rgba(33,136,232,1) 0%, rgba(33,136,232,1) 18%, rgba(75,166,236,1) 44%, rgba(75,166,236,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2188e8', endColorstr='#4ba6ec', GradientType=0 ); }
</style>
</head>
<body >
	<nav class="navbar navbar-inverse navbar-fixed-top w3-card-4"  >
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
        <li><a href="http://spot4sms.pe.hu/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li class="active" ><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<br/><br/><br/><br/>

	<div class="container text-center" style="color:white;">
		Welcome! to <strong style="font-size: 16px;"> Spot<span style = "font-size:30px;";>4</span>SMS </strong>	
	</div>	

<br/>
	<div class="row">	
		<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4   ">
	    	<div class="panel panel-default  w3-card-4">
				<div class="panel-heading">
					<h4 class="panel-title">Login</h4>
				</div>
				<div class="panel-body">
					<form role="form" id = "myForm" method = "post" action = "http://spot4sms.pe.hu/login.php">
						<div class = "form-group">
		  					<input type="text" class="form-control" id="mobileNumber" placeholder="Mobile Number" name = "mobileNumber" value=<?php if(isset($_GET['mobileNumber'])) echo $_GET['mobileNumber']; else echo ""; ?> >
		  				</div>
                                                
		  				<div class = "form-group">
		  					<input type="password" class="form-control" id="password" placeholder="Password" name="password" >
		  				</div>
		  				<?php 
		  					if(isset($_GET['error']))
		  					{
		  						echo '<p style="color:red;font-weight: 30px;" > Your mobile number or password is wrong<br/>Please try again </p>';	
		  					}
		  				?>
		  				<div class="checkbox">
                                                        <label><input type="checkbox"> Remember me</label>
                                                </div>
		    			<button type="button" id="submitButton" class="btn btn-primary btn-block">Submit</button>
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

              		$("#myForm").submit();
			}	
		);
});

$(document).ready(function(){ $("#mobileNumber").focus(); })

</script>
<?php function httpGet($url)
{
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false); 
 
    $output=curl_exec($ch);
 
    curl_close($ch);
    return $output;
}
 echo 'badiya he';
echo httpGet("http://hayageek.com/examples/php/curl-examples/curl.php?name=Ravi&age=32&location=India");
  ?>
</body>
</html>
