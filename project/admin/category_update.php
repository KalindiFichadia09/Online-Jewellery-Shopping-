<?php

    session_start();

?>

<?php
	include '../conn.php';
	if(isset($_POST['submit']))	
 	{
		$C_Id = $_POST['C_Id'];
    $C_Code=$_POST['C_Code'];
    $C_Name=$_POST['C_Name'];
	 	$C_Type=$_POST['C_Type'];
    $file_name=$_FILES['C_Image']['name'];
    $file_tmp_loc=$_FILES['C_Image']['tmp_name'];
    $file_store="../img/".$file_name;
     
    if(move_uploaded_file($file_tmp_loc,$file_store))
    {
	    $sql="update category_tbl set C_Code='$C_Code',C_Name='$C_Name',C_Type='$C_Type',C_Image='$file_store' where C_Id='$C_Id' ";
		  $data=mysqli_query($con,$sql);

      if($data)
      {
        //echo "Holaaaaaaaa...updated !!!";
        header('location:category_show.php');
      }
      else
      {
        echo "Not update";
      }
    }
    else
		{
      echo "Error in uploading image";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jayshree jewels - category</title>
    <link rel="icon" type="image/x-icon" href="../img/icon.png">
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    https://templatemo.com/tm-455-visual-admin
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <!--dropdown-->
    <link rel="stylesheet" href="../jayshree/assets/css/dropdown.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="js"></div>
            <a href="index.php">
              <img src="../img/logo_admin.png">
            </a>
          <!-- <h1>Jayshyree<br/>Jewels</h1> -->
        </header>
        
        <!-- Search box -->
        <!-- <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form> -->

        <!--start lest pannel-->
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="index.php" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="user_show.php"><i class="fa fa-bar-chart fa-fw"></i>User</a></li>
            <li><a href="category_show.php"><i class="fa fa-map-marker fa-fw"></i>Category</a></li>
            <li><a href="product_show.php"><i class="fa fa-database fa-fw"></i>Product</a></li>
            <li><a href="wishlist_show.php"><i class="fa fa-users fa-fw"></i>Wishlist</a></li>
            <li><a href="cart_show.php"><i class="fa fa-users fa-fw"></i>Cart</a></li>
            <li><a href="order_detail_show.php"><i class="fa fa-sliders fa-fw"></i>Order</a></li>
            <!-- <li><a href="feedback.php"><i class="fa fa-eject fa-fw"></i>Feedback</a></li> -->
          </ul>  
        </nav>
      </div>
      <!--end lest pannel-->
      
      <!--start right pannel --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <!-- <li><a href="" class="active">Admin panel</a></li> -->
                <!-- <li><a href="">Dashboard</a></li> -->
                <!-- <li><a href="">Overview</a></li> -->
                <!-- <li><a href="../logout.php">logout</a></li> -->
                <!-- <a href="../logout.php"><img src="img/login.png" style="position:fixed;top:14px;right:50px;height:50px;width:50px;"> -->
              </ul>  
            
            <div class="topnav" id="myTopnav">
              <div class="dropdown">
                  <button class="dropbtn">
                    <i class="fa fa-fw fa-user text-dark mr-3"></i>
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="#"><?php echo $_SESSION['U_Email_Id']; ?></a>
                    <?php echo '<a href="../admin/user_update.php?U_Email_Id=$_SESSION["U_Email_Id"]">My Profile</a>'; ?>
                    <a href="../logout.php">Logout</a>
                  </div>
              </div>
              <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
            </nav> 
          </div>
        </div>
      <!--end right pannel -->
<br/>
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="category_show.php">Category show</a></li>
                <li><a href="" class="active">Category insert</a></li>
                <!-- <li><a href="">Category Update</a></li>
                <li><a href="">Category delete</a></li> -->
              </ul>
            </nav>
          </div>
        </div>

        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Category</h2><br/><br/>
            <!-- <p>Here goes another form and form controls.</p> -->
        
          <?php
              include '../conn.php';
              //error_reporting(0);

              $C_Id=$_GET['C_Id'];
              $row=[];
              $sql="select * from category_tbl where C_Id = '$C_Id'";
              $data=mysqli_query($con,$sql);
        
              while($result=mysqli_fetch_array($data))
              {
                  $row = $result;	
              }
          ?>
           
            <form action="" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Category Id </label><br/>
                    <input type="text" name="C_Id" value="<?php echo $row['C_Id'];?>"/>
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Category Code</label><br/>
                    <input type="text" name="C_Code" placeholder="Enter category code" value="<?php echo $row['C_Code'];?>" required>                  
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Category Name</label><br/>
                    <input type="text" name="C_Name" placeholder="Enter category name" value="<?php echo $row['C_Name'];?>" required>                  
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputUsername">Category Type</label>
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="C_Type" id="r4" value="male" 
                        <?php
                            if($row['C_Type']=="male")
                            {
                                echo "checked";
                            }
                        ?>>
                      <label for="r4" class="font-weight-400"><span></span>Male</label>
                      <input type="radio" name="C_Type" id="r5" value="female" 
                        <?php
                            if($row['C_Type']=="female")
                            {
                                echo "checked";
                            }
                        ?>>
                      <label for="r5" class="font-weight-400"><span></span>Female</label>
                    </div>    
                </div>
                
              <div class="row form-group">
                <div class="col-lg-12">
                  <label class="control-label templatemo-block">Category Image</label> 
                  <input type="file" name="C_Image" id="C_Image" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true" data-icon="false" required>
                </div>
              </div>
              <div class="form-group text-right">
                <button type="submit" name="submit" class="templatemo-blue-button">Submit</button>
              </div> 
                                       
            </form>
         
        </div>
      </div>

    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->
  </body>
</html>