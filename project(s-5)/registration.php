<!DOCTYPE HTML>
<?php
			include 'conn.php';
            error_reporting(0);
			if(isset($_POST['submit']))
			{
				$data;
				$U_Name=$_POST['U_Name'];
				$U_Gender=$_POST['U_Gender'];
				$U_Email_Id=$_POST['U_Email_Id'];
				$U_Phone_no=$_POST['U_Phone_no'];
				$U_Address=$_POST['U_Address'];
				$U_City=$_POST['U_City'];
				$U_State=$_POST['U_State'];
				$U_Country=$_POST['U_Country'];
				$U_Pincode=$_POST['U_Pincode'];
				$U_Password=$_POST['U_Password'];

				$sql="insert into user_tbl values('id','$U_Name','$U_Gender','$U_Email_Id','$U_Phone_no','$U_Address','$U_City','$U_State','$U_Country','$U_Pincode','$U_Password','0')";
				$data=mysqli_query($con,$sql);
				if($data)
                {
                    // echo"sdfsd";
                    header('location:index.php');
                }
                else
                {
                    echo "Error !!";
                }
			}
			else
			{
				echo "Fuck you !!";
			}
			
		?>

<head> 
<!-- I did not create this form. This was completed following this youtube video: 

 https://www.youtube.com/watch?v=-sMXE7E3R3M

Thank you. --> 
	<style>
		* { 
		  margin: 0; 
		  padding: 0;  
		}

		/* Change the background image url to a background of your choosing. */

		body { 
		  background-image: url(https://i.pinimg.com/564x/14/81/b3/1481b327ffa21ede46cf27fefc4caccb.jpg);
		  background-position: center; 
		  background-size: cover; 
		  font-family: san-serif;
		  margin-top: 40px;
		}

		.regform { 
		  width: 800px; 
		  background-color:rgb(0,0,0,0.6);
		  margin: auto;
		  color: #ffffff;
		  padding: 10px 0px 10px 0px; 
		  text-align: center;
		  border-radius: 15px 15px 0px 0px;
		}

		.main { 
		  background-color: rgb(0,0,0,0.5);
		  width: 800px; 
		  margin: auto;
		}

		form { 
		  padding:10px; 
		}

		#name { 
		  width: 100%;
		  height: 100px;
		}

		.name { 
		  margin-left: 25px;
		  margin-top: 30px; 
		  width: 125px;
		  color: white;
		  font-size: 18px;
		  font-weight: 700;
		}

		.firstname { 
		  position: relative;
		  left: 200px;
		  top: -37px; 
		  line-height: 40px;
		  border-radius: 6px;
		  padding: 0 22px;
		  font-size: 16px;
		}

		.lastname { 
		  position: relative;
		  left: 417px;
		  top: -80px;
		  line-height: 40px;
		  border-radius: 6px; 
		  padding: 0 22px;
		  font-size: 16px;
		  color: #555;
		}

		.firstlabel { 
		  position: relative;
		  color: #e5e5e5;
		  text-transform: capitalize;
		  font-size: 14px;
		  left: 203px; 
		  top: -45px;
		}

		.lastlabel { 
		  position: relative;
		  color: #e5e5e5;
		  text-transform: capitalize;
		  font-size: 14px;
		  left: 175px; 
		  top: -45px;
		}

		.company { 
		  position: relative;
		  left: 200px;
		  top: -37px;
		  line-height: 40px;
		  width: 480px;
		  border-radius: 6px;
		  padding: 0 22px; 
		  font-size: 16px;
		  color: #555;
		 }

		.email { 
		  position: relative;
		  left: 200px;
		  top: -37px;
		  line-height: 40px;
		  width: 480px;
		  border-radius: 6px;
		  padding: 0 22px; 
		  font-size: 16px;
		  color: #555;
		}

		.code { 
		  position: relative;
		  left: 200px;
		  top: -37px;
		  line-height: 40px;
		  width: 95px;
		  border-radius: 6px;
		  padding: 0 22px; 
		  font-size: 16px;
		  color: #555;
		}
		.number { 
		  position: relative;
		  left: 200px;
		  top: -37px;
		  line-height: 40px;
		  width: 255px;
		  border-radius: 6px;
		  padding: 0 22px; 
		  font-size: 16px;
		  color: #555; 
		}

		.area-code { 
		  position: relative;
		  color: #E5E5E5;
		  text-transform: capitalize;
		  font-size: 16px;
		  left: 54px;
		  top: -4px;
		}

		.phone-number { 
		  position: relative;
		  color: #E5E5E5;
		  text-transform: capitalize;
		  font-size: 16px;
		  left: -100px;
		  top: -2px;  
		}

		.option { 
		  position: relative;
		  left: 200px;
		  top: -37px;
		  line-height: 40px;
		  width: 532px;
		  height: 40px; 
		  border-radius: 6px;
		  padding: 0 22px; 
		  font-size: 16px;
		  color: #555;
		  outline: none; 
		  overflow: hidden;
		}

		.option option{ 
		  font-size: 20px; 
		}

		#customer { 
		  margin-left: 25px; 
		  color: white;
		  font-size: 18px;
		}

		.radio { 
		  display: inline-block;
		 /* padding-right: 70px;  */
		  font-size: 25px; 
		  margin-left: 25px;
		  margin-top: 15px; 
		  color: white;
		}

		.radio input{ 
		  width: 20px;
		  height: 20px;
		  border-radius: 50%; 
		  cursor: pointer; 
		  outline: none;
		}

		Button { 
		  background-color: #3BAF9F;
		  display: block;
		  margin: 20px 0px 0px 20px;
		  text-align: center;
		  border-radius: 12px;
		  border: 2px solid #366473;
		  padding: 14px 110px;
		  outline: none;
		  color: white;
		  cursor: pointer;
		  transition: 0.25px;
		}

		button:hover { 
		  background-color: #5390F5;
		}
	</style>

</head> 
<body> 
<div class="regform"> <h1>Registration</h1> </div>
<div class="main"> 
    
	<form method="post" autocomplete="off"> 
    
		<h2 class="name">Full Name</h2>
		<input class="email" type="text" name="U_Name"><br>

		<h2 id="customer">Gender</h2> 
		<label class="radio">
		<input class="radio-one" type="radio" value="Male"  name="U_Gender"> Male
		</label> 
		<label class="radio">
		<input class="radio-two" type="radio" value="Female" name="U_Gender"> Female
		</label>
		
		<h2 class="name">Email Id</h2> 
		<input class="email" type="text" name="U_Email_Id">
			
		<h2 class="name"> Phone No</h2>
		<input class="text" type="text" name="U_Phone_No">
		
		<h2 class="name">Address</h2> 
		<input class="email" type="text" name="U_Address">

		<h2 class="name"> Pincode</h2>
		<input class="number" type="text" name="U_Pincode">

		<h2 class="name">City</h2>
		<input class="number" type="text" name="U_City">

		<h2 class="name">State</h2>
		<input class="number" type="text" name="U_State">

		<h2 class="name">Country</h2>
		<input class="number" type="text" name="U_Country">

		<h2 class="name">Password</h2>
		<input class="number" type="password" name="U_Password">

		<button type="submit" name="submit" id="myBtn" >Register</button>
      
    </form>
</div> 
</body> 

</HTML> 
