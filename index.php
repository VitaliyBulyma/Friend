<?php
require 'vendor/autoload.php';
require_once ('RandomUser.php');
use GuzzleHttp\Client;

$nationalityArray = array( 'AU'=>'Australia', 'BR'=>'Brazil', 'CA'=>'Canada', 'CH'=>'Switzerland', 'DE'=>'Germany', 'DK'=>'Denmark', 'ES'=>'Spain', 'FI'=>'Finland', 'FR'=>'France', 'GB'=>'United Kingdom', 'IE'=>'Ireland', 'IR'=>'Iran', 'NO'=>'Norway', 'NL'=>'Netherlands', 'NZ'=>'New Zealand', 'TR'=>'Turkey', 'US'=>'United States');
$genderArray = array('male','female');



// if (!isset($_POST['submit'])){
//     echo '
//     <h1>Hello</h1>
//     <form method="POST" action="friend.php"> 
//     <select id="nationality" name="nationality">';

//             foreach($nationalityArray as $key=>$option){
//                 echo '<option  value='.$key.'>'. $option. '</option>';
//             };
        
//     echo '</select>';
//     echo '<select id="gender" name="gender">';
        
//             foreach($genderArray as $option){
//                 echo '<option  value='.$option.'>'. $option. '</option>';
//             };
    
//     echo '</select>';
//     echo '<input  type="submit" id="submit" name="submit" /></form>';



// }



?>

<!DOCTYPE HTML>
<!--
	Inspired by :
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Virtual Friend</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
</head>

<body >
    <div class="container">
        <div id="banner">
			<h2>If Covid-19 makes you sad and lonely,<br />
				You came to the right place! <br /> Make yourself a smart and funny friend!
			</h2>
			<h3>Does this sound like the best idea ever?</h3>
			
		</div>
		<div id="formcenter">
			<h3>Make your selection: </h3>
            <form method="POST" action="friend.php">
				<select id="nationality" name="nationality">
					<?php
						foreach($nationalityArray as $key=>$option){
						echo '<option class="opt" value='.$key.'>'. $option. '</option>';
						};
					?>
				</select>

				<select id="gender" name="gender">
					<?php
						foreach($genderArray as $option){
						echo '<option class="opt"  value='.$option.'>'. ucfirst($option). '</option>';
						};
					?>
				</select>


						<input type="submit" id="submit" name="submit" value="Create A Friend!"
							class="button large icon solid fa-check-circle" />
			</form>	
		</div>	
	</div>	
	

		
	

	<footer id="footer" class="container">
		<div class="col-12">
			<div id="copyright">
			<p>&copy; Vitaliy Bulyma. All rights reserved</p>
			</div>
		</div>
	</footer>	
</body>

</html>