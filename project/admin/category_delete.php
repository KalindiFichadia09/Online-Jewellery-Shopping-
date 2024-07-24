<?php

    session_start();

?>

<?php
 
	include '../conn.php';
	
	$C_Id = $_REQUEST['C_Id'];
	$sql="delete from category_tbl where C_Id='$C_Id' ";
	$data=mysqli_query($con,$sql);

	if($data)
	{
		// echo "delete !!!!!";
		header('location:category_show.php');
	}
	else
	{
		echo "Error";
	}

?>
