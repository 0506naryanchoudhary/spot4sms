<?php
session_start();
if(isset($_POST["mobileNumber"]))
	{
		$mobileNumber = $_POST["mobileNumber"];
		$password = $_POST["password"];
		
        // connect with mysql
        $conn=mysqli_connect("mysql.hostinger.in","u321148073_naray","ncw1otgpitw","u321148073_sms");
        if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
		
		$sql = "select * from users where mobilenumber = '".$mobileNumber."' and password = '".$password."'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) 
		{
			$_SESSION['in']="yes";
			header('Location: http//spot4sms.pe.hu/welcome.php');
		}
		else
		{
			
          	header('Location: http//spot4sms.pe.hu/index.php?mobileNumber='.$mobileNumber.'&error=1');
		}
		
	}
?>