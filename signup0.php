<?php
if(isset($_POST["mobileNumber"]))
	{
		$mobileNumber = $_POST["mobileNumber"];
		$password = $_POST["password"];
		$randomCode = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, 6);
        
        // 2 connect with mysql if error then die
        $conn=mysqli_connect("fdb2.biz.nf","1959977_0460","ncw1otgpitw","1959977_0460");
        if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
		
		// if user exits than return to signup page
                $sql = "select * from users where mobileNumber = '".$mobileNumber."'";
		$result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) 
                {
                        header('Location: http://kold.co.nf/message/signup.php?mobileNumber='.$mobileNumber.'&exist=1');
		}
                else
                {
		  // make query and insert into users table
	          $sql = "insert into users (mobilenumber,password,verificationCode) values ('".$mobileNumber."','".$password."','".$randomCode."')";
		  if (mysqli_query($conn, $sql)) 
		     {
    			header('Location: http://kold.co.nf/message/signup1.php?mobileNumber='.$mobileNumber.'&error=0');
        	     }
		 else
                     {
    		      //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    		     }
                }        
	}
?>