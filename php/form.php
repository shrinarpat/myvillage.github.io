<!doctype html>
<html>
<head>
</head>
<body>
<h1>Welcome.</h1>
<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subjetc=$_REQUEST['subject'];
$message=$_REQUEST['message'];
if(isset($firstname))
{
?>
<p>
<strong>name -</strong><?php echo $name ?><br>
<strong>email -</strong><?php echo $email ?><br>
<strong>subject -</strong><?php echo $subject ?><br>
<strong>message -</strong><?php echo $message ?><br>
</p>
<?php } ?>
</body>
</html>