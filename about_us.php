<?php

session_start();
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
	  <title>About Us</title>
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
				<li><a href="index.php"  >HOME</a></li>
				<li><a href="#" class="active">ABOUT US</a></li>
				<li><a href="donate.php" >DONATE</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="blog1.php"  >BLOG</a></li>
				<li><a href="gallery.php">GALLERY</a></li>
		        <li><a href="events.php" >EVENTS</a></li>
		
				 
				 
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
						
			<div class="form-horizontal contact-form-1" >
			<div class="row mt30">	
				<div class="col-md-4 col-sm-4 col-xs-9">
				<div class="team-wrapper">
				
					<h3 style="color: #E74C3C;">MISSION</h3>
					<p>Working Together to Transform Lives to underprivileged.</p>
					<br><br><br><br><br><br><br>
				</div>
			</div>
				
				
				<div class="col-md-8 col-sm-4 col-xs-9">
				<div class="team-wrapper">
					
					<h3 style="color: #E74C3C;">VISION</h3>
					
					<p>1- To raise awareness in many ways such as, pets’ overpopulation, disabled people, and orphan children.<br>         
                       2- To encourage the supporters (individuals, organization, companies) to help unprivileged parts of the society.<br>  
                       3- To improve the communication between the supporters & the needed people.<br>  
                       4- To let the supporters feel satisfied about helping others.<br>  
                       5- To Increase Average monthly donations.
                    </p>
				</div>
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