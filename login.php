<?php
session_start();
if(isset($_POST["mobileNumber"]))
	{
		$mobileNumber = $_POST["mobileNumber"];
		$password = $_POST["password"];
		
        // connect with mysql
        $conn=mysqli_connect("fdb2.biz.nf","1959977_0460","ncw1otgpitw","1959977_0460");
        if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
		
		$sql = "select * from users where mobilenumber = '".$mobileNumber."' and password = '".$password."'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) 
		{
			$_SESSION['in']="yes";
			header('Location: http://kold.co.nf/message/welcome.php');
		}
		else
		{
			
          	header('Location: http://kold.co.nf/message/index.php?mobileNumber='.$mobileNumber.'&error=1');
		}
		
	}
?>