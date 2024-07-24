<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Jayshree Jewels - category</title>
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
      <!-- <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="category_show.php">Category show</a></li>
                <li><a href="category.php" class="active">Category insert</a></li>
              </ul>
            </nav>
          </div>
        </div> -->

          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">User Table</h2></div>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Full Name</td>
                            <td>Gender</td>
                            <td>Email Id</td>
                            <td>Mobile</td>
                            <td>Address</td>
                            <td>City</td>
                            <td>State</td>
                            <td>Country</td>
                            <td>Pincode</td>
                            <td>Password</td>
                            <td>Update</td>
                            <td>Delete</td>
                        </tr>
                    </thead>
    

                    <?php
	include '../conn.php';
	$sql = "select * from user_tbl";						
	$data = mysqli_query($con,$sql); 
	$total = mysqli_num_rows($data);
	
	if($total=mysqli_num_rows($data))
	{
        while($result=mysqli_fetch_array($data))
        {
            echo "
                <tbody>
                    <tr>
                    <td>".$result['U_Id']."</td>
                    <td>".$result['U_Name']."</td>
                    <td>".$result['U_Gender']."</td>
                    <td>".$result['U_Email_Id']."</td>
                    <td>".$result['U_Phone_no']."</td>
                    <td>".$result['U_Address']."</td>
                    <td>".$result['U_City']."</td>
                    <td>".$result['U_State']."</td>
                    <td>".$result['U_Country']."</td>
                    <td>".$result['U_Pincode']."</td>
                    <td>".$result['U_Password']."</td>
                    
                    <td><a href='user_update.php?U_Id=$result[U_Id] &U_Name=$result[U_Name] &U_Gender=$result[U_Gender]&U_Email_Id=$result[U_Email_Id]&U_Phone_no=$result[U_Phone_no]&U_Address=$result[U_Address]&U_City=$result[U_City]&U_State=$result[U_State]&U_Country=$result[U_Country]&U_Pincode=$result[U_Pincode]&U_Password=$result[U_Password]'>Update</a></td>
						        <td><a href='user_delete.php?U_Id=$result[U_Id]'>Delete</a></td>

                    </tr>
                </tbody>
               
                ";
        }
    }
    else
    {
        echo "no records";
    }
    ?>
                    <!-- <tbody>
                      <tr>
                        <td>1.</td>
                        <td>John</td>
                        <td>Smith</td>
                        <td>@jS</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Bill</td>
                        <td>Jones</td>
                        <td>@bJ</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Mary</td>
                        <td>James</td>
                        <td>@mJ</td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Steve</td>
                        <td>Bride</td>
                        <td>@sB</td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Paul</td>
                        <td>Richard</td>
                        <td>@pR</td>
                      </tr>                    
                    </tbody> -->
                  </table>    
                </div>                          
              </div>
            </div>           
          </div> <!-- Second row ends -->
         
          <!-- <footer class="text-right">
            <p>Copyright &copy; 2084 Company Name 
            | Design: Template Mo</p>
          </footer>          -->
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
    <script>
      /* Google Chart 
      -------------------------------------------------------------------*/
      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart); 
      
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

          // Create the data table.
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Topping');
          data.addColumn('number', 'Slices');
          data.addRows([
            ['Mushrooms', 3],
            ['Onions', 1],
            ['Olives', 1],
            ['Zucchini', 1],
            ['Pepperoni', 2]
          ]);

          // Set chart options
          var options = {'title':'How Much Pizza I Ate Last Night'};

          // Instantiate and draw our chart, passing in some options.
          var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
          pieChart.draw(data, options);

          var barChart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
          barChart.draw(data, options);
      }

      $(document).ready(function(){
        if($.browser.mozilla) {
          //refresh page on browser resize
          // http://www.sitepoint.com/jquery-refresh-page-browser-resize/
          $(window).bind('resize', function(e)
          {
            if (window.RT) clearTimeout(window.RT);
            window.RT = setTimeout(function()
            {
              this.location.reload(false); /* false to get page from cache */
            }, 200);
          });      
        } else {
          $(window).resize(function(){
            drawChart();
          });  
        }   
      });
      
    </script>
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>