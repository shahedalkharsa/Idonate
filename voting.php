	<?php
	
		$vote = $_REQUEST['vote'];

		//
		//The file() reads a file into an array so we are getting textfile content of 
		$filename = "voting.txt";
		$myArray = file($filename);

		/*  The explode() function breaks a string into an array put content in array
				explode(separator,string)
				separator	Required. Specifies where to break the string
				string	Required. The string to split */	
		
		$array = explode("||", $myArray[0]);
		$one = $array[0];
		$two = $array[1];
		$three = $array[2];
		$four = $array[3];
		$five = $array[4];

		if ($vote == 0) {
		  $one = $one + 1;
		}
		if ($vote == 1) {
		  $two = $two + 1;
		}
				if ($vote == 2) {
		  $three = $three + 1;
		}
		
		if ($vote == 3) {
		  $four = $four + 1;
		}
		
       if ($vote == 4) {
		  $five = $five + 1;
		}
		
	
		$insertvote = $one."||".$two."||".$three."||".$four."||".$five;
		$fp = fopen($filename,"w");
		fputs($fp,$insertvote);
		fclose($fp);
		
	?>
	
	<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  .size{height:20px;}
  </style>
  
    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	   </head>
  <body>
	  
	<h2 style="text-shadow: 2px 5px  12px white; color:white;  font-weight: bold; size=20px;">Result:</h2>
	<table>
		<tr>
			<td>Very poor</td>
			<td>
				<img class="size" src="images/poll2.gif"	width='<?php echo(100*round($one/($one+$two+$three+$four+$five),5)); ?>' height='20'>
				<?php echo(100*round($one/($one+$two+$three+$four+$five),5)); ?>%
			</td>
		</tr>
		<tr>
			<td> Poor</td>
			<td>
				<img class="size" src="images/poll3.gif"	width='<?php echo(100*round($two/($one+$two+$three+$four+$five),5)); ?>'>
				<?php echo(100*round($two/($one+$two+$three+$four+$five),5)); ?>%
			</td>
		</tr>
				<tr>
			<td>Ok</td>
			<td>
				<img class="size" src="images/poll4.gif"	width='<?php echo(100*round($three/($one+$two+$three+$four+$five),5)); ?>'>
				<?php echo(100*round($three/($one+$two+$three+$four+$five),5)); ?>%
			</td>
		</tr>
				<tr>
			<td>	Very good</td>
			<td>
				<img class="size" src="images/poll.gif"	width='<?php echo(100*round($four/($one+$two+$three+$four+$five),5)); ?>'>
				<?php echo(100*round($four/($one+$two+$three+$four+$five),5)); ?>%
			</td>
		</tr>
				<tr>
			<td>Good</td>
			<td>
				<img class="size" src="images/poll6.gif"	width='<?php echo(100*round($five/($one+$two+$three+$four+$five),5)); ?>' height='20'>
				<?php echo(100*round($five/($one+$two+$three+$four+$five),5)); ?>%
			</td>
		</tr>
	</table>
	
	</body>