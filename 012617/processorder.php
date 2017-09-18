<!--
Michael Masterson
http://people.emich.edu/mmaster8/COSC436/012617/processorder.php
COSC 436
Assignment 01/26/17
Winter 2017

See for what assignment is :
http://emunix.emich.edu/~haynes/436/wi17/Assignment/hw0126.txt
-->

<!-- Sites referenced:
http://www.w3schools.com/php/php_operators.asp
http://www.javascriptkit.com/howto/newtech2.shtml
http://www.w3schools.com/php/php_superglobals.asp
http://www.w3schools.com/php/php_echo_print.asp
-->

<!--this is the PHP code for processorder.php-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>012617</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="012617.css">
</head>
<body>
<!--Navigation bar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://people.emich.edu/mmaster8/">Michael EMU</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://people.emich.edu/mmaster8/">Home</a></li>
      <li><a href="http://people.emich.edu/mmaster8/Archives/">Archives</a></li>
      <li><a href="http://people.emich.edu/mmaster8/COSC436/">COSC 436</a></li>
      <li><a href="http://people.emich.edu/mmaster8/aboutme.html">About Me</a></li>
	  <!--Google Translate taken from Google's Free Website Translate Button creator: http://translate.google.com/manager/website/?hl=en-->
      <li><div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></li>
    </ul>
  </div>
</nav>
<div class="gloomy"> Program 01-26: Version 2. (Client and Server using PHP)</div>
</head>
<body>
	<center>
		<?php
	//grab all variables from html page
  $penquant = $_POST['penquant'];
  $pencilquant = $_POST['pencilquant'];
  $paperquant = $_POST['paperquant'];
  $staplerquant = $_POST['staplerquant'];
	?>

	<?php
	//display quantity of items and display them.
	print "Invoice of Items Ordered: <br />";
	print "Quantity  Name<br />";
	echo $penquant.' Pens<br>';
  echo $pencilquant.' Pencils<br>';
  echo $paperquant.' Papers<br>';
  echo $staplerquant.' Staplers<br>';
	?>
<br />
	<!--This is where the addition of each variable is added and summed up-->
	<?php
	$first_number = 2; // pens
	$second_number = 1; // pencils
	$third_number = 30; // paper
	$fourth_number = 50;// staplers
	$sum_total1 = $penquant * $first_number; // mult and store int of pens
	$sum_total2 = $pencilquant * $second_number; //mult and store int of pencils
	$sum_total3 = $paperquant * $third_number; //mult and store int of paper
	$sum_total4 = $staplerquant * $fourth_number; //mult and store int of stapler

	print "Total: $";
  echo $sum_total1 + $sum_total2 + $sum_total3 + $sum_total4; //add all sums for grand sum
  ?>
<br />
<form>
	<!--Button to print invoice-->
<input type="button" value="Print Invoice" onClick="window.print()">
</form>
</center>
</body>
<!--taken from Dr Hanyes website-->
<footer>
<h6 align="left"> Last changed:
   <script language="JavaScript" type="text/javascript">
     document.write(document.lastModified);
   </script>
</h6>
</footer>
</html>
