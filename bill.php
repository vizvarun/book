<?php

$Use_Name=$_POST['name'];
$Use_Email=$_POST['email'];
$Use_Mob=$_POST['phone'];
$Use_Car=$_POST['carnum'];

$ip="localhost";
$user="id10876328_reg";
$password="hello";
$db_name="id10876328_reg";

	$connection=mysqli_connect($ip,$user,$password,$db_name);

	
	$insert="INSERT INTO contact SET name='$Use_Name', email='$Use_Email', phone='$Use_Mob', carnum='$Use_Car'";
	$connection->query($insert);

     <div class="row">
            <div class="col-lg-12">
                <ul type="bullets">
                    
                    <li>Name : <?php echo $Use_Name;?></li> <br>
                    <li>Car Number : <?php echo $Use_Car;?></li> <br>
                    <li>Phone Number : <?php echo $Use_Mob;?></li> <br>
                    <li>Email ID : <?php echo $Use_Email;?></li> <br>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12" align="center">
                <h5 style="font-size: 4rem">Pay : Rs 250</h5>
            </div>
        </div>

?>