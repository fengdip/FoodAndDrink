<!DOCTYPE html>
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
    
    <div id="first" >
    <h1>Membership Login</h1>

      <?php //connect to db to check for user and password
            include "dbconnect.php";
            session_start();

            if (isset($_POST['userid']) && isset($_POST['password']))
            {
              // if the user has just tried to log in
              $userid = $_POST['userid'];
              $password = $_POST['password'];
            /*
              $db_conn = new mysqli('localhost', 'webauth', 'webauth', 'auth');

              if (mysqli_connect_errno()) {
               echo 'Connection to database failed:'.mysqli_connect_error();
               exit();
              }
            */
            $password = md5($password);
              $query = 'select * from users '
                       ."where username='$userid' "
                       ." and password='$password'";
            // echo "<br>" .$query. "<br>";
              $result = $dbcnx->query($query);
              if ($result->num_rows >0 )
              {
                // if they are in the database register the user id
                $_SESSION['valid_user'] = $userid;    
              }
              $dbcnx->close();
            }
        ?>

        <?php
              if (isset($_SESSION['valid_user']))
              {
                echo 'You are logged in as: '.$_SESSION['valid_user'].' <br />';
                echo '<a href="11_index.html"> <br><br>Go to Home page</a><br><br>';
                echo '<a href="logout.php">Log out</a><br />';
                
              }
              else
              {
                if (isset($userid))
                {
                  // if they've tried and failed to log in
                  echo 'Could not log you in.<br />';
                }
                else 
                {
                  // they have not tried to log in yet or have logged out
                  echo 'You are not logged in.<br />';
                }

                // provide form to log in 
                echo '<form method="post" action="registration.php">';
                echo '<table>';
                echo '<tr><td>Userid:</td>';
                echo '<td><input type="text" name="userid"></td></tr>';
                echo '<tr><td>Password:</td>';
                echo '<td><input type="password" name="password"></td></tr>';
                echo '<tr><td colspan="2" align="center">';
                echo '<input type="submit" value="Log in"></td></tr>';
                echo '</table></form>';
              }
          ?>
    </div>
    <div id="space"></div>
    <div id="second" >
    <h1>Membership Registration</h1>
      <form action="registration.php" method=POST>
      Username:<br />
      <input type=text name=username><br /><br />
      Password:<br />
      <input type=password name=password><br /><br />
      Password confirmation:<br /> 
      <input type=password name=password2><br /><br />

      <input type=submit name=submit value=Submit>
      <input type=reset name=reset value="Reset">
      </form>

      <?php // register.php
          include "dbconnect.php";
          if (isset($_POST['submit'])) {
            if (empty($_POST['username']) || empty ($_POST['password'])
              || empty ($_POST['password2']) ) {
            echo "All records to be filled in";
            exit;}
            }
          $username = $_POST['username'];
          $password = $_POST['password'];
          $password2 = $_POST['password2'];

          // echo ("$username" . "<br />". "$password2" . "<br />");
          if ($password != $password2) {
            echo "Sorry passwords do not match";
            exit;
            }
          $password = md5($password);
          // echo $password;
          $sql = "INSERT INTO users (username, password) 
              VALUES ('$username', '$password')";
          //  echo "<br>". $sql. "<br>";
          $result = $dbcnx->query($sql);
           
          if (!$result) 
            echo "Please fill up respective fields";
          else
            echo "<br><br>Welcome ". $username . ". You are now registered";
            
        ?>

    </div>
    
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