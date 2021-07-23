
<?php
  session_start();
  
  // store to test if they *were* logged in
  $old_user = $_SESSION['valid_user'];  
  unset($_SESSION['valid_user']);
  session_destroy();
?>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div id="wrapper">

    <header>
      <h1>
        <img src="4717.png"width="500" height="120">
      </h1>
    </header>

    

    <div id="rightcolumn" style="padding-bottom: 40px">
      <div id="container">
      <h1>You have been logged Out</h1>
      <?php 
          if (!empty($old_user))
          {
            echo 'See you Again!<br />';
          }
          else
          {
            // if they weren't logged in but came to this page somehow
            echo 'You were not logged in, and so have not been logged out.<br />'; 
          }
        ?> 
    <a href="registration.php">Back to log in page</a>
   
    </div>

      
    </div>

    <h3>
      <footer>
        <small>
          <i>
            Copyright &copy; 2020 NTU Food & Beverages
          </i>
          <br>
          <i>
            <a href="mailto:ntufandb@e.ntu.edu.sg">ntufandb@e.ntu.edu.sg</a>
          </i>
        </small>
      </footer>
    </h3>

  </div>
</body>
</html>