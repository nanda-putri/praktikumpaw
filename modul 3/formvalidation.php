<?php
//define variable
$name=$email=$comment=$gender=$website="";
$nameErr=$emailErr=$commentErr=$genderErr=$websiteErr="";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	if (empty($_POST["name"])) {
		$nameErr="Name is required";
	} else{
		$name=fun_input($_POST["name"]);
	}
	if (empty($_POST["email"])) {
		$emailErr="Email is required";
	} else{
		$email=fun_input($_POST["email"]);
	}
	if (empty($_POST["website"])) {
		$websiteErr="";
	} else{
		$website=fun_input($_POST["website"]);
	}
	if (empty($_POST["comment"])) {
		$commentErr="";
	} else{
		$Comment=fun_input($_POST["comment"]);
	}
	if (empty($_POST["gender"])) {
		$genderErr="Gender is required";
	} else{
		$gender=fun_input($_POST["gender"]);
	}
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
	<title>Form Validation</title>
</head>
<body>
	<h2>PHP Form Validation</h2>
	<p style="color: red">*required field</p>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="nama">Nama</label>
		<input type="text" name="name" id="nama" placeholder="Input Your Name"><span style="color: red"> *<?php echo $nameErr;?></span><br><br>
		<label for="email">Email</label>
		<input type="text" name="email" id="email" placeholder="Input Your Email"><span style="color: red"> * <?php echo $emailErr;?></span><br><br>
		<label for="webstite">Website</label>
		<input type="text" name="website" id="website" placeholder="Input Your Website"><span style="color: red"> * <?php echo $websiteErr;?></span><br><br>
		<label for="comment">Comment</label>
		<textarea name="comment" id="comment" placeholder="Give Your Comment"></textarea><span style="color: red"> * <?php echo $commentErr;?></span><br><br>
		<label for="gender">Gender</label>
		<input name="gender" value="male"  type="radio" id="male">
		<label id="male">Male</label>
		<input name="gender" value="female"  type="radio" id="female">
		<label id="female">Female</label>
		<input name="gender" value="other"  type="radio" id="other">
		<label id="other">Other</label><span style="color: red"> *<?php echo $genderErr;?></span><br><br>
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