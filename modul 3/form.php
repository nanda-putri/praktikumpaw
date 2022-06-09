<?php 
//define variable
$name=$email=$comment=$gender=$website="";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$name=fun_input($_POST["name"]);
	$email=fun_input($_POST["email"]);
	$comment=fun_input($_POST["comment"]);
	$website=fun_input($_POST["website"]);
	$gender=fun_input($_POST["gender"]);
} 	
function fun_input($data){
 $data=trim($data);
 $data=stripcslashes($data);
 $data=htmlspecialchars($data);
 return $data;
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Validasi</title>
</head>
<body>
	<h2>PHP Form Validation</h2>
	<p style="color: red">*required field</p>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="nama">Nama</label>
		<input type="text" name="name" id="nama" placeholder="Input Your Name"><br><br>
		<label for="email">Email</label>
		<input type="text" name="email" id="email" placeholder="Input Your Email"><br><br>
		<label for="webstite">Website</label>
		<input type="text" name="website" id="website" placeholder="Input Your Website"><br><br>
		<label for="comment">Comment</label>
		<textarea name="comment" id="comment" placeholder="Give Your Comment"></textarea><br><br>
		<label for="gender">Gender</label>
		<input name="gender" value="male"  type="radio" id="male">
		<label id="male">Male</label>
		<input name="gender" value="female"  type="radio" id="female">
		<label id="female">Female</label>
		<input name="gender" value="other"  type="radio" id="other">
		<label id="other">Other</label><br><br>
		<button type="submit" name="submit">Submit</button>
	</form>
	<?php
		echo "<h2>Your Input</h2>";
		echo "$name";
		echo "<br>";
		echo "$email";
		echo "<br>";
		echo "$website";
		echo "<br>";
		echo "$comment";
		echo "<br>";
		echo "$gender";
	?>
</body>
</html>