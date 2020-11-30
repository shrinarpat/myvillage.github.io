
<?php
if(isset($_COOKIE['visitcount']))
{
	$name="visitcount";
$content=$_COOKIE['visitcount']+1;
$expiry=time()+(60*60*24);
setcookie($name,$content,$expiry);
}
else
{
	$name="visitcount";
$content=1;
$expiry=time()+(60*60*24);
setcookie($name,$content,$expiry);
}

?>
<!doctype html>
<html>
<head>
</head>
<body>
<h2> welcome </h2>
<?php
echo $_COOKIE['visitcount'];
?>
</body>
</html>