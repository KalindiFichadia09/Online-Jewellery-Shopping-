
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php  include 'links.php' ?> 
</head>
<body>

<header>
	<div class="container center-div shadow ">
		<div class="heading text-center mb-5 text-uppercase text-white">LOGIN</div>
		<div class="container row d-flex flex-row justify-content-center mb-5">
			<div class="admin-form shadow p-2 ">
					<form action="" method="POST">
						<div class="form-group">
							<label>Email ID</label>
							<input type="text" name="l_U_Email_Id" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="l_U_Password" class="form-control" autocomplete="off"> 
						</div>
                        <div align="center">
                            <input onclick="login()" type="submit" class="btn btn-success" name="login" value="Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="registration.php"><input type="button" class="btn btn-success" name="signin" value="Signin">
                        </div>
				</form>
			</div>
		</div>
	</div>
</header>

</body>
</html>


<?php
    session_start();

	include 'conn.php';
	if(isset($_POST['login']))
	{
		$U_Email_Id = $_POST['l_U_Email_Id'];
		$U_Password = $_POST['l_U_Password'];
		$row=[];
        $sql = "SELECT U_Id,U_Email_Id,U_Password,U_Category FROM user_tbl WHERE U_Email_Id='$U_Email_Id' and U_Password='$U_Password' ";
		$data=mysqli_query($con,$sql);
		
		if(mysqli_num_rows($data)==1)
		{
			while($result=mysqli_fetch_array($data))
			{	
				
                $row = $result;	
              
				if($result['U_Category']=='1')
				{		
                    $_SESSION['U_Email_Id'] = $row['U_Email_Id'];
					$_SESSION['U_Id'] = $row['U_Id'];
                    // echo "<script> 'alert("JavaScript Alert Box by PHP")';  
					// 		</script>";  	
					header('location:admin/');
				}
				else
				{
                    $_SESSION['U_Email_Id'] = $row['U_Email_Id'];
					$_SESSION['U_Id'] = $row['U_Id'];
					// echo '<script> 'alert("JavaScript Alert Box by PHP")';  </script>';  
					header('location:jayshree/');	

				}			
			}
		}
		else 
		{
			// echo "<script> ';  
			
			echo "Invalid username or password.";
		}
	}
?>