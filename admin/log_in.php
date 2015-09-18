<?php
						include('includes/db.php');

						if(isset($_POST['enter']))
						{
							$username=$_POST['username'];
							$password=$_POST['password'];
						{
							$result = mysql_query("SELECT * FROM admin WHERE username = '$username' and password='$password'")
							or die(mysql_error());
							
							$row = mysql_fetch_array($result);
							$count = mysql_num_rows($result);				
								if ($count == 0) 
									{
									echo "<script>alert('Please check your username and password!'); window.location='index.php'</script>";
									} 
								else if ($count > 0)
									{
										session_start();
										$_SESSION['id'] = $row['admin_id'];
										header("location:home.php");
									}
						}				
						}
						?>