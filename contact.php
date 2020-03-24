
<?php

$Use_FName=$_POST['Firstname'];
$Use_SName=$_POST['Surname'];
$Use_DOB=$_POST['DoB'];
$Use_Age=$_POST['Age'];
$Use_Gender=$_POST['Gender'];
$Use_Mob=$_POST['Mobile'];


    $ip="localhost";
	$user="root";
	$password="";
	$db_name="student.db";

	$connection=mysqli_connect($ip,$user,$password,$db_name);

	
	$insert="INSERT INTO student SET Firstname='$Use_FName', Firstname='$Use_Name' ,  email='$Use_Email', phone='$Use_Mob', carnum='$Use_Car'";
	$connection->query($insert);
	
	$to_team = "varunvishal10@gmail.com";
	$subject_team = "New Booking For Spot.";
	$header_team = "From: $Use_Email";
	$Use_Mess= "Customer Details : Name = $Use_Name , Car Number = $Use_Car , Phone = $Use_Mob";

	mail($to_team,$subject_team,$Use_Mess,$header_team);


	$subject_usr = "Booking for Parking Spot";
	$header_usr = "From: $to_team";
	$message_to_usr = "Congratulations, You have successfully booked a parking spot for your vehicle.";

	mail($Use_Email,$subject_usr,$message_to_usr,$header_usr);

	echo("Successful");
	
	

	?>
