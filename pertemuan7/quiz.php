<html>
	<head><title>PHP Form Validation</title></head>
	<style>.error {color: #FF0000;}</style>
	<body>

		<?php
		$name = $email = $website = $comment = $gender = "";
		$nameVal = $emailVal = $genderVal= "";
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			if(empty($_POST['name'])) {
				$nameVal = "Name is required";
			} else {
				$name = $_POST['name'];
			}
			if(empty($_POST['email'])) {
				$emailVal = "Email is required";
			} else {
				$email = $_POST['email'];
			}
			if(empty($_POST['website'])) {
				$website = "";
			} else {
				$website = $_POST['website'];
			}
			if(empty($_POST['gender'])) {
				$genderVal = "Gender is required";
			} else {
				$gender = $_POST['gender'];
			}
			if(empty($_POST['comment'])) {
				$comment = "";
			} else {
				$comment = $_POST['comment'];
			}
		}	
		?>

		<FORM ACTION="" METHOD="POST" NAME="input">
			<h2>PHP Form Validation</h2>
			<p><span class="error">* required field</span></p>
			Name : <input type="text" name="name">
			<span class="error">* <?php echo $nameVal;?></span><br><br>
			E-mail : <input type="text" name="email">
			<span class="error">* <?php echo $emailVal;?></span><br><br>
			Website : <input type="text" name="website"><br><br>
			Comment : <textarea name="comment" cols="40" rows="5"></textarea><br><br>
			Gender :
			<input type="radio" name="gender" value="Female">Female
			<input type="radio" name="gender" value="Male">Male
			<span class="error">* <?php echo $genderVal;?></span><br><br>
			<input type="submit" name="Submit" value="Submit">
		</FORM>
	</body>
</html>

<?php
echo "<h2>Your Input :</h2>";
if(isset($_POST['name']) && ($_POST['email']) && ($_POST['gender'])) {
	echo $name;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $website;
	echo "<br>";
	echo $comment;
	echo "<br>";
	echo $gender;
}
?>