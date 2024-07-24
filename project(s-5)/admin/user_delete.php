<?php

    session_start();

?>

<?php
 
	include '../conn.php';
	
	$U_Id = $_REQUEST['U_Id'];
	$sql="delete from user_tbl where U_Id='$U_Id' ";
	$data=mysqli_query($con,$sql);

	if($data)
	{
		// echo "delete !!!!!";
		header('location:user_show.php');
	}
	else
	{
		echo "Error";
	}

?>
