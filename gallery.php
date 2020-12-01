<?php



	session_start();

 ?>

		
	
			 
			
				
		
	
<!DOCTYPE html>
<html lang="en">


	<style> 
	
	#myCarousel{height: auto; width: auto; overflow: hidden;}
	
	#carousel-inner{width:100%; height: 500px !important;}
	
	.size{height:auto;
	object-fit:cover;
    object-position:center;}
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
	  <title>Gallery</title>
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
				<li><a href=""  class="active">GALLERY</a></li>
				<li><a href="events.php"  >EVENTS</a></li>
		
				 
				 
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
		<div class="col-md-12" style="padding:0px;">				
			<div class="form-horizontal contact-form-1" >
				
				<h1 style="font-family:Trajan Pro; text-align:center;">we help, to see smiles !</h1>
			<p style="color: lightgrey; font-family:Trajan Pro; margin-bottom:0px; text-align:center; ">"You have not lived today until you have done something for someone who can never repay you."<br>
						-John Bunyan
						</P>
			
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
	           
				<div class="carousel-inner" >
					

					<div class="item active" >
						<img class="size" src="images/ed1.jpg" alt="education"  style="width:600px; height:500px">
					</div>
				
					<div class="item">
						<img class="size"  src="images/ed2.jpg" alt="education"  style="width:600px; height:500px">
						    
					</div>
					
					<div class="item">
						<img class="size"  src="images/dis2.jpg" alt=""  style="width:600px; height:500px">
						    
					</div>
					
					<div class="item">
						<img class="size"  src="images/old.jpg" alt="1"    style="width:600px; height:500px">
						    
					</div>
					
					<div class="item">
						<img class="size" src="images/old2.jpg" alt="education"   style="width:600px; height:500px">
						    
					</div>
					
					<div class="item">
						<img class="size" src="images/old3.jpg" alt="education"  style="width:600px; height:500px">
						    
					</div>
					<div class="item">
						<img class="size" src="images/or2.jpg" alt="education"    style="width:600px; height:500px">
						    
					</div>
					<div class="item">
						<img class="size"  src="images/pet4.jpg" alt="education"   style="width:600px; height:500px">
						    
					</div>
					<div class="item">
						<img class="size" src="images/pet3.jpg" alt="education"      style="width:600px; height:500px">
						    
					</div>
					<div class="item">
						<img class="size" src="images/or.jpg" alt="education"         style="width:600px; height:500px">
						    
					</div>
					<div class="size" class="or4.jpg" alt="education">
						    
					</div>
					
				</div>
				
				<ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
				   <li data-target="#myCarousel" data-slide-to="3"></li>
				    <li data-target="#myCarousel" data-slide-to="4"></li>
					 <li data-target="#myCarousel" data-slide-to="5"></li>
					 <li data-target="#myCarousel" data-slide-to="6"></li>
					 <li data-target="#myCarousel" data-slide-to="7"></li>
					 <li data-target="#myCarousel" data-slide-to="8"></li>
					 <li data-target="#myCarousel" data-slide-to="9"></li>
					 <li data-target="#myCarousel" data-slide-to="10"></li>
				</ol>

			
			
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
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