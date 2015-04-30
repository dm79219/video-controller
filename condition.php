<?php
$FirstNameErr = $LastNameErr = $genderErr = $dateErr = $nationalityErr = $emailErr = $mobileErr = $passwordErr = $con_passErr = "";
$FirstName = $MiddleName = $LastName = $date = $month = $year = $email = $password = $con_pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["FirstName"])) {
    $FirstNameErr = "First Name is required";
  } else {
    $FirstName = test_input($_POST["FirstName"]);
  }
  if(!empty($_POST["MiddleName"])){
    $MiddleName = test_input($_POST["MiddleName"]);
  }
  
  if (empty($_POST["LastName"])) {
    $LastNameErr = "Last Name is required";
  } else {
    $LastName = test_input($_POST["LastName"]);
  }
  
  
  if (empty($_POST["date"])) {
    $dateErr = "Date is required";
  } else {
    $date = test_input($_POST["date"]);
  }
  
  $month = test_input($_POST["month"]);
  $year = test_input($_POST["year"]);
  

  if (empty($_POST["Email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["Email"]);
	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
      $emailErr = "Invalid email format";
  }
  }
  
  if (empty($_POST["pass"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["pass"]);
  }
  
  if (empty($_POST["con_pass"])) {
    $con_passErr = "Confirm password is required";
	$password="";
  } else if($_POST["con_pass"] != $_POST["pass"]){
	$con_passErr = "Confirm password should be equal to the Password";
	$password = "";
  } else{
    $con_pass = test_input($_POST["con_pass"]);
  }

}
?>