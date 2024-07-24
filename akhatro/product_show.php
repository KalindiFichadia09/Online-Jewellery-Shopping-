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
              <img src="../img/admin_logo.png">
            </a>
          <!-- <h1>Jayshyree<br/>Jewels</h1>  -->
        </header>
        
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="index.php" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="user_show.php"><i class="fa fa-bar-chart fa-fw"></i>User</a></li>
            <li><a href="category.php"><i class="fa fa-map-marker fa-fw"></i>Category</a></li>
            <li><a href="product.php"><i class="fa fa-database fa-fw"></i>Product</a></li>
            <li><a href="cart.php"><i class="fa fa-users fa-fw"></i>Cart</a></li>
            <li><a href="order.php"><i class="fa fa-sliders fa-fw"></i>Order</a></li>
            <li><a href="feedback.php"><i class="fa fa-eject fa-fw"></i>Feedback</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="" class="active">Admin panel</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="../logout.php">logout </a></li>
              </ul>  
            </nav>
          </div>
        </div>
        <br/>
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="product_show.php">Product show</a></li>
                <li><a href="product_insert.php">Product insert</a></li>
              </ul>
            </nav>
          </div>
        </div>

          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-2">
                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">User Table</h2></div>
                <div class="table-responsive" style="display:flex;overflow:auto;">
                  <table class="table table-striped table-bordered" style="width:50px">
                    <thead>
                      <tr>
                        <td>Id</td>
                        <td>Product Code</td>
                        <td>Product Name</td>
                        <td>Product Total Price</td>
                        <td>Product Gross Weight</td>
                        <td>Product Size</td>
                        <td>Product Purity</td>
                        <td>Product Category Id</td>
                        <td>Product Category Type</td>
                        <td>Product Gold Price</td>
                        <td>Product Diamond Price</td>
                        <td>Product Making Charge</td>
                        <td>Product Gold Weight</td>
                        <td>Product Diamond Weight</td>
                        <td>Product Diamond Pices</td>
                        <td>Product Diamond Color</td>
                        <td>Product Tax</td>
                        <td>Product Stock</td>
                        <td>Product Image</td>
                        <td>Update</td>
                        <td>Delete</td>
                      </tr>
                    </thead>

<?php
	include '../conn.php';
	$sql = "select * from product_tbl";						
	$data = mysqli_query($con,$sql); 
	$total = mysqli_num_rows($data);
	
	if($total=mysqli_num_rows($data))
	{
        while($result=mysqli_fetch_array($data))
        {
            echo "
                <tbody>
                    <tr>
                        <td>".$result['P_Id']."</td>
                        <td>".$result['P_Code']."</td>
                        <td>".$result['P_Name']."</td>
                        <td>".$result['P_Total_Price']."</td>
                        <td>".$result['P_Gross_Weight']."</td>
                        <td>".$result['P_Size']."</td>
                        <td>".$result['P_Purity']."</td>
                        <td>".$result['P_Category_Id']."</td>
                        <td>".$result['P_Category_Type']."</td>
                        <td>".$result['P_Gold_Price']."</td>
                        <td>".$result['P_Diamond_Price']."</td>
                        <td>".$result['P_Making_Charge']."</td>
                        <td>".$result['P_Gold_Weight']."</td>
                        <td>".$result['P_Diamond_Weight']."</td>
                        <td>".$result['P_Diamond_Pices']."</td>
                        <td>".$result['P_Diamond_Color']."</td>
                        <td>".$result['P_Tax']."</td>
                        <td>".$result['P_Stock']."</td>
                        <td>".$result['P_Image']."</td>
                        <td><a href='product_update.php?P_Id=$result[P_Id] &P_Code=$result[P_Code] &P_Name=$result[P_Name] &P_Total_Price=$result[P_Total_Price] &P_Gross_Weight=$result[P_Gross_Weight] &P_Size=$result[P_Size] &P_Purity=$result[P_Purity] &P_Category_Id=$result[P_Category_Id] &P_Category_Type=$result[P_Category_Type] &P_Gold_Price=$result[P_Gold_Price] &P_Diamond_Price=$result[P_Diamond_Price] &P_Making_Charge=$result[P_Making_Charge] &P_Gold_Weight=$result[P_Gold_Weight] &P_Diamond_Weight=$result[P_Diamond_Weight] &P_Diamond_Pices=$result[P_Diamond_Pices] &P_Diamond_Color=$result[P_Diamond_Color] &P_Tax=$result[P_Tax] &P_Stock=$result[P_Stock] &P_Image=$result[P_Image]'>Update</a></td>
						            <td><a href='product_delete.php?P_Id=$result[P_Id]'>Delete</a></td>
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
                  </table>    
                </div>                          
              </div>
            </div>           
          </div> 
          <!-- Second row ends -->
         
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