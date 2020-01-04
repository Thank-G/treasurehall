<?php
	$connection = mysqli_connect("localhost", "root", "", "treasurehall");
	if (!$connection) {
		die("Connection failed:" . mysqli_connect_error());
	}
	// echo "Connection successful";

	if (isset($_POST["regnumber_check"])) {
		$regnumber = $_POST["regnumber"];
		$query = " SELECT * FROM foreignexamstudents WHERE regnumber = '$regnumber' ";
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
		$weekdays = $_POST['weekdays'];
		$weekends = $_POST['weekends'];
		$weekdayscount = $_POST['weekdayscount'];
		$weekendscount = $_POST['weekendscount'];
		$totalcount = $_POST['totalcount'];
		$weekdaysamount = $_POST['weekdaysamount'];
		$weekendsamount = $_POST['weekendsamount'];
		$totalamount = $_POST['totalamount'];
		$howdidyouknow = $_POST['howdidyouknow'];
	
		
		$query = " INSERT into foreignexamstudents (firstname, lastname, regnumber, nysccode, options, gender, status, phonenumber, phonenumber2, sponsor, employer, homeaddress, email, qualifications, weekdays, weekends, weekdayscount, weekendscount, totalcount, weekdaysamount, weekendsamount, amount, totalamount, howdidyouknow) VALUES ('$firstname', '$lastname', '$regnumber', '$nysccode', '$options', '$gender', '$status', '$phonenumber', '$phonenumber2', '$sponsor', '$employer', '$homeaddress', '$email', '$qualifications', '$weekdays', '$weekends', '$weekdayscount', '$weekendscount', '$totalcount', '$weekdaysamount', '$weekendsamount', '$totalamount', '$howdidyouknow') ";
		$result = mysqli_query($connection, $query);
		if(!$result) {
			echo "error saving data: " . mysqli_error($connection);

		}
		echo "User Registered sucessfully";
		exit();
	}
?>