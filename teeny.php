<!-- Check out teeny text live! 
     edudeveloper.net/teeny.php -->

<div style="text-align: center; font-family: sans-serif;">
<h1 style="color: limegreen;">teeny text</h1>
<hr>

<?php

	if (isset($_POST['user_input'])&&!empty($_POST['user_input'])) {
		$user_input = ' '.strtolower($_POST['user_input']);
		$find = array(' thanks ', ' thank you ', ' please ', ' you ', ' for ', 'to', ' because ', ' of course ', 'be', ' by the way ', ' cool ', '.', ',', ' so', ' with ', ' later ', ' text ', ' see ');
		$replace = array(' thnx ', ' thnx ', ' plz ', ' u ', ' 4 ', '2', ' bc ', ' ofc ', 'b', ' btw ', ' kewl ', '', '', ' sooooo ', ' w ', ' l8r ', ' txt ', ' c ');
		$teeny = str_replace($find, $replace, $user_input);
		echo $teeny."!";
	} else {
		echo "Please submit some text.";
	}

?>

<hr>

<form action="teeny.php" method="POST">
	<textarea name="user_input" rows="10" cols="50" placeholder="Enter some text to make teeny."></textarea><br>
	<input type="submit" value="Submit">
</form>
</div>