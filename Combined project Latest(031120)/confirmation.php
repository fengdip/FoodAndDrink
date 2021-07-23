

<html>
<head>
	<title>Order Confirmation</title>

	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<div id="wrapper">
		
		 <header>
      <h1>
         <img src="4717.png"width="500" height="120">
      </h1>
    </header>

        <div id="leftcolumn">
      <nav>
        <br>
          <ul style="padding-left: 0px;">
            <a href="11_index.html">
              <li>
                <div style="height: 50px;text-align: center;"  >
                 <button  type="button" class="button" >
                    Home</button>
                </div>
                
              </li>
            </a>
            <a href="12_food.html">
              <li>
                <div style="height: 50px;text-align: center;padding-top: 50px;" >
                 <button  type="button" class="button">
                    Xin's</button>
                </div>
              </li>
            </a>
            <a href="menu.html">
              <li>
                <div style="height: 50px;text-align: center;padding-top: 50px;" >
                 <button  type="button" class="button">
                    N-Tea-U</button>
                </div>
              </li>
            </a>
            <a href="14_contactus.html">
              <li>
                <div style="height: 50px;text-align: center;padding-top: 50px;" >
                  <button  type="button" class="button">
                    Contact Us</button>
                </div>
              </li>
            </a>
        </ul>
    </nav>
    </div>
    <div id="rightcolumn" style="padding-bottom: 40px">
    	<div>
        <h2 style="text-align: center;">
        Digital Receipt
        </h2> 
        <?php

        //allocating variables
        $chickenQuantity = $_POST['chickenQuantity'];
        $chickenPrice=$_POST['chickenPrice'];
        $duckQtySmall = $_POST['duckQtySmall'];
        $duckQtyLarge = $_POST['duckQtyLarge'];
        $duckPriceSmall =$_POST['duckPriceSmall'];
        $duckPriceLarge =$_POST['duckPriceLarge'];
        $friedQtySmall = $_POST['friedQtySmall'];
        $friedQtyLarge = $_POST['friedQtyLarge'];
        $friedPriceSmall=$_POST['friedPriceSmall'];
        $friedPriceLarge=$_POST['friedPriceLarge'];
        $totalprice=$_POST['totalPrice1'];

        //removing $ sign to process
        $chickenPrice1=str_replace("$", "", $chickenPrice);
        $duckPriceSmall1=str_replace("$", "",  $duckPriceSmall);
        $duckPriceLarge1=str_replace("$", "",  $duckPriceLarge);
        $friedPriceSmall1=str_replace("$", "",  $friedPriceSmall);
        $friedPriceLarge1=str_replace("$", "",  $friedPriceLarge);
        $totalPrice2 = str_replace("$", "",  $totalprice);
        
         if(empty($chickenQuantity) && empty($duckQtySmall) && empty($duckQtyLarge) 
          && empty($friedQtySmall ) && empty($friedQtyLarge )){
          echo "You have not input any quantity! Please order again.";
          exit;
        }else{ 
          @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

          if (mysqli_connect_errno()) {
               echo "Error: Could not connect to database.  Please try again later.";
               exit;
          }
        }

        if(!empty($chickenQuantity)){//load for chicken noodle in DB

          @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

          if (mysqli_connect_errno()) {
           echo "Error: Could not connect to database.  Please try again later.";
           exit;
          }
          $query1 = "UPDATE confirmation SET Price = '$chickenPrice1' where Food = 'Chicken Noodle' ";
          $query2 = "UPDATE confirmation SET Quantities = '$chickenQuantity' where Food = 'Chicken Noodle' ";
          $query3 = "UPDATE totalprice SET Total = '$totalPrice2'";
          $db->query($query1);//execute query
          $db->query($query2);//execute query
          $db->query($query3);//execute query


          

            $db->close();

        }

        if(!empty($duckQtySmall)){

          @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

          if (mysqli_connect_errno()) {
           echo "Error: Could not connect to database.  Please try again later.";
           exit;
          }
          $query1 = "UPDATE confirmation SET Price = '$duckPriceSmall1' where Food = 'Duck Rice Small' ";
          $query2 = "UPDATE confirmation SET Quantities = '$duckQtySmall' where Food = 'Duck Rice Small' ";
          $query3 = "UPDATE totalprice SET Total = '$totalPrice2'";
          $db->query($query1);//execute query
          $db->query($query2);//execute query
          $db->query($query3);//execute query


          

            $db->close();

        }

        if(!empty($duckQtyLarge)){

          @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

          if (mysqli_connect_errno()) {
           echo "Error: Could not connect to database.  Please try again later.";
           exit;
          }
          $query1 = "UPDATE confirmation SET Price = '$duckPriceLarge1' where Food = 'Duck Rice Large' ";
          $query2 = "UPDATE confirmation SET Quantities = '$duckQtyLarge' where Food = 'Duck Rice Large' ";
          $query3 = "UPDATE totalprice SET Total = '$totalPrice2'";
          $db->query($query1);//execute query
          $db->query($query2);//execute query
          $db->query($query3);//execute query


          

            $db->close();

        }

        if(!empty($friedQtySmall)){

          @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

          if (mysqli_connect_errno()) {
           echo "Error: Could not connect to database.  Please try again later.";
           exit;
          }
          $query1 = "UPDATE confirmation SET Price = '$friedPriceSmall1' where Food = 'Fried Chicken and Fish Small' ";
          $query2 = "UPDATE confirmation SET Quantities = '$friedQtySmall' where Food = 'Fried Chicken and Fish Small' ";
          $query3 = "UPDATE totalprice SET Total = '$totalPrice2'";
 
          $db->query($query1);//execute query
          $db->query($query2);//execute query
          $db->query($query3);//execute query


          

            $db->close();

        }

        if(!empty($friedQtyLarge)){

          @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

          if (mysqli_connect_errno()) {
           echo "Error: Could not connect to database.  Please try again later.";
           exit;
          }
          $query1 = "UPDATE confirmation SET Price = '$friedPriceLarge1' where Food = 'Fried Chicken and Fish Large' ";
          $query2 = "UPDATE confirmation SET Quantities = '$friedQtyLarge' where Food = 'Fried Chicken and Fish Large' ";
          $query3 = "UPDATE totalprice SET Total = '$totalPrice2'";


          $db->query($query1);//execute query
          $db->query($query2);//execute query
          $db->query($query3);//execute query


          

            $db->close();

        }
     
        ?>

        <?php //display table for confirmation table
          @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

              if (mysqli_connect_errno()) {
               echo "Error: Could not connect to database.  Please try again later.";
               exit;}

               $query =" SELECT * FROM confirmation";

              $result = $db->query($query);

              echo "<table border='2' style='text-align : center;'>
              <tr>
              <th>Drinks</th>
              <th>Quantity</th>
              <th>Price</th>
              </tr>";

              

              while($row = mysqli_fetch_array($result)){

                      
                echo "<tr>";
                echo "<td>" . $row['Food'] . "</td>";
                echo "<td>" . $row['Quantities'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";

                    }
               echo "</table>";
 

              $db->close();
              

        ?>
        <br>

        <?php //display table for price table
          @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

              if (mysqli_connect_errno()) {
               echo "Error: Could not connect to database.  Please try again later.";
               exit;}

               $query =" SELECT * FROM totalprice";

              $result = $db->query($query);

              echo "<table border='2' style='text-align : center;'>
              <tr>
              <th>Total</th>
             
              </tr>";

              

              while($row = mysqli_fetch_array($result)){

                      
                echo "<tr>";
                echo "<td>" . $row['Total'] . "</td>";
                

                    }
               echo "</table>";
 

              $db->close();
              

        ?>
      </div>

    </div>

     <h3>
      <footer >
        <small>
          <i>
            Copyright &copy; 2020 NTU Food & Beverages
          </i>
          <br>
          <i>
            <a href="mailto:yourfirstname@yourlastname.com">ntufandb@e.ntu.edu.sg</a>
          </i>
        </small>
      </footer>
    </h3>


	</div>
</body>
</html>