<?php

    session_start();
    include '../conn.php';
    $U_Email_Id=$_SESSION['U_Email_Id'];
?>
<?php
    if(isset($_POST['Remove']))
    {
        // $U_Email_Id=$_SESSION['U_Email_Id'];
        $O_Id=$_POST['O_Id'];

        $sql="delete from order_detail_tbl where O_Id='$O_Id' and O_U_Email_Id='$U_Email_Id' ";
        $data=mysqli_query($con,$sql);
        
        if($data)
        {
            // echo "inserted";
            header('location:index.php');
        }
        else
        {
            echo "Error !!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

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
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
<style>
        .m_margin
            {
                margin-top:50px;
                margin-bottom:50px;
            }
            .mdiv
            {
                border-radius : 15px;
                margin:auto;
                width: 75%;
                height: flex;
                padding: 15px;
                background-color: white;
                box-shadow:0px 0px  10px 10px #b9edc9;
                
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
                padding:10px;
                color:whie;
                /* border-bottom-style: solid;
                border-width: 2px; */
            }
            .h2
            {
                border-radius:15px 15px 0 0;
                margin:-15px -15px;
                 background:#ace6be; 
            }
            .button 
            {
                margin-top:50px;
                margin-left:400px;
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
            .flex{
                display:flex;
            }
            .ppimg{
                height:300px;
                width:300px;
                border:1px solid black;
                border-radius:20px;
                margin-top:40px;
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

<!--start content-->
<?php
    include '../conn.php';
    //error_reporting(0);

	// $U_Email_Id=$_SESSION['U_Email_Id'];
	$sql="select * from order_detail_tbl where O_U_Email_Id = '$U_Email_Id'";
    $data=mysqli_query($con,$sql);
                      
    if(mysqli_num_rows($data))
    {
        while($result=mysqli_fetch_array($data))
        {
            $row = $result;	
?>
<div class="m_margin"></div>
    <div class="mdiv">
    	<h2 class="h2">Order Product Information</h2>
        
        <div class="flex">
		<table>
            <tr>
                <td>product Name :</td>
                <td><?php echo $row['O_P_Name'];?></td>
            </tr>
            <tr>
                <td>Order Total Price :</td>
                <td>&#8377; <?php echo $row['O_Total_Price'];?> /-</td>
            </tr>
            <tr>
                <td>Gross Weight :</td>
                <td><?php echo $row['O_P_Gross_Weight'];?> gram</td>
            </tr>
            <tr>
                <td>Product Type :</td>
                <td><?php echo $row['O_P_Type'];?></td>
            </tr>
            <tr>
                <td>product Purity  :</td>
                <td><?php echo $row['O_P_Purity'];?></td>
            </tr>
            <tr>
                <td> Product Quentity :</td>
                <td><?php echo $row['O_Quentity'];?></td>
            </tr>
            <tr>
                <td>Order Date :</td>
                <td><?php echo $row['O_Date'];?></td>
            </tr>
            <tr>
                <td>Full Name :</td>
                <td><?php echo $row['O_U_Name'];?></td>
            </tr>
            <tr>
                <td>Email Id :</td>
                <td><?php echo $row['O_U_Email_Id'];?></td>
            </tr>
            <tr>
                <td>Phone no :</td>
                <td><?php echo $row['O_Phone_no'];?></td>
            </tr>
            <tr>
                <td>Shipping Address :</td>
                <td><?php echo $row['O_Shipping_Address'];?></td>
            </tr>
            <tr>
                <td>City :</td>
                <td><?php echo $row['O_City'];?></td>
            </tr>
            <tr>
                <td>Pincode :</td>
                <td><?php echo $row['O_Pincode'];?></td>
            </tr>
            <tr>
                <td>State :</td>
                <td><?php echo $row['O_State'];?></td>
            </tr>
            <tr>
                <td>Country :</td>
                <td><?php echo $row['O_Country'];?></td>
            </tr>
            <form method="post">
                <input type="hidden" name="O_Id" value="<?php echo "$result[O_Id]";?>">
                <tr><td colspan="2"><input type="submit" name="Remove" class="button" value="Order Cancle"></td> </tr>
            </form>
        </table>
        <img class="ppimg"src=<?php echo $row['O_P_Image'];?>>
        </div>
    </div>
</div>
    <div class="m_margin"></div>
    <!--end content-->
<?php
        }
    }
    else
    {
        echo "
            <div class='m_margin'></div>
            <h2 style='text-align:center;'>No order yet !!<br><br>Order Now ...</h2>
            <div class='m_margin'></div>
        ";
    }
?>

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

        <!-- <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2021 Company Name 
                            | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div> -->

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