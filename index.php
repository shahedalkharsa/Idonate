<?php  

session_start();

	  
require_once "conn.php";


  
$result =$conn->query('SELECT SUM(money) AS value_sum FROM donate'); 
$row = $result->fetch_array(MYSQLI_ASSOC);
$sum = $row['value_sum'];

$result1 =$conn->query('SELECT COUNT(username) FROM users'); 
$row1 = $result1->fetch_array(MYSQLI_ASSOC);
$count = $row1['COUNT(username)'];



	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title>Home</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  
	  
    
	<link rel="stylesheet" href="styles/style-main.css">
	<link rel="stylesheet" href="styles/PopUpStyle.css">


	
  </head>
  <style>
  
  #home {
  background: url('poor1.jpg') no-repeat;
  background-size: cover;
  background-position: center;
  min-height: 500px;
  padding-top: 180px;
  padding-bottom: 100px;
}
#home h1,
#home h3 {
  line-height: 30px;
  font-size: 40px;
  text-shadow:-10px 4px 9px black;
}
  </style>
  <body>    	<div class="container">
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
				<li><a href="#"  class="active">HOME</a></li>
				<li><a href="about_us.php">ABOUT US</a></li>
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


<div id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-3">
			<h1>Doing Nothing is</h1>
			<h1>NOT An Option of 
			<h1 style="text-align:center">Our Life</h1>
			</div>
			<div class="col-md-7 col-sm-9">
				
			</div>
		</div>
	</div>
</div>

<div class="divider">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="divider-wrapper divider-one">
					<i class="fa fa-laptop"></i>
					<h2>Donate Money</h2>
					
						         <p>Participate in making someone's life better</p>
					 <a href="donate.php" id="" class="btn btn-lg"> Donate Money
               </a>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="divider-wrapper divider-two">
					<i class="fa fa-money"></i>
					<h3 style="text-align: left;">Donating total: <span style="color:black; font-size:50px;"><?php echo $sum;?></span><span style="color:black;" >SR</span></h3>
 	                <h3 style="text-align: left;">Number of Donors: 	<span style="color:black; font-size:50px;"><?php echo $count; ?></span> </h3> 
				
		
				</div>
			</div>
			
		</div>
	</div>
</div>  


<div id="portfolio">
	<div class="container">
		   <h2>Donating Categories</h2>
         
         <div class="row mt30">
		  	<div class="col-sm-6 col-md-4"> 
				<div class="thumbnail" style="background-color:#17A589;"> 
				  <img src="images/education.jpg" alt="Generic placeholder thumbnail"> 
					<div class="caption"> <h3 id="pop0">Education</h3>
<div id="desc0" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Better education is very necessary for all to go ahead in the life and get success. 
It develops confidence and helps building personality of a person. School education 
plays a great role in everyoneâ€™s life. The whole education has been divided into three 
divisions such as the primary education, secondary education and Higher Secondary education.
All the divisions of education have their own importance and benefits. Primary education
prepares the base which helps throughout the life, secondary education prepares the path for 
further study and higher secondary education prepares the ultimate path of the future and whole
life.Our good or bad education decides that which type of person we would in the future.
</p>
  </div>
</div>

						
						
						
					</div> 
				</div> 
			</div>
			<div class="col-sm-6 col-md-4"> 
				<div class="thumbnail" style="background-color:#CB4335  ;"> 
					<img src="images/orphans.jpg" alt="Generic thumbnail"> 
					<div class="caption"> 
					<h3 id="pop1">Orphans</h3>


<div id="desc1" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    <p>An orphan as a child under 18 years of age who has lost one or both parents to any cause of death. 
By this definition, there were nearly 140 million orphans globally in 2015, including 61 million in Asia,
 52 million in Africa, 10 million in Latin America and the Caribbean, and 7.3 million in Eastern Europe 
 and Central Asia. This large figure represents not only children who have lost both parents, but also 
 those who have lost a father but have a surviving mother or have lost their mother but have a surviving 
 father. An orphan is a child who has one or two deceased parents.Of the nearly 140 million children classified 
 as orphans, 15.1 million have lost both parents. Evidence clearly shows that the vast majority of orphans are 
 living with a surviving parent grandparent, or other family member. 95 per cent of all orphans are over the age of five.</p>
  </div>
</div>
					</div> 
				</div> 
			</div> 
            	<div class="col-sm-6 col-md-4"> 
				<div class="thumbnail" style="background-color:#D4AC0D  ;"> 
					<img src="images/health.jpg" alt="Generic placeholder thumbnail"> 
					<div class="caption"> 
				
<h3 id="pop2">Health</h3><div id="desc2" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    <p>                 <p>Donating blood is an active way of helping others and the whole of society.
					For you, it's just a few moments out of your day but for patients in need, it may save their life.
					Idonate staff are on hand at all times during the donation, which is a simple, safe and painless procedure. There is no risk for donors of giving blood, and it will help the patients in need. Despite medical and technological advances, blood cannot currently be made. The only way of getting hold of it is via blood donations from people who give blood. </p>
  </div>

</div>



						
					</div> 
				</div> 
			</div>
				<div class="col-sm-6 col-md-2"> </div>
			<div class="col-sm-6 col-md-4"> 
				<div class="thumbnail" style="background-color:#2874A6;"> 
					<img src="images/pet.jpeg" alt="Generic thumbnail"> 
					<div class="caption"> 
<h3 id="pop3">Pets</h3>
<div id="desc3" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Pets are part of our everyday lives and part of our families. They provide us with companionship but also with 
emotional support, reduce our stress levels, sense of loneliness and help us to increase our social activities
 and add to a child’s self-esteem and positive emotional development. In return, as the responsibleones in the 
 society, we need to ensure that animals are kept healthy, fit, get nutritious food, love and affection and proper 
 housing and care.</p>
  </div>

</div>
				
					
						
						
					</div> 
				</div> 
			</div> 
			<div class="col-sm-6 col-md-4"> 
				<div class="thumbnail " style="background-color:#E67E22;"> 
					<img src="images/disablties.jpg" alt="Generic thumbnail"> 
					<div class="caption"> 
				
	<h3 id="pop4">Disablties</h3>
<div id="desc4" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    <p>People with disabilities are among the most marginalized groups in the world. People with disabilities have poorer health 
outcomes, lower education achievements, less economic participation and higher rates of poverty than people without disabilities.
Disability is now understood to be a human rights issue. People are disabled by society, not just by their bodies. These barriers 
can be overcome, if governments, nongovernmental organizations, professionals and people with disabilities and their families 
work together.
</p>
  </div>

</div>		
						

						
					</div> 
				</div> 
			</div> 
			<div class="col-sm-6 col-md-2"> </div>
			
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
					<li><a href="https://twitter.com/idonate2
" class="fa fa-twitter"></a></li>
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
<script>
var description0 = document.getElementById('desc0');
var popup0 = document.getElementById("pop0");
var span0 = document.getElementsByClassName("close")[0];
popup0.onclick = function() {
  description0.style.display = "block";
}
span0.onclick = function() {
  description0.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    description0.style.display = "none";}
}
</script> 


<script>
var description1 = document.getElementById('desc1');
var popup1 = document.getElementById("pop1");
var span1 = document.getElementsByClassName("close")[1];
popup1.onclick = function() {
  description1.style.display = "block";
}


span1.onclick = function() {
  description1.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    description1.style.display = "none";
  }
}
</script>

<script>
var description2 = document.getElementById('desc2');
var popup2 = document.getElementById("pop2");
var span2 = document.getElementsByClassName("close")[2];
popup2.onclick = function() {
  description2.style.display = "block";
}


span2.onclick = function() {
  description2.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    description2.style.display = "none";
  }
}
</script> 

<script>
var description3 = document.getElementById('desc3');
var popup3 = document.getElementById("pop3");
var span3 = document.getElementsByClassName("close")[3];
popup3.onclick = function() {
  description3.style.display = "block";
}


span3.onclick = function() {
  description3.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    description3.style.display = "none";
  }
}
</script>



<script>
var description4 = document.getElementById('desc4');
var popup4 = document.getElementById("pop4");
var span4 = document.getElementsByClassName("close")[4];
popup4.onclick = function() {
  description4.style.display = "block";
}


span4.onclick = function() {
  description4.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    description4.style.display = "none";
  }
}
</script>

  </body>
  </html>
<?php

 $result->close();
 $result1->close();
  $conn->close();
  
  ?>