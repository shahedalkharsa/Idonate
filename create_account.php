<?php
 session_start();
	 
	
	if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
		header("location: index.php");
		exit;
	}
	
    require_once "conn.php";
    
	 
	$first_name=$last_name=$email=$username = $password = $confirm_password = "";
	$first_name_err=$last_name_err=$email_err=$username_err = $password_err = $confirm_password_err = "";
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{ 
        if(empty(trim(htmlspecialchars($_POST["first_name"])))){
			$first_name_err = "Please enter the first name.";     
		} else{
			$first_name = trim(htmlspecialchars($_POST["first_name"]));
		}
		
		if(empty(trim(htmlspecialchars($_POST["last_name"])))){
			$last_name_err = "Please enter the last name.";     
		} else{
			$last_name = trim(htmlspecialchars($_POST["last_name"]));
		}
		
		if(empty(trim(htmlspecialchars($_POST["email"])))){
			$email_err = "Please enter the email.";     
		} else{
			$email = trim(htmlspecialchars($_POST["email"]));
		}
					
		
        if(empty(trim(htmlspecialchars($_POST["username"])))){
			$username_err = "Please enter a username.";
		} else{
			
			$sql = "SELECT username FROM users WHERE username = ?";
			
			if($stmt = $conn->prepare($sql)){
				
				$stmt->bind_param("s", $param_username);
				
				
				$param_username = trim(htmlspecialchars($_POST["username"]));
				

				if($stmt->execute()){
					
					$stmt->store_result();
					
					if($stmt->num_rows == 1){
						$username_err = "This username is already taken.";
					} else{
						$username = trim(htmlspecialchars($_POST["username"]));
					}
				} else{
					echo "Oops! Something went wrong. Please try again later.";
				}
			}
			 
			
			$stmt->close();
		}
		
		
		if(empty(trim(htmlspecialchars($_POST["password"])))){
			$password_err = "Please enter a password.";     
		}elseif(!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',trim(htmlspecialchars($_POST["password"])))){
			$password_err = "Password must have one special charachtar, one uppercase letter,one lowercase letter ,one digit, and the length should be 8-20";
		}
		else{
			$password = trim(htmlspecialchars($_POST["password"]));
		}
		
	
		if(empty(trim(htmlspecialchars($_POST["confirm_password"])))){
			$confirm_password_err = "Please confirm password.";     
		} else{
			$confirm_password = trim(htmlspecialchars($_POST["confirm_password"]));
			if(empty($password_err) && ($password != $confirm_password)){
				$confirm_password_err = "Password did not match.";
			}
		}
		
	
		if(empty($username_err) && empty($password_err) && empty($confirm_password_err)&& empty($email_err)&& empty($last_name_err)&& empty($first_name_err))
		{
			
					$sql = "INSERT INTO users (first_name,last_name,email,username, password) VALUES (?, ?, ?, ?, ?)";
			 
			if($stmt = $conn->prepare($sql)){
			
					
				$stmt->bind_param("sssss",$param_first_name, $param_last_name,$param_email,$param_username, $param_password);

				
				$param_first_name=mysqli_real_escape_string($conn,$first_name);
				$param_last_name=mysqli_real_escape_string($conn,$last_name);
				$param_email=mysqli_real_escape_string($conn,$email);
				$param_username = mysqli_real_escape_string($conn,$username);
				$param_password = mysqli_real_escape_string($conn,password_hash($password, PASSWORD_DEFAULT));
				
				
	
				if($stmt->execute()){
					header("location:login.php");
				} else{
					echo "Something went wrong. Please try again later.";
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
				<div class="col-md-12">	
             <div class="form-horizontal contact-form-1" >		
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<div class="form-group">
					<div class="col-md-12">
						<h1 class="margin-bottom-15">Create Account:</h1>
					</div>
				</div>
                <div class="form-group">
			        <div class="col-md-6 ">
			             <label for="fname" class="control-label">First Name:</label>
		              <div class="input-icon-container <?php echo (empty($first_name_err)) ? '' : 'has-error' ;?>">
		            	<i class="fa fa-user"></i>
		            	<input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" value="<?php echo $first_name; ?>">
						 <span class="help-block"><?php echo $first_name_err; ?></span>
		              </div>	
		            </div>
			         
			          <div class="col-md-6 ">
			             <label for="last_name" class="control-label">Last Name:</label>
		               <div class="input-icon-container <?php echo (empty($last_name_err)) ? '' : 'has-error' ;?>">
		            	<i class="fa fa-user"></i>
		            	<input type="text" class="form-control" id="last_name" placeholder="Last name" name="last_name" value="<?php echo $last_name; ?>" >
						   <span class="help-block"><?php echo $last_name_err; ?></span>
		               </div>
					 
		            </div>
			    </div> 
			   			
		   
				
		        <div class="form-group ">
		          <div class="col-md-12">
		            <label for="email" class="control-label">Email:</label>
		            <div class="input-icon-container <?php echo (empty($email_err)) ? '' : 'has-error' ;?>">
		            	<i class="fa fa-envelope-o"></i>
		            	<input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email" value="<?php echo $email; ?>">
						<span class="help-block"><?php echo $email_err; ?></span>
		            </div>
		
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="username" class="control-label">User Name </label>
		            <div class="input-icon-container  <?php echo (empty($username_err)) ? '' : 'has-error' ;?>">
		            	<i class="fa fa-user"></i>
		            	<input type="text" class="form-control" id="username" placeholder="User Name" name="username" value="<?php echo $username; ?>">
					    <span class="help-block"><?php echo $username_err; ?></span>
		            </div>
		          </div>
		        </div>
				<div class="form-group">
			          <div class="col-md-6 ">
			            <label for="password" class="control-label">Password </label>
		             <div class="input-icon-container <?php echo (empty($password_err)) ? '' : 'has-error' ;?>">
		            	<i class="fa fa-key"></i>
		            	<input type="Password" class="form-control" id="password" placeholder="Password" name="password" >
						<span class="help-block"><?php echo $password_err; ?></span>
		            </div>
					 
			          </div>
			          <div class="col-md-6 ">
			             <label for="confirm_password" class="control-label">Confirm Password </label>
		             <div class="input-icon-container <?php echo (empty($confirm_password_err)) ? '' : 'has-error' ;?>">
		            	<i class="fa fa-key"></i>
		            	<input type="Password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password">
						 <span class="help-block"><?php echo $confirm_password_err; ?></span>
		            </div>
			          </div>
			    </div>
		        
		       
		        <div class="form-group">
				          <div class="col-md-12">
				            <input type="submit" value="Create Account" class="btn btn-warning">
				          </div>
				</div>
			
                	
		      </form>	
			  
			  	<form action="login.php">
				      <div class="form-group">
				          <div class="col-md-12">
						    <h6><i class="fa fa-exclamation-circle"></i>  you already have an account<h6>
				            <input type="submit" value="Log In" class="btn btn-warning">
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