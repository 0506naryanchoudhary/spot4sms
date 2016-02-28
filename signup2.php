<?php

ob_start();
if(isset($_POST["mobileNumber"]))
	{
		$mobileNumber = $_POST["mobileNumber"];
		$verificationCode = $_POST["verificationCode"];
        

        // connect with mysql
        $conn=mysqli_connect("mysql.hostinger.in","u321148073_naray","ncw1otgpitw","u321148073_sms");
        if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
	
		// verify the user
		$sql = "select * from users where mobilenumber = '".$mobileNumber."' and verificationCode = '".$verificationCode."'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) 
		{
			header('Location: http://spot4sms.pe.hu/index.php?mobileNumber='.$mobileNumber);
		}
		else
		{
          	header('Location: http://spot4sms.pe.hu/signup1.php?mobileNumber='.$mobileNumber.'&error=1');
		}
	}

	
?>