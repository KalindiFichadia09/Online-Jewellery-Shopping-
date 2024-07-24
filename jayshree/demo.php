<?php

    session_start();
	include '../conn.php';

?>
<?php
	// error_reporting(0);
	if(isset($_POST['submit']))	
 	{
		$U_Id = $_POST['U_Id'];
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
 	
 		$sql="update user_tbl set U_Name='$U_Name',U_Gender='$U_Gender',U_Email_Id='$U_Email_Id',U_Phone_no='$U_Phone_no',U_Address='$U_Address',U_City='$U_City',U_State='$U_State',U_Country='$U_Country',U_Pincode='$U_Pincode',U_Password='$U_Password' where U_Id='$U_Id' ";
		$data=mysqli_query($con,$sql);
		
		if($data)
		{
			echo "Helluuu...updated";
			header('location:profile.php');
		}
		else
		{
			echo "Not update";
		}
	}
	else
	{
		//echo "something went wrong !!";
	}
?>

<html>
<head>
        <title>Jayshree Jewels</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="../img/icon.png">
        <link rel="icon" type="image/x-icon" href="../img/icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/templatemo.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        

        <!-- Load fonts style after rendering the layout styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
        <!--dropdown-->
        <link rel="stylesheet" href="assets/css/dropdown.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Slick -->
        <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

		<style>
            .m_margin
            {
                margin-top:50px;
                margin-bottom:50px;
            }
            .mdiv
            {
                border : 2px solid black;
                border-radius : 15px;
                margin:auto;
                width: 75%;
                height: flex;
                padding: 15px;
                background-color: white;
                box-shadow: 10px 10px #b9edc9;
                
            }
            td
            {
                font-size: 25px;
            }
            table 
            {
                border-collapse: separate;
                border-spacing: 0 1em;
            }
            h2
            {
                color:#ace6be;
                /* border-bottom-style: solid;
                border-width: 2px; */
            }
            .h2
            {
                /* background:#ace6be; */
                border-bottom-style: solid;
                border-width: 2px;
            }
            .button 
            {
                margin-top:50px;
                margin-left:600px;
                background-color: #4CAF50; /* Green */
                border: none;
                border-radius:50px;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
        </style>
	</head>

	<body>

		<!-- Start Top Nav -->
		<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="jayshreejewels@gmail.com">jayshreejewels@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:8347293959">8347293958</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                <img src="../img/logo_user.png">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="wishlist.php">Wishlist</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="order.php">Order</a>
                        </li> -->
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="cart.php">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">
                        <?php
                                include '../conn.php';
                                $U_Email_Id=$_SESSION['U_Email_Id'];
                                $sql = "SELECT COUNT(*) as count_item FROM cart_tbl where U_Email_Id='$U_Email_Id' ";
                                $data = mysqli_query($con,$sql);
                                $result=mysqli_fetch_assoc($data);
                                echo $result['count_item'];
                                
                        ?>
                        </span>
                    </a>
                    <div class="topnav" id="myTopnav">
                        <div class="dropdown">
                            <button class="dropbtn">
                            <i class="fa fa-fw fa-user text-dark mr-3"></i>
                            <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                            <a href="#"><?php echo $_SESSION['U_Email_Id']; ?></a>
                            <?php echo '<a href="profile.php?U_Email_Id=$_SESSION["U_Email_Id"]">My Profile</a>'; ?>
                            <a href="order_history.php">Order History</a>
                            <a href="../logout.php">Logout</a>
                            
                            </div>
                        </div>
                        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                    </div>
                        <!-- <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span> -->
                    
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

	<!--End Main content-->

<?php
    include '../conn.php';
    //error_reporting(0);

	$U_Email_Id=$_SESSION['U_Email_Id'];
	$sql="select * from user_tbl where U_Email_Id = '$U_Email_Id'";
    $data=mysqli_query($con,$sql);
                      
    while($result=mysqli_fetch_array($data))
    {
        $row = $result;	
    }
?>

<div class="m_margin"></div>
<form action="" method="POST">

<table>
Name :
	<input type="text" name="U_Name" value="<?php echo $row['U_Name'];?>"/><br><br>

Gender :
    <input type="radio" name="U_Gender" value="male" > Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="U_Gender" value="female" > Female<br/><br/>
	
Email Id :
	<input type="email" name="U_Email_Id" value="<?php echo $row['U_Email_Id'];?>"/><br><br>

Phone no :
	<input type="tel" name="U_Phone_no" value="<?php echo $row['U_Phone_no'];?>"/><br><br>

Address :
	<input type="text" name="U_Address" value="<?php echo $row['U_Address'];?>"/><br><br>

City :
    <select id="U_City" name="U_City" value="Mumbai" required>
		<option value="Rajkot">Rajkot</option>
	    <option value="Gandhinager">Gandhinager</option>
        <option value="Ahemedabad">Ahemedabad</option>
		<option value="Udaipur">Udaipur</option>
		<option value="Jaipur">Jaipur</option>
		<option value="Mumbai">Mumbai</option>
		<option value="Pune">Pune</option>
		<option value="Prayagraj">Prayagraj</option>
		<option value="Kanpur">Kanpur</option>
		<option value="Indor">Indor</option>
		<option value="Patiyala">Patiyala</option>
		<option value="Amritsar">Amritsar</option>
	</select></br></br>

State :
    <select name="U_State" required>
		<option value="Gujrat">Gujrat</option>
		<option value="Maharashtra">Maharashtra</option>
		<option value="Punjab">Punjab</option>
		<option value="Rajashthan">Rajashthan</option>
		<option value="Madhyapradesh">Madhyapradesh</option>
	</select></br></br>
    
Country :
    <select name="U_Country" required>
		<option value="India">India</option>
		<option value="Dubai">Dubai</option>
		<option value="America">America</option>
		<option value="Bhutan">Bhutan</option>
		<option value="Nepal">Nepal</option>
	</select></br></br>
	
Pincode :
    <input type="pincode" name="U_Pincode" value="<?php echo $row['U_Pincode'];?>"><br/><br/>
                    
Password</label>
    <input type="password" name="U_Password" placeholder="Enter Password" required>
<br>
<input type="submit" name="submit" class="button" value="Update"> 

<div class="m_margin"></div>
</form>
<!--End Main content-->

<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Jayshree Jewels</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            "jayshree Jewels",Shop no-101-02,Akash Complex,Boghani seri,Soni Bazar, Rajkot-360002
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">8347293958</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:jayshreejewels@gmail.com">jayshreejewels@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                    <?php
                        include '../conn.php';
                        $sql = "select * from category_tbl";
                        $data = mysqli_query($con,$sql);

                        if(mysqli_num_rows($data))
                        {
                            while($result=mysqli_fetch_array($data))
                            {
                                echo '
                                    <li><a class="text-decoration-none" href="shop.php">'.$result['C_Name'].'</a></li>
                                ';
                            }
                        }
                    ?>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="index.php">Home</a></li>
                        <li><a class="text-decoration-none" href="about.php">About Us</a></li>
                        <li><a class="text-decoration-none" href="shop.php">Shop</a></li>
                        <li><a class="text-decoration-none" href="contact.php">Contact</a></li>
                        <li><a class="text-decoration-none" href="wishlist.php">Wishlist</a></li>
                        
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>
</html>
