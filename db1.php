<?php 
debug_backtrace() || die("Direct access not permitted! Contact Aministrator for help.");

if (empty($_POST["ex_password"]) || $_POST['ex_password'] !== 'Ja01072016$') {
    $ex_passwordErr= "Please input the correct password";
  }
	else {	
    $ex_password = mysqli_real_escape_string($con, $_POST["ex_password"]);
  }
  


?>
