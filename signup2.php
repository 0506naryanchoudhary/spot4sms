<?php

ob_start();
if(isset($_POST["mobileNumber"]))
	{
		$mobileNumber = $_POST["mobileNumber"];
		$verificationCode = $_POST["verificationCode"];
        

        // connect with mysql
        $conn=mysqli_connect("fdb2.biz.nf","1959977_0460","ncw1otgpitw","1959977_0460");
        if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
	
		// verify the user
		$sql = "select * from users where mobilenumber = '".$mobileNumber."' and verificationCode = '".$verificationCode."'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) 
		{
			header('Location: http://kold.co.nf/message/index.php?mobileNumber='.$mobileNumber);
		}
		else
		{
          	header('Location: http://kold.co.nf/message/signup1.php?mobileNumber='.$mobileNumber.'&error=1');
		}
	}

	
?>