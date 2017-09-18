<!--
Michael Masterson
http://people.emich.edu/mmaster8/COSC436/020917/Q2/Q2.php
COSC 436
Assignment 02/09/17
Winter 2017
Problem 2

See for what assignment is :
http://emunix.emich.edu/~haynes/436/wi17/Assignment/hw0209.txt
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<title>020917</title>
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
<div class="gloomy"> Feb 9 2017: Question 2</div>
</head>
<body>
	<center>

		<?php
		//array for variables
		$main = array(
		 array("bat",5,3.50),
		 array("ball",4,0.50),
		 array("base",3,5.00),
		 array("umpire",2,10000.0),
		 array("player",4,5000.0)
	 );


	 //multiply items, add items, and display "total" on page
	 print"total: ";
	 function myfunction($num)
	 {
		 $sum = 0;
		 $a = 5;
		 $b = 4;
		 $c = 3;
		 $d = 2;
		 $e = 4;
		 $a1 = 3.50;
		 $b1 = .50;
		 $c1 = 5.00;
		 $d1 = 10000.0;
		 $e1 = 5000.0;

		return $sum = ($a*$a1)+($b*$b1)+($c*$c1)+($d*$d1)+($e*$e1);

	 }
	 ?>
	 <br />
	 <?php

	 //using array_map
	$a=array(1,2,3,4,5);
	print_r(array_map("myfunction",$a));
	?>
	<br />
	<?php

	//display array
		echo $main[0][0].": In stock: ".$main[0][1].", Price ".$main[0][2].".<br>";
		echo $main[1][0].": In stock: ".$main[1][1].", Price ".$main[1][2].".<br>";
		echo $main[2][0].": In stock: ".$main[2][1].", Price ".$main[2][2].".<br>";
		echo $main[3][0].": In stock: ".$main[3][1].", Price ".$main[3][2].".<br>";
		echo $main[4][0].": In stock: ".$main[4][1].", Price ".$main[4][2].".<br>";
?>

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
