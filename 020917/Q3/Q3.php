<!--
Michael Masterson
http://people.emich.edu/mmaster8/COSC436/020917/Q3/Q3.php
COSC 436
Assignment 02/09/17
Winter 2017
Problem 3

See for what assignment is :
http://emunix.emich.edu/~haynes/436/wi17/Assignment/hw0209.txt
-->

<!--Some code used from http://docstore.mik.ua/orelly/webprog/pcook/ch04_22.htm -->
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
<div class="gloomy"> Feb 9 2017: Question 3</div>
</head>
	<body>
		<center>
	  <?php
		//arrays for suits and faces
		$suits = array('Clubs', 'Diamonds', 'Hearts', 'Spades');
		$cards = array('Ace',9, 10, 'Jack', 'Queen', 'King');

		//shuffle array
		$deck = pc_array_shuffle(range(0, 20));

		//algoritmn to shuffle
		while (($draw = array_pop($deck)) != NULL)
		{
		print  $cards[$draw / 4] . ' of ' . $suits[$draw % 4] . "\n";
		}
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
