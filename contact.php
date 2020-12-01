<?php
$name=$visitor_email= $message= $email_subject="";
$name_err=$visitor_email_err= $message_err= $email_subject_err="";


	session_start();
	
if($_SERVER["REQUEST_METHOD"] == "POST"){
	

	
	 if(empty(trim(htmlspecialchars($_POST['name'])))){
			$name_err= "Please enter your name.";     
		} else{
			$name= trim(htmlspecialchars($_POST['name']));
		}
		
		if(empty(trim(htmlspecialchars($_POST["email"])))){
			$visitor_email_err= "Please enter your email.";     
		} else{
			$visitor_email= trim(htmlspecialchars($_POST["email"]));
		}
		
		if(empty(trim(htmlspecialchars($_POST["message"])))){
			$message_err = "Please enter your message.";     
		} else{
			$message= trim(htmlspecialchars($_POST["message"]));
		}
		
		if(empty(trim(htmlspecialchars($_POST["subject"])))){
			$email_subject_err= "Please enter the subject.";     
		} else{
			$email_subject= trim(htmlspecialchars($_POST["subject"]));
		}
					
			 if(empty($name_err) && empty($visitor_email_err) && empty($message_err )&& empty($email_subject_err)){
			 $name = htmlspecialchars($_POST['name']);
			 $visitor_email = htmlspecialchars($_POST['email']);
			 $message = htmlspecialchars($_POST['message']);
			 $email_from = 'shahed1998k@gmail.com';
			 $email_subject = htmlspecialchars($_POST['subject']);
			 $email_body = "You have received a new message from the user $name.\n"."Here is the message:\n $message";
			 $to = "shahed1998k@gmail.com";
			 $headers = "From: $email_from \r\n";
			 $headers .= "Reply-To: $visitor_email \r\n";
			 mail($to,$email_subject,$email_body,$headers);}


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
				<li><a href="" class="active">CONTACT</a></li>
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
			<form class="form-horizontal contact-form-1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post">
				
				<div class="form-group ">
					<div class="col-md-12">
						<h1 class="margin-bottom-15">Contact</h1>
					
					</div>
				</div>				
		        <div class="form-group">
		          <div class="col-md-12">		          	
		            <label for="name" class="control-label">Name *</label>
		            <div class="input-icon-container <?php echo (empty($name_err)) ? '' : 'has-error' ; ?>">
		            	<i class="fa fa-user"></i>
		            	<input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo $name; ?>">
						<span class="help-block"><?php echo $name_err; ?></span>
		            </div>		            		            		            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="email" class="control-label">Email *</label>
		            <div class="input-icon-container <?php echo (empty($visitor_email_err)) ? '' : 'has-error' ; ?>">
		            	<i class="fa fa-envelope-o"></i>
		            	<input type="email" class="form-control" id="email" placeholder="" name="email" value="<?php echo  $visitor_email; ?>">
						<span class="help-block"><?php echo $visitor_email_err; ?></span>
		            </div>
		          </div>
		        </div>
		        
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="subject" class="control-label">Subject *</label>
		            <div class="input-icon-container <?php echo (empty($email_subject_err)) ? '' : 'has-error' ; ?>">
		            	<i class="fa fa-info-circle"></i>
		            	<input type="text" class="form-control" id="subject" placeholder="" name="subject" value="<?php echo $email_subject; ?>">
						<span class="help-block"><?php echo $email_subject_err; ?></span>
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <label for="message" class="control-label">Message *</label>
		            <div class="input-icon-container <?php echo (empty($message_err)) ? '' : 'has-error' ; ?>">
		            	<i class="fa fa-pencil-square-o"></i>
		            	<textarea rows="8" cols="50" class="form-control" id="message" placeholder="" name="message" value="<?php echo $message; ?>"></textarea>
						<span class="help-block"><?php echo $message_err; ?></span>
		            </div>
		          </div>
		        </div>
		       
		        <div class="form-group">
		          <div class="col-md-12">
		            <input type="submit" value="Send message" class="btn btn-warning pull-right">
		          </div>
		        </div>	
				       </form>	
        
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

		<script>
			function getVote(int) {
			  if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			  } else {  // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  xmlhttp.onreadystatechange=function() {
				if (this.readyState==4 && this.status==200) {
				  document.getElementById("poll").innerHTML=this.responseText;
				}
			  }
			  xmlhttp.open("GET","voting.php?vote="+int,true);
			  xmlhttp.send();
			}
		</script>
</body>
  
  
  
</html>