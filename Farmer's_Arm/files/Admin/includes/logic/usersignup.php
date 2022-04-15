
<?php
// variable declaration
$email  = "";
$username = "";
$errors  = [];
// SIGN UP USER
if (isset($_POST['signup_btn'])) {
	// validate form values
	$errors = validateUser($_POST, ['signup_btn']);

	// receive all input values from the form. No need to escape... bind_param takes care of escaping
	$email = $_POST['email'];
    $username = $_POST['username'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt the password before saving in the database
	$address = $_POST['address'];

	// if no errors, proceed with signup
	if (count($errors) === 0) {
		// insert user into database
		$query = "INSERT INTO users SET email=?, username=?,  password=?, address=?";
		$stmt = $conn->prepare($query);
		$stmt->bind_param(  $email, $username, $password, $address);
		$result = $stmt->execute();
		if ($result) {
		  $user_id = $stmt->insert_id;
			$stmt->close();
			loginById($user_id); // log user in
		 } else {
			 $_SESSION['error_msg'] = "Database error: Could not register user";
		}
	 }
}