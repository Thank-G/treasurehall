<?php
	$connection = mysqli_connect("localhost", "root", "", "treasurehall");
	if (!$connection) {
		die("Connection failed:" . mysqli_connect_error());
	}
	// echo "Connection successful";

	if (isset($_POST["regnumber_check"])) {
		$regnumber = $_POST["regnumber"];
		$query = " SELECT * FROM miscelaneousstudents WHERE regnumber = '$regnumber' ";
		$result = mysqli_query($connection, $query);
		if (mysqli_num_rows($result) > 0) {
			echo "returning";
		} else {
			echo "new";
		}
		exit();
	}

	if (isset($_POST["save"])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$regnumber = $_POST['regnumber'];
		$nysccode = $_POST['nysccode'];
		$gender = $_POST['gender'];
		$status = $_POST['status'];
		$phonenumber = $_POST['phonenumber'];
		$phonenumber2 = $_POST['phonenumber2'];
		$sponsor = $_POST['sponsor'];
		$employer = $_POST['employer'];
		$homeaddress = $_POST['homeaddress'];
		$email = $_POST['email'];
		$qualifications = $_POST['qualifications'];
		$options = $_POST['options'];
		$miscelaneous = $_POST['miscelaneous'];
		$totalcount = $_POST['totalcount'];
		$howdidyouknow = $_POST['howdidyouknow'];
	
		
		$query = " INSERT into miscelaneousstudents (firstname, lastname, regnumber, nysccode, gender, status, phonenumber, phonenumber2, sponsor, employer, homeaddress, email, qualifications,  options, miscelaneous, totalcount, howdidyouknow) VALUES ('$firstname', '$lastname', '$regnumber', '$nysccode', '$gender', '$status', '$phonenumber', '$phonenumber2', '$sponsor', '$employer', '$homeaddress', '$email', '$qualifications', '$options', '$miscelaneous', '$totalcount', '$howdidyouknow') ";
		$result = mysqli_query($connection, $query);
		if(!$result) {
			echo "error saving data: " . mysqli_error($connection);

		}
		echo "User Registered sucessfully";
		exit();
	}
?>