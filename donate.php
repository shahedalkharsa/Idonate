<?php
    	 		
	session_start();
	
	
		
	if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	  header("location: login.php");
	
	}


	require_once "conn.php";



		
	$username=$money=$where=$shop=$contact_num=$address1 = $address2 = $city =$country = $date=$time= "";
	$money_err=$where_err=$shop_err=$contact_num_err=$address1_err = $address2_err = $city_err =$country_err = $date_err =$time_err= "";
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{ 
        if(empty(trim(htmlspecialchars($_POST["money"])))){
			$money_err = "Please enter the amount of money.";     
		} else{
			$money = trim(htmlspecialchars($_POST["money"]));
		}
		
		if(empty(trim(htmlspecialchars($_POST["wheredonate"])))){
			$where_err = "Please choose one.";     
		} else{
			$where = trim(htmlspecialchars($_POST["wheredonate"]));
		}
		
		if(empty(htmlspecialchars($_POST["shop"]))){
			$shop_err = "Please choose one";     
		} else{
			$shop= htmlspecialchars($_POST["shop"]);
			$m = implode(", ",$shop);
		}
		
		
	
		
		if(empty(trim(htmlspecialchars($_POST["contact_num"])))){
			$contact_num_err = "Please enter the contact number.";     
		} else{
			$contact_num = trim(htmlspecialchars($_POST["contact_num"]));
		}
		
         if(empty(trim(htmlspecialchars($_POST["address1"])))){
		   $address1_err = "Please enter address1.";     
		} else{
			$address1 = trim(htmlspecialchars($_POST["address1"]));
		}
		
		if(empty(trim(htmlspecialchars($_POST["address2"])))){
			$address2_err = "Please enter address2";     
		} else{
			$address2 = trim(htmlspecialchars($_POST["address2"]));
		}
		
		if(empty(trim(htmlspecialchars($_POST["city"])))){
			$city_err = "Please choose the city.";     
		} else{
			$city= trim(htmlspecialchars($_POST["city"]));
		}
		
        if(empty(trim(htmlspecialchars($_POST["country"])))){
			$country_err = "Please choose country.";     
		} else{
			$country= trim(htmlspecialchars($_POST["country"]));
		}
		
		if(empty(trim(htmlspecialchars($_POST["date"])))){
			$date_err = "Please choose date.";     
		} else{
			$date= trim(htmlspecialchars($_POST["date"]));
		}		
		if(empty(trim(htmlspecialchars($_POST["time"])))){
			$time_err = "Please choose time.";     
		} else{
			$time= trim(htmlspecialchars($_POST["time"]));
		}		
	  
	     
		 
		 
		 
		if(empty($money_err) && empty($where_err) &&empty($shop_err)){
		
		
			$sql1 = "INSERT INTO donate (money,username,wheredonate,shop) VALUES (?, ?, ?, ?)";
			 
			if($stmt1 = $conn->prepare($sql1)){

					
				$stmt1->bind_param("ssss", $param_money, $param_username, $param_where, $param_shop);

				$param_username=$_SESSION['username'];
				$param_money=mysqli_real_escape_string($conn,$money);
			    $param_where=mysqli_real_escape_string($conn,$where);
				$param_shop=mysqli_real_escape_string($conn,$m);

				if($stmt1->execute()){
					header("location: index.php");
				} else{
					
				}
			}
			 	
		}
			
		
			
		  
		  
		if( empty($contact_num_err)&& empty($address1_err)&& empty($address2_err)&& empty($city_err)&& empty($country_err)&& empty($time_err)&&empty($date_err)){
		
		
			$sql = "INSERT INTO meeting (username,city,country,address1,address2,contact_num,time,date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
			 
			if($stmt = $conn->prepare($sql)){

					
				$stmt->bind_param("ssssssss",$param_username,$param_city,$param_country, $param_address1,$param_address2,$param_contact_num,$param_time,$param_date);

				$param_username=$_SESSION['username'];
				$param_contact_num=mysqli_real_escape_string($conn,$contact_num);
	            $param_address1=mysqli_real_escape_string($conn,$address1);
				$param_address2=mysqli_real_escape_string($conn,$address2);
				$param_city=mysqli_real_escape_string($conn,$city);
				$param_country=mysqli_real_escape_string($conn,$country);
			    $param_time=mysqli_real_escape_string($conn,$time);
				$param_date=mysqli_real_escape_string($conn,$date);

				if($stmt->execute()){
					echo "Thank you";
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
	<title>Donate</title>
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
				<li><a href="" class="active">DONATE</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="blog1.php">BLOG</a></li>
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
		<div class="col-md-12">				
			<form class="form-horizontal contact-form-1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post">
				<div class="form-group">
					<div class="col-md-12">
						<h1 class="margin-bottom-15">Donate:</h1>
					
					</div>
				</div>	
                <div class="form-group">
			        <div class="col-md-12 ">
			             <label for="money" class="control-label">Please enter your amount of money:</label>
		              <div class="input-icon-container <?php echo (empty($money_err)) ? '' : 'has-error' ;?>">
		            	<i class="fa fa-money"></i>
		            	<input type="text" class="form-control" id="money" placeholder=" 50 SR" name="money" value="<?php echo $money; ?>">
						<span class="help-block"><?php echo $money_err; ?></span>
		              </div>	
						 
		            </div>
			    </div> 
			   			
		   
				
		        <div class="form-group ">
		          <div class="col-md-12">
		            <label for="where" class="control-label">Where you want to donate:</label>
					
		      
						<select class="form-control" id="where" name="wheredonate" placeholder="choose one" size="1">
                        <option>Education</option>
                       <option>Disablties</option>
                       <option>Health</option>
					   <option>orphans</option>
                       <option>Pets</option>
                       </select>
		           
					 <span class="help-block"><?php echo $where_err; ?></span>
		          </div>
		        </div>
   
				
		   
				

               <div class="form-group ">
		          <div class="col-md-12">
		            <label for="shop" class="control-label">Help us to help other:</label>
					
		            <div class="input-icon-container <?php echo (empty($shop_err)) ? '' : 'has-error' ;?>">
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="checkbox-inline">
                      <label><input type="checkbox" name="shop[]" value="USB">USB (5 SR)</label>
                      </div>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="checkbox-inline">
                      <label><input type="checkbox" name="shop[]" value="Cup">Cup (10 SR)</label>
                      </div> &nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="checkbox-inline">
                      <label><input type="checkbox" name="shop[]" value="Bag">Bag (15 SR)</label>
                      </div>&nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="checkbox-inline">
                      <label><input type="checkbox" name="shop[]" value="Cover">Cover (20 SR)</label>
                      </div>
					    
					
						
		            	<i class="fa fa-icon-shop"></i>
						<div class="col-md-12 ">
						 <div class="col-md-3 ">
						
						<br>
						<img  id="size" src="images/usb.jpg" height="100px"  width="80px">
						</div>
						
						<div class="col-md-3 ">
                        
						<br>
					    <img id="size" src="images/cup.jpg">
						</div>
						
						<div class="col-md-3 ">
                       
						
						<br>
					    <img id="size"  src="images/bag.jpg">
						</div>
						
						<div class="col-md-3 ">
                      
						<br>
						   <img id="size" src="images/Cover.png">
					     </div>
						
					<span class="help-block"><?php echo $shop_err; ?></span>	
		            </div>
					 
		          </div>
		        </div>
			</div>
    

              <hr>
			  <br>
			  <h4>meeting details</h4><br>
			  
			  	
				<div class="form-group ">
		          <div class="col-md-12">
		            <label for="country" class="control-label">Country:</label>
					
		            <div class="input-icon-container <?php echo (empty($country_err)) ? '' : 'has-error' ;?>" size="1">
		            	<i class="fa fa-icon-country"></i>
						<select class="form-control" id="country" name="country" value="choose one" size="1">
						<option>Saudi Arabia</option>
                      
					    <span class="help-block"><?php echo $country_err; ?></span>
                       </select>
		            </div>
		          </div>
		        </div>
				
			       
		        <div class="form-group ">
		          <div class="col-md-12">
		            <label for="city" class="control-label">City:</label>
					
		            <div class="input-icon-container <?php echo (empty($city_err)) ? '' : 'has-error' ;?>">
		            	<i class="fa fa-icon-earth"></i>
						<select class="form-control" id="city" name="city" value="choose one" size="1">
                          <option>Riyadh</option>
                          <option>Jeddah</option>
						  <option>Abha</option>
                          <option>Dammam</option>
						  <option>Mecca</option>
                          <option>Medina</option>
                       </select>
					    <span class="help-block"><?php echo $city_err; ?></span>
		            </div>
					
		          </div>
		        </div>
			
			  
			    <div class="form-group">
			          <div class="col-md-12 ">
			            <label for="address1" class="control-label">Address 1: </label>
		             <div class="input-icon-container <?php echo (empty($address1_err)) ? '' : 'has-error' ;?>">
		            	<i class="fa fa-location-arrow"></i>
		            	<input type="text" class="form-control" id="address1" placeholder="address1" name="address1" value="<?php echo $address1; ?>">
						<span class="help-block"><?php echo $address1_err; ?></span>
		            </div>
			
			          </div>
			         
			    </div>
				
			    <div class="form-group">
			          <div class="col-md-12 ">
			            <label for="address2" class="control-label">Address 2: </label>
		             <div class="input-icon-container <?php echo (empty($address2_err)) ? '' : 'has-error' ;?>">
		            	<i class="fa fa-location-arrow"></i>
		            	<input type="text" class="form-control" id="address2" placeholder="address2" name="address2" value="<?php echo $address2; ?>">
						<span class="help-block"><?php echo $address2_err; ?></span>
		            </div>
			          </div>
			         
			    </div>
			  
			  	
				<div class="form-group">
		          <div class="col-md-12">
		            <label for="contact_num" class="control-label">contact number</label>
		            <div class="input-icon-container  <?php echo (empty($contact_num_err)) ? '' : 'has-error' ;?>">
		            	<i class="fa fa-phone"></i>
		            	<input type="tel" class="form-control" id="contact_num" placeholder="(###) ### - ###" name="contact_num" value="<?php echo $contact_num; ?>" >
						 <span class="help-block"><?php echo $contact_num_err; ?></span>
		            </div>
		          </div>
		        </div>
       
             <div class="form-group ">
		          <div class="col-md-12">
				      	<label for="date">Choose time:</label>
				  
		           
				<div class="input-icon-container <?php echo (empty($time_err)) ? '' : 'has-error' ;?>" size="1">
		            	<i class="fa fa-icon-calender"></i>
						<select class="form-control" id="time" name="time" value="choose one" size="1">
                        <option>8:00-12:00 AM</option>
                        <option>12:00-2:00 PM</option>
						<option>2:00-4:00 PM</option>
						<option>4:00-6:00 PM</option>
						<option>6:00-8:00 PM</option>
                       </select>
					   <span class="help-block"><?php echo $time_err; ?></span>
		            </div>
		          </div>
		        </div>
			
		        <div class="form-group ">
		          <div class="col-md-12">
				      	<label for="date">Choose a Date :</label>
				  
		           
					
		            <div class="input-icon-container <?php echo (empty($date_err)) ? '' : 'has-error' ;?>">
		            	<i class="fa fa-icon-date"></i>
						
							<input type="date" name="date" id="date" min="2019-04-08">
							 <span class="help-block"><?php echo $date_err; ?></span>
		            </div>
		          </div>
		        </div>
		   
		        <div class="form-group" style="color:black;">
				          <div class="col-md-12">
				            <input onclick="myFunction()" type="submit" value="Donate Now" class="btn btn-warning">
				          </div>
						

<script>
function myFunction() {
  alert("Thank you for Donating!");}
</script>


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