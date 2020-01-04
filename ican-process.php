<?php
	$connection = mysqli_connect("localhost", "root", "", "treasurehall");
	if (!$connection) {
		die("Connection failed:" . mysqli_connect_error());
	}
	// echo "Connection successful";

	if (isset($_POST["regnumber_check"])) {
		$regnumber = $_POST["regnumber"];
		$query = " SELECT * FROM icanstudents WHERE regnumber = '$regnumber' ";
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
		$nyscgmcode = $_POST['nyscgmcode'];
		$options = $_POST['options'];
		$gender = $_POST['gender'];
		$status = $_POST['status'];
		$phonenumber = $_POST['phonenumber'];
		$phonenumber2 = $_POST['phonenumber2'];
		$sponsor = $_POST['sponsor'];
		$employer = $_POST['employer'];
		$homeaddress = $_POST['homeaddress'];
		$email = $_POST['email'];
		$qualifications = $_POST['qualifications'];
		$foundation = $_POST['foundation'];
		$skills = $_POST['skills'];
		$professional = $_POST['professional'];
		$foundationcount = $_POST['foundationcount'];
		$skillscount = $_POST['skillscount'];
		$professionalcount = $_POST['professionalcount'];
		$totalcount = $_POST['totalcount'];
		$foundationamount = $_POST['foundationamount'];
		$skillsamount = $_POST['skillsamount'];
		$professionalamount = $_POST['professionalamount'];
		$totalamount = $_POST['totalamount'];
		$howdidyouknow = $_POST['howdidyouknow'];
	
		
		$query = " INSERT into icanstudents (firstname, lastname, regnumber, nyscgmcode, options, gender, status, phonenumber, phonenumber2, sponsor, employer, homeaddress, email, qualifications, foundation, skills, professional, foundationcount, skillscount, professionalcount, totalcount, foundationamount, skillsamount, professionalamount, totalamount, howdidyouknow) VALUES ('$firstname', '$lastname', '$regnumber', '$nyscgmcode', '$options', '$gender', '$status', '$phonenumber', '$phonenumber2', '$sponsor', '$employer', '$homeaddress', '$email', '$qualifications', '$foundation', '$skills', '$professional', '$foundationcount', '$skillscount', '$professionalcount', '$totalcount', '$foundationamount', '$skillsamount', '$professionalamount', '$totalamount', '$howdidyouknow') ";
		$result = mysqli_query($connection, $query);
		if(!$result) {
			echo "error saving data: " . mysqli_error($connection);

		}
		echo "User Registered sucessfully";
		exit();
	}
?>