
<?php
 
$servername = "localhost";
$username = "f32ee";
$password = "f32ee";
$dbname = "f32ee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* The SQL query must be quoted in PHP
String values inside the SQL query must be quoted
Numeric values must not be quoted
The word NULL must not be quoted*/


  $NTeaU = $_POST['NTeaU'];
  $NTeaUqty=$_POST['NTeaUqty'];
  
  
  
  $HotCoffee = $_POST['Hot Coffee'];
  $HotCoffeesize = $_POST['selection1']; 
  $HotCoffeeSize = $_POST['selection2']; 
  $HotCoffeeqty=$_POST['HotCoffeeqty'];
  
  
  
  $IcedCappuccino = $_POST['Iced Cappuccino'];
  $IcedCappuccinosize = $_POST['selection3'];
  $IcedCappuccinoSize = $_POST['selection4'];
  $IcedCappuccinoqty=$_POST['IcedCappuccinoqty'];
  

  
  
  $sql= "INSERT INTO orders (id, product, size, qty,)
VALUES ('', '$NTeaU', '','$NTeaUqty'),
VALUES ('', ' $HotCoffee', '$HotCoffeesize','$HotCoffeeqty'),
VALUES ('', ' $HotCoffee', '$HotCoffeeSize','$HotCoffeeqty'),
VALUES ('', '$IcedCappuccino', '$IcedCappuccinosize','$IcedCappuccinoqty'),
VALUES ('', '$IcedCappuccino', '$IcedCappuccinoSize','$IcedCappuccinoqty')";

if (mysqli_query($conn, $sql)) {
    echo "Thank you for your order!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




mysqli_close($conn);
?>