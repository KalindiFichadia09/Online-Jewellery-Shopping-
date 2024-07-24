<?php

    session_start();

?>

<?php
 
	include '../conn.php';
	
	$P_Id = $_REQUEST['P_Id'];
	$sql="delete from product_tbl where P_Id='$P_Id' ";
	$data=mysqli_query($con,$sql);

	if($data)
	{
		// echo "delete !!!!!";
		header('location:product_show.php');
	}
	else
	{
		echo "Error";
	}

?>
