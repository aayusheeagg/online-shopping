<!DOCTYPE HTML>
<html>

<head>
  <title>Inno Tech - We care for you</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/php; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
	  <img src="images/header.png" width="1000px" height="140px">
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="about_us.php">About Us</a></li>
          
          <li><a href="branches.php">Branches</a></li>
          <li><a href="contact.php">Feedback</a></li>
          
          <li><a href="news_event.php">News and Event</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
	<h3 style="text-indent:10px; margin-top:10px;">Customer Checkout</h3>
      <div id="content" style="width: 974px; border: 3px solid #d0d0d0; border-radius: 4px; padding:5px; margin-top: -5px; margin-right: 5px;">
          <div class="form_settings">
	<form method="post" style="margin-left: 152px;">
            <p><span>Email Address</span><input class="contact" type="email" name="email" placeholder="Your email..." /></p>
			<br />
            <p><span>Password</span><input class="contact" type="password" name="password" placeholder="Your password..." /></p>

			<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="login" value="Log in" /></p>
			<p style="margin-left: 54px;"><span>&nbsp;</span>Not yet a member?</p>
			<p style="padding-top: 15px"><span>&nbsp;</span><a href="registered.php"><input type="button" class="submit" value="Sign up" /></a></p>

<?php
include ('admin/includes/db.php');
if (isset($_POST['login'])) 
  	{ 			
		$user = $_POST['email'];			
		$pass = $_POST['password'];	
		
		$result = mysql_query("SELECT * FROM members	WHERE ((email = '$user') AND (`password` = '$pass'))");
			$row=mysql_fetch_array($result);
	$pro=$row['member_id'];			
					if (!$result) 
					{
					die("Query to show fields from table failed");
					}
					
					$numberOfRows = MYSQL_NUMROWS($result);				
					If ($numberOfRows == 0) 
						{
						echo " <font color= 'red'>Invalid email and password!</font>";
						
						}
					else if ($numberOfRows > 0) 
						{
						//session_register('is');
						$_SESSION['is']['login']    = TRUE;
						$_SESSION['is']['email'] = $_POST['email'];
					    $_SESSION['is']['id'] = $pro;				
						
								//echo " <font color= 'red'>Name is $pro </font>";								
                                header('location:order_summary.php?id='.$pro);						
 				}
			}
?>
			
	</form>
          </div>
	  </div>
    </div>
    <div id="content_footer"></div>
     <div id="footer">
      <p><a href="index.php">Home</a> | <a href="about_us.php">About Us</a> |<a href="branches.php">Branches</a> |
       <a href="contact.php">Feedback</a>| <a href="news_event.php">News and Event</a></p>
      <p>Copyright &copy; INNO TECH</p>
    </div>
  </div>
</body>
</html>
