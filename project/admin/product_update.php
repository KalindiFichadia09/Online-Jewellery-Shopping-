<?php

    session_start();

?>

<?php
	include '../conn.php';
	if(isset($_POST['submit']))	
 	{

      $Gold_Price=6000; 
      $Diamond_Price=20;//per pices
      $Making_Charge=500;//per gram
      $P_T_Gold_Price;
      
      $P_Id=$_POST['P_Id'];
      $P_Code=$_POST['P_Code'];
              $P_Name=$_POST['P_Name'];
      // $P_Size=$_POST['P_Size'];
              $P_Purity=$_POST['P_Purity'];
              
      if($P_Purity=='22 karat (91.67% Gold)')
      {
        $P_T_Gold_Price=(($Gold_Price*91.67)/100);
      }
      elseif($P_Purity=='20 karat (83.3% Gold)')
      {
        $P_T_Gold_Price=(($Gold_Price*83.3)/100);
      }
      elseif($P_Purity=='18 karat (75% Gold)')
      {
        $P_T_Gold_Price=(($Gold_Price*75)/100);
      }
      elseif($P_Purity=='16 karat (66.7% Gold)')
      {
        $P_T_Gold_Price=(($Gold_Price*66.7)/100);
      }
      elseif($P_Purity=='14 karat (58.3% Gold)')
      {
        $P_T_Gold_Price=(($Gold_Price*58.3)/100);
      }
      
      $P_C_Code=$_POST['P_C_Code'];
              // $P_Category_Type=$_POST['P_Category_Type'];
      $P_Gross_Weight=$_POST['P_Gross_Weight'];
      $P_Diamond_Weight=$_POST['P_Diamond_Weight'];
      $P_Diamond_Pices=$_POST['P_Diamond_Pices'];
              $P_Diamond_Color=$_POST['P_Diamond_Color'];
      $P_Stock=$_POST['P_Stock'];
      $P_Overhead=$_POST['P_Overhead'];
      
      $P_Gold_Weight=($P_Gross_Weight-$P_Diamond_Weight);
      $P_Gold_Price=($P_T_Gold_Price*$P_Gold_Weight);
      $P_Diamond_Price=($Diamond_Price*$P_Diamond_Pices);
      $P_Making_Charge=($Making_Charge*$P_Gross_Weight);
      $P_Base_Price=($P_Gold_Price+$P_Diamond_Price+$P_Making_Charge+$P_Overhead);
      $P_Tax=(($P_Base_Price*3)/100);
      $P_Total_Price=($P_Base_Price+$P_Tax);
              
      $file_name=$_FILES['P_Image']['name'];
      $file_tmp_loc=$_FILES['P_Image']['tmp_name'];
      $file_store="../img/".$file_name;
      
      if(move_uploaded_file($file_tmp_loc,$file_store))
      {
	      $sql="update product_tbl set P_Code='$P_Code',P_Name='$P_Name',P_C_Code='$P_C_Code',P_Gross_Weight='$P_Gross_Weight',P_Diamond_Weight='$P_Diamond_Weight',P_Diamond_Pices='$P_Diamond_Pices',P_Purity='$P_Purity',P_Gold_Weight='$P_Gold_Weight',P_Gold_Price='$P_Gold_Price',P_Diamond_Price='$P_Diamond_Price',P_Making_Charge='$P_Making_Charge',P_Overhead='$P_Overhead',P_Base_Price='$P_Base_Price',P_Tax='$P_Tax',P_Total_Price='$P_Total_Price',P_Diamond_Color='$P_Diamond_Color',P_Stock='$P_Stock',P_Image='$file_store' where P_Id='$P_Id' ";
		    $data=mysqli_query($con,$sql);
        //echo $sql;
        if($data)
        {
          // echo "Holaaaaaaaa...updated !!!";
          header('location:product_show.php');
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
                <li><a href="product_show.php" class="">Product Show</a></li>
                <li><a href="product_insert.php" class="">Product Insert</a></li>
                <!-- <li><a href="">Category Update</a></li>
                <li><a href="">Category delete</a></li> -->
              </ul>
            </nav>
          </div>
        </div>

        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Product</h2><br/><br/>
            <!-- <p>Here goes another form and form controls.</p> -->

        <?php
            include '../conn.php';
           	//error_reporting(0);

            $P_Id=$_GET['P_Id'];
            $row=[];
            $sql="select * from product_tbl where P_Id = '$P_Id'";
            $data=mysqli_query($con,$sql);
                      
            while($result=mysqli_fetch_array($data))
            {
                $row = $result;	
            }
        ?>

            <form action="" class="templatemo-login-form" method="post" enctype="multipart/form-data">
                <div class="row form-group">
                    <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputFirstName">Product Id</label><br/>
                        <input type="text" name="P_Id" value="<?php echo $row['P_Id'];?>" required>                  
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputFirstName">Product Code</label><br/>
                        <input type="text" name="P_Code" value="<?php echo $row['P_Code'];?>" required>                  
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Product Name</label><br/>
                        <input type="text" name="P_Name" value="<?php echo $row['P_Name'];?>" required>                  
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Product Category Code</label><br/>
                      <select name="P_C_Code">
                        <option value = "" selected> <?php echo $row['P_C_Code'];?> </option>
                        <option></option>
                          <?php
                            include '../conn.php';
                            $sql = "select * from category_tbl";						
                            $data = mysqli_query($con,$sql); 
                            $total = mysqli_num_rows($data);
                            
                            if($total=mysqli_num_rows($data))
                            {
                                while($result=mysqli_fetch_array($data))
                                {
                                  echo "
                                    <option value="if($row['C_Code']=="C_Code")
                                    {
                                        echo "selected";
                                    }">".$result['C_Code']."</option>
                                    ";
                                }
                            }
                            else
                            {
                              echo "no records";
                            }
                          ?>
                      </select>

                                          
                    </div>
                    <!-- <div class="col-lg-6 col-md-6 form-group"> 
                      <label for="inputLastName">Product Category Type</label><br/>       
                      <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="P_Category_Type" id="r4" value="male" 
                          
                        <label for="r4" class="font-weight-400"><span></span>Male</label>
                        <input type="radio" name="P_Category_Type" id="r5" value="female" 
                          
                        <label for="r5" class="font-weight-400"><span></span>Female</label>
                      </div>
                    </div> -->
                    <div class="col-lg-6 col-md-6 form-group">                  
                      <label for="inputLastName">Product Type</label><br/>
                      <select name="P_Type" placeholder="select" required>
                        <option value="Yellow Gold"
                        <?php
                              if($row['P_Type']=="Yellow Gold")
                              {
                                  echo "selected";
                              }
                          ?>>Yellow Gold</option>
                        <option value="Rose Gold"
                        <?php
                              if($row['P_Type']=="Rose Gold")
                              {
                                  echo "selected";
                              }
                        ?>>Rose Gold</option>
                        <option value="White Gold"
                        <?php
                              if($row['P_Type']=="White Gold")
                              {
                                  echo "selected";
                              }
                        ?>>White Gold</option>
                        <option value="Diamond"
                        <?php
                              if($row['P_Type']=="Diamond")
                              {
                                  echo "selected";
                              }
                        ?>>Diamond</option>
                      </select>                
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Product Gross Weight</label><br/>
                        <input type="text" name="P_Gross_Weight" value="<?php echo $row['P_Gross_Weight'];?>" required>                  
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Product Diamond Weight</label><br/>
                        <input type="text" name="P_Diamond_Weight" value="<?php echo $row['P_Diamond_Weight'];?>" required>                  
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Product Diamond Pices</label><br/>
                        <input type="text" name="P_Diamond_Pices" value="<?php echo $row['P_Diamond_Pices'];?>" required>                  
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">                  
                      <label for="inputLastName">Product Purity</label><br/>
                      <select name="P_Purity">
                          <option value="22 karat (91.67% Gold)" 
                          <?php
                              if($row['P_Purity']=="22 karat (91.67% Gold)")
                              {
                                  echo "selected";
                              }
                          ?>>22 karat (91.67% Gold)</option>
                        <option value="20 karat (83.3% Gold)"
                          <?php
                                if($row['P_Purity']=="20 karat (83.3% Gold)")
                                {
                                    echo "selected";
                                }
                          ?>>20 karat (83.3% Gold)</option>
                        <option value="18 karat (75% Gold)"
                          <?php
                                if($row['P_Purity']=="18 karat (75% Gold)")
                                {
                                    echo "selected";
                                }
                          ?>>18 karat (75% Gold)</option>
                        <option value="16 karat (66.7% Gold)"
                          <?php
                                if($row['P_Purity']=="16 karat (66.7% Gold)")
                                {
                                    echo "selected";
                                }
                          ?>>16 karat (66.7% Gold)</option>
                        <option value="14 karat (58.3% Gold)"
                          <?php
                                if($row['P_Purity']=="14 karat (58.3% Gold)")
                                {
                                    echo "selected";
                                }
                          ?>>14 karat (58.3% Gold)</option>
                      </select>                
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Product Overhead charges</label><br/>
                        <input type="text" name="P_Overhead" value="<?php echo $row['P_Overhead'];?>" required>                  
                    </div>
                   <!-- <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Product Size</label><br/>
                        <input type="text" name="P_Size" value="<?php echo $row['P_Size'];?>" required>                  
                    </div>
                     -->
                                   
                    <!-- <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Product Gold Price</label><br/>
                        <input type="text" name="P_Gold_Price" value="<?php echo $row['P_Gold_Price'];?>" required>                  
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Product Diamond Price</label><br/>
                        <input type="text" name="P_Diamond_Price" value="<?php echo $row['P_Diamond_Price'];?>" required>                  
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Product Making Charge</label><br/>
                        <input type="text" name="P_Making_Charge" value="<?php echo $row['P_Making_Charge'];?>" required>                  
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Product Gold Weight</label><br/>
                        <input type="text" name="P_Gold_Weight" value="<?php echo $row['P_Gold_Weight'];?>" required>                  
                    </div> -->
                    
                    <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Product Diamond Color</label><br/>
                        <input type="text" name="P_Diamond_Color" value="<?php echo $row['P_Diamond_Color'];?>" required>                  
                    </div>
                    <!-- <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Product Tax</label><br/>
                        <input type="text" name="P_Tax" value="<?php echo $row['P_Tax'];?>" required>                  
                    </div> -->
                    <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputLastName">Product Stock</label><br/>
                        <input type="text" name="P_Stock" value="<?php echo $row['P_Stock'];?>" required>                  
                    </div>
                    <div class="col-lg-12">
                        <label class="control-label templatemo-block">Product Image</label> 
                        <input type="file" name="P_Image" id="P_Image" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true" data-icon="false" required>
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

