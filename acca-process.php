<?php
	$connection = mysqli_connect("localhost", "root", "", "treasurehall");
	if (!$connection) {
		die("Connection failed:" . mysqli_connect_error());
	}
	// echo "Connection successful";

	if (isset($_POST["regnumber_check"])) {
		$regnumber = $_POST["regnumber"];
		$query = " SELECT * FROM accastudents WHERE regnumber = '$regnumber' ";
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
		$appliedknowledge = $_POST['appliedknowledge'];
		$appliedskills = $_POST['appliedskills'];
		$strategicprof = $_POST['strategicprof'];
		$appliedknowledgecount = $_POST['appliedknowledgecount'];
		$appliedskillscount = $_POST['appliedskillscount'];
		$strategicprofcount = $_POST['strategicprofcount'];
		$totalcount = $_POST['totalcount'];
		$appliedknowledgeamount = $_POST['appliedknowledgeamount'];
		$appliedskillsamount = $_POST['appliedskillsamount'];
		$strategicprofamount = $_POST['strategicprofamount'];
		$totalamount = $_POST['totalamount'];
		$howdidyouknow = $_POST['howdidyouknow'];
	
		
		$query = " INSERT into accastudents (firstname, lastname, regnumber, nysccode, options, gender, status, phonenumber, phonenumber2, sponsor, employer, homeaddress, email, qualifications, appliedknowledge, appliedskills, strategicprof, appliedknowledgecount, appliedskillscount, strategicprofcount, totalcount, appliedknowledgeamount, appliedskillsamount, strategicprofamount, totalamount, howdidyouknow) VALUES ('$firstname', '$lastname', '$regnumber', '$nysccode', '$options', '$gender', '$status', '$phonenumber', '$phonenumber2', '$sponsor', '$employer', '$homeaddress', '$email', '$qualifications', '$appliedknowledge', '$appliedskills', '$strategicprof', '$appliedknowledgecount', '$appliedskillscount', '$strategicprofcount', '$totalcount', '$appliedknowledgeamount', '$appliedskillsamount', '$strategicprofamount', '$totalamount', '$howdidyouknow') ";
		$result = mysqli_query($connection, $query);
		if(!$result) {
			echo "error saving data: " . mysqli_error($connection);

		}
		echo "User Registered sucessfully";
		exit();
	}
?>