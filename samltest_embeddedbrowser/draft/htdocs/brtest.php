<?php
setcookie('testtime', time ( void ), time ( void ) + 3600, '/brtest');
setcookie('teststring', 'foobar', time ( void ) + 3600, '/brtest');
setcookie('myhost', 'foobar', time ( void ) + 3600, '/brtest', $_SERVER['SERVER_NAME']);
setcookie('alienhost', 'foobar', time ( void ) + 3600, '/brtest', 'there.are.aliens');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript"  src="jquery-1.12.0.min.js"></script>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<h1>Hello!</h1>
<pre>
<?php 
//print_r($_SERVER);
?>
</pre>
<h2>Here comes your requests cookie data:</h2>
<a href='brtest.php'>Press reload just once!</a>
<pre>
<?php
print_r($_COOKIE);
?>
</pre>

<h2>Functional tests:</h2>
<div id='jstest'>
Javascript did not work!
</div>
<div id='csstest'>
CSS did <span id='cssnot'>not</span> work!
</div>

<h2>Testing the Auto-Ack:</h2>
<a href='ack.txt'>Press here to have auto-ack</a>


<script>
function js_handler(){
	$('#jstest').html("Javascript did work!");
	$('#jstest').css('color', 'green');
}

$( document ).ready( js_handler );

</script>
</body>
