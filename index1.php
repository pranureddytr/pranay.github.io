<?php
$host = "localhost";
$username = "root";
$password = "";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=phptest", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}



if(isset($_POST['save_contact']))
{
	//print_r($_POST);
	$sql = "INSERT INTO contacts(name, phone, email) VALUES('".addslashes($_POST['name'])."', '".addslashes($_POST['phone'])."', '".addslashes($_POST['email'])."')";
	$conn->query($sql);
}

?>

<html>
	<head>
		<title>PHP Form</title>
<link rel="stylesheet" type="text/css" href="style.css">

	</head>
	<body align="center">
		<form action="" method="post">
			<div> Customer ID: <input type="text" name="name" value="" /></div><br>
			<div> Subject: <input type="text" name="phone" value="" /></div><br>
			<div> Description: <input type="text" name="email" value="" /></div><br><br>
			<div> <input type="submit" name="save_contact" value="Save" /></div>
		</form>
	</body>
<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
</html>