<?php
 

require_once "conn.php";
	
	
	session_start();
	 
	
	if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
		header("location: index.php");
		exit;
	}
	 
	 
	$username = $password = "";
	$username_err = $password_err = "";
	 
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	 
		
		if(empty(trim(htmlspecialchars($_POST["username"])))){
			$username_err = "Please enter username.";
		} else{
			$username = trim(htmlspecialchars($_POST["username"]));
		}
		
		
		if(empty(trim(htmlspecialchars($_POST["password"])))){
			$password_err = "Please enter your password.";
		} else{
			$password = trim(htmlspecialchars($_POST["password"]));
		}
		
	
		if(empty($username_err) && empty($password_err)){
			$sql = "SELECT username, password FROM users WHERE username = ?";
			
			if($stmt = $conn->prepare($sql)){
				$stmt->bind_param("s", $param_username);
				
				$param_username = $username;
				
				if($stmt->execute()){
					$stmt->store_result();
					
					if($stmt->num_rows == 1){                    
						$stmt->bind_result($username, $hashed_password);
						if($stmt->fetch()){
							
							if(password_verify($password, $hashed_password)){
								session_start();
								
								$_SESSION["loggedin"] = true;
								$_SESSION["username"] = $username; 

	                                 if($_POST["remember"]=='1' || $_POST["remember"]=='on'){
										$hour = time() + 3600 * 24 * 30;
										setcookie('username', $username, $hour);
										setcookie('password', $password, $hour);
												
										}

										
									 if($_POST["remember"]!='1' || $_POST["remember"]!='on' && !empty($_COOKIE['username'])&& !empty($_COOKIE['password'])){
										
										setcookie('username',"", time() - 3600 * 24 * 30, "/", "", 0);
		                                setcookie('password', "", time() - 3600 * 24 * 30, "/", "", 0);
										}
										
							
								
								header("location: index.php");
									
							} else{
								$password_err = "The password you entered was not valid.";
							}
						}
					} else{
						$username_err = "No account found with this username.";
					}
				} else{
					echo "Oops! Something went wrong. Please try again later.";
				}
			}
			
			$stmt->close();
		}
		
		
		$conn->close();
}

 ?>

		
	
			 
			
				
		
	
<!DOCTYPE html>
<html lang="en">


	<style> 
	#size{width:150px; height:150px;}
	
	#bg-image-2 {
	background-color: rgb(70, 90, 40);
	background-image: url(poor2.jpg);
	}
    #bg-image-2 {
	background-repeat: no-repeat;
	background-position: center center;
	background-attachment: fixed;	
}
    #bg-image-2 { background-size: cover; }
	
	</style>
	
  <head>
    <meta charset="utf-8">
	  <title>Contact</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  

	<link rel="stylesheet" href="styles/stylem.css">


	
  </head>
  <body id="bg-image-2">
    	<div class="container">
		<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand"><img class="logo-img" src="images/logo1.png" width="50" height="70" ALIGN=CENTER></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php" >HOME</a></li>
				<li><a href="about_us.php">ABOUT US</a></li>
				<li><a href="donate.php" >DONATE</a></li>
				<li><a href="contact.php" >CONTACT</a></li>
				<li><a href="blog1.php">BLOG</a></li>
				<li><a href="gallery.php">GALLERY</a></li>
				<li><a href="event.php">EVENT</a></li>
		
				 
				 
             <?php if (isset($_SESSION['username']) || !empty($_SESSION['username'])) { ?>
			      <a  style="font-size:10px;" href="logout.php" id="logout" class="btn btn-default">Hi,<?php echo htmlspecialchars($_SESSION['username']); ?><br><br><span class="glyphicon glyphicon-log-out"></span> Log out</a>
                          
             <?php } else { ?>
        
                     <a  href="login.php" id="login" class="btn btn-default"><span  class="glyphicon glyphicon-log-in"></span> Log in</a> 
                     <?php } ?>
          
			   
			   
			</ul>
		</div>
	</div>
</div>	





	



	<div class="container">
		<div class="col-md-12">				
					<div class="col-md-12 " >	
          <div class="form-horizontal login-form-2" >		
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<div class="row">
					<div class="col-md-12">
						<h1>Login </h1>
					</div>
				</div>
				<div class="row">
					<div class="signin col-md-12">
				        <div class="form-group">
				          <div class="col-md-12">		          	
				            <label for="username" class="control-label">Username:</label>
				            <div class="input-icon-container <?php echo (empty($username_err)) ? '': 'has-error'; ?>">
				            	<i class="fa fa-user"></i>
				            	<input type="text" class="form-control" id="username" placeholder="Username" value="<?php echo $username; ?>" name="username">
								<span class="help-block"><?php echo $username_err; ?></span>
				            </div>		            		            		            
				          </div>              
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				            <label for="password" class="control-label">Password:</label>
				            <div class="input-icon-container <?php echo (empty($password_err)) ? '': 'has-error'; ?>">
				            	<i class="fa fa-lock"></i>
				            	<input type="password" class="form-control" id="password" placeholder="  Password" name="password">
								<span class="help-block"><?php echo $password_err; ?></span>
				            </div>
				          </div>
				        </div>
						 <div class="form-group">
				          <div class="col-md-12">
				            <div class="checkbox">
				                <label>
				                  <input type="checkbox" name="remember"> Remember me
				                </label>
				            </div>
				          </div>
				        </div>
				        
				        <div class="form-group">
				          <div class="col-md-12">
				            <input type="submit" value="LOG IN" class="btn btn-warning">
				          </div>
				        </div>
					
					
					</div>
				
					</div>   
				
			
		      </form>	
			  	<form action="create_account.php">
				      <div class="form-group">
				          <div class="col-md-12">
						    <h6><i class="fa fa-exclamation-circle"></i>  Don't have an account? <h6>
				            <input type="submit" value="Sign up" class="btn btn-warning">
				          </div>
				     </div>
				</form>
            </div> 			  
		</div>
                	</div>
				</div>		
		    






<footer>

	<div class="container">

		<div class="row">

        

			<div class="col-md-6 col-sm-4">

				<img src="images/logo1.png" class="img-responsive" alt="logo" width="50" height="70">

				<p>I DONATE is a non-profit organization intended to improve society and help people in need, because" giving is not just about making a donation, it's about making a difference."</p>

				<p><i class="fa fa-phone"></i> 2080245</p>

				<p><a href="mailto:info@idonate.com"><i class="fa fa-envelope-o"></i> info@idonate.com</a></p>

			</div>



			

            

		<div id="poll">
			<h3 style="text-shadow: 2px 5px  12px white; padding-bottom:0;">Rate our website?</h3>
			<form>
				<br> 
				<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
				Very poor
				
				<br> 
				<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
				Poor
				
				<br> 
				<input type="radio" name="vote" value="2" onclick="getVote(this.value)">
				Ok
				<br> 
				<input type="radio" name="vote" value="3" onclick="getVote(this.value)">
				 Good
				<br>
				<input type="radio" name="vote" value="4" onclick="getVote(this.value)">
				 Very good
				
			</form>
		</div>

            

		</div>

	</div>

</footer>



<!-- copyright section -->

<div class="copyright">

	<div class="container">

		<div class="row">

			<div class="col-md-6 col-sm-6">

						<p style="color:black;">Made in SE371(Software Engineering)term-181.<br>Developers: shahed alkharsa, Einas kharsa, Albatool Katrangi. <br>Our instructor: Ms.Israt khan. </p>

			</div>

			<div class="col-md-6 col-sm-6">

				<ul class="social-icons">

					<li><a href="https://www.facebook.com/pg/Idonate-2152480181526063/about/?ref=page_internal" class="fa fa-facebook"></a></li>

					<li><a href="https://twitter.com/idonate2" class="fa fa-twitter"></a></li>

					<li><a href="mailto:info@idonate.com" class="fa fa-envelope-o"></a></li>

				</ul>

			</div>

		</div>

	</div>

</div>

	
</body>
  
  
  
</html>