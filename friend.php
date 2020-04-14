<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
require_once ('RandomUser.php');
require_once ('RandomQuote.php');
require_once ('RandomJoke.php');

//Display Friend
if (isset($_POST['submit'])){ 
//Get values from the form
$genderOpt= $_POST['gender'];
$nationalityOpt = $_POST['nationality'];
//New instance of Random User Class
$s = new RandomUser();
//pass the parameters
$sb = $s->ShowUser($nationalityOpt,$genderOpt);

//Assign value to variables
$results= $sb['results'];
$gender= $results[0]['gender'];
$fname = $results[0]['name']['first'];
$lname = $results[0]['name']['last'];
$image = $results[0]['picture']['large'];
$city = $results[0]['location']['city'];
$state = $results[0]['location']['state'];
$nationality = $results[0]['location']['country'];
$age = $results[0]['dob']['age'];
//Generate random quote
$r = new RandomQuote();
$rq=$r->ShowQuote();
$rqb=$rq['content'];

// Generate Random Joke
$j = new RandomJoke();
$joke = $j->ShowJoke();
$randJoke = $joke['joke'];

};



?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="style.css">
		<title>Document</title>
	</head>

	<body>

		<div class="wrapper">
				<div class="left">
					<div class="pic">
						<img src="<?=$image?>" class="userpic" alt="Photo of<?=$fname.' '.$lname?>">
					</div>
					<div class="name">
						<p><?=$fname.' '.$lname?></p>
					</div>

					<div class="job">
						<p><strong>Web Developer</strong></p>
					</div>
					<div class="userbuttons">
						<button type="button" onclick="saySmart()" class="btn">Say Something Smart</button>
						<button type="button" onclick="sayFunny()" class="btn">Say Something Funny</button>
						<button type="button"  class="btn"><a href="index.php">Choose A different Friend</a></button>
						<!-- <button id="ajax"></button> -->
					</div>
				</div>




				<div class="right">
					<div class="content">
						<p class="intro">Hello , my name is:<?= ' '.$fname. ' ' .$lname. ' I am from '.$city .' in '.$state.', '.$nationality?> </p>
						<div id="quote" class="saying" style="display:none"><p><?=$rqb?></p></div>
						<div id="joke" class="saying" style="display:none"><p><?=$randJoke?></p></div>
					</div>
				</div>
		</div>
		
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>		
			<script>
				function saySmart() {
					document.getElementById("quote").style.display = "block";
				}
				function sayFunny() {
					document.getElementById("joke").style.display = "block";
				}
			</script>
			<!-- Use ajax to get more quotes and jokes -->
			
			<!-- <script>
				$(document).ready(function(){
					$('#ajax').click(function(){
						$.ajax({
							type: 'GET', 
							url: 'RandomJoke.php',
							data: ''
						});//ajax call
					});//on button click
				});//document ready
			</script> -->
	</body>
</html>

