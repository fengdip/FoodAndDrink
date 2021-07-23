<!DOCTYPE html>
<html>
<head>
	<title>Feedback Submission</title>
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

    <div id="rightcolumn" style="padding-bottom: 40px;text-align: center;font-size: 4em;">
      
        Thank you for your feedback!

        <?php
	    	$name=$_POST['name'];
		    $email = $_POST['email'];
		    $feedback=$_POST['feedback'];
        $category = $_POST['category'];
		    // echo $name;
		    // echo $email;
		    // echo $feedback;
        

		     if (!$name || !$email || !$feedback || !$category) {
		     echo "You have not entered all the required details.<br />"
		          ."Please go back and try again.";
		     exit;
  			}

  			@ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

			if (mysqli_connect_errno()) {
			     echo "Error: Could not connect to database.  Please try again later.";
			     exit;
			  }
			$query = "insert into feedback values
            ('".$name."', '".$email."', '".$feedback."','".$category."')";
            $db->query($query);
	    ?>
       
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