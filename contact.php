<?php
session_start();
if($_SESSION['in']!="yes")
	{
		die("Unable to connect");		
	}
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
option {  background:##8000ff;margin-bottom:2px;padding:5px;border-radius:5px;color:black; -webkit-box-shadow: inset 0px 0px 5px 1px rgba(0,0,0,0.75);
-moz-box-shadow: inset 0px 0px 5px 1px rgba(0,0,0,0.75);background-position:left center;
box-shadow: inset 0px 0px 5px 1px rgba(0,0,0,0.75);background-image:url(gly-contact.png);background-repeat:no-repeat; }
select::-webkit-scrollbar
{
	width: 8px;
	background-color: #F5F5F5;	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
}

select::-webkit-scrollbar-thumb
{
	border-radius: 8px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #D62929;
}


</style>

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
      <ul class="nav navbar-nav">
      	<li><a href=http//spot4sms.pe.hu/send.php>Send</a></li>
      	<li><a href=send.php>Sent</a></li>
      	<li class = "active"><a href=#>Contacts</a></li>
      	<li><a href=send.php>Schedule Messages</a></li>
      	<li><a href=send.php>Get APIs</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http//spot4sms.pe.hu/index.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
      </ul>
    </div>
  </div>
</nav>
<br/><br/><br/><br/><br/><br/>
<div calss = "container" >
	<div class="row">	
	    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4   ">
                <div class="form-group">
                    <label for="sel">Contacts</label>
                            <select  class="form-control w3-card-4 " id="sel" size="8" style = "padding:10px;font-size:16px;-webkit-box-shadow: inset 0px 0px 5px 1px rgba(0,0,0,0.75);
-moz-box-shadow: inset 0px 0px 5px 1px rgba(0,0,0,0.75);
box-shadow: inset 0px 0px 5px 1px rgba(0,0,0,0.75);" >
                        <option>Nilay&nbsp&nbsp9826568759</option>
                        <option>Narayan&nbsp&nbsp8889115906</option>
                        <option><span class="glyphicon glyphicon-user"></span>Mahendra&nbsp&nbsp9669660948</option>
                        <option>Lalit&nbsp&nbsp7828984565</option>
                        <option>Nilay&nbsp&nbsp9826568759</option>
                        <option>Narayan&nbsp&nbsp8889115906</option>
                        <option>Mahendra&nbsp&nbsp9669660948</option>
                        <option>Lalit&nbsp&nbsp7828984565</option>
                        <option>Nilay&nbsp&nbsp9826568759</option>
                        <option>Narayan&nbsp&nbsp8889115906</option>
                        <option>Mahendra&nbsp&nbsp9669660948</option>
                        <option>Lalit&nbsp&nbsp7828984565</option>
                        <option>Nilay&nbsp&nbsp9826568759</option>
                        <option>Narayan&nbsp&nbsp8889115906</option>
                        <option>Mahendra&nbsp&nbsp9669660948</option>
                        <option>Lalit&nbsp&nbsp7828984565</option>
                        <option>Nilay&nbsp&nbsp9826568759</option>
                        <option>Narayan&nbsp&nbsp8889115906</option>
                        <option>Mahendra&nbsp&nbsp9669660948</option>
                        <option>Lalit&nbsp&nbsp7828984565</option>
                        <option>Nilay&nbsp&nbsp9826568759</option>
                        <option>Narayan&nbsp&nbsp8889115906</option>
                        <option>Mahendra&nbsp&nbsp9669660948</option>
                        <option>Lalit&nbsp&nbsp7828984565</option>
                        
                    </select>
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

  $(document).ready(function() {          
        $('#sel').mousewheel(function(event, delta) {
            # This if might not be very elegant!
            if (delta < 0) {
                $('body').scrollTo('+=100', 1500 );
            }
            else
                $('body').scrollTo('-=100', 1500 );

            return false;
        });
    });
</script>
</body>
</html>
