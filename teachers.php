<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.60046 -->
    <meta charset="utf-8">
    <title>Teachers</title>

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="jquery.js"></script>
    <script src="script.js"></script>

<?php include('sidestyle.php'); ?>


<style>
.art-content .art-postcontent-0 .layout-item-0 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:3px;border-color:#4E5C6A; color: #171E26; background: #ecf7f4; padding: 15px; box-shadow:0 0 3px 3px rgba(0, 0, 0, 0.4); -webkit-border-radius:4px; }
.art-content .art-postcontent-0 .layout-item-1 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:2px;border-color:#4E5C6A; color: #171E26; background: #ecf5f7; padding: 15px; box-shadow:0 0 3px 3px rgba(0, 0, 0, 0.4); -webkit-border-radius:10px; -moz-border-radius:10px;}
.art-content .art-postcontent-0 .layout-item-2 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:2px;border-color:#4E5C6A; color: #171E26; background: #ecf5f7; padding: 10px; box-shadow:0 0 3px 3px rgba(0, 0, 0, 0.4); -webkit-border-radius:10px; -moz-border-radius:10px; }
.art-content .art-postcontent-0 .layout-item-3 { color: #283543; background: ; padding: 5px; box-shadow:0 0 3px 3px rgba(0, 0, 0, 0.4); -webkit-border-radius:10px; -moz-border-radius:10px; }

</style></head>
<body>
<div id="art-main">
<header class="art-header">

    <div class="art-shapes">
        <div class="art-object181940209" data-left="92.48%"></div>
<div class="art-object2125646344" data-left="90.59%"></div>
<div class="art-object40990061" data-left="94.18%"></div>
<div class="art-object247285391" data-left="95.65%"></div>
<div class="art-textblock art-object516727737" data-left="50%">
        <div class="art-object516727737-text-container">
        <div class="art-object516727737-text"></div>
    </div>
    
</div>
            </div>

<h1 class="art-headline" data-left="3.97%">
    <a href="#">ROSES OF LIFE</a>
</h1>





                
                    
</header>
<nav class="art-nav">
    <ul class="art-hmenu"><li><a href="menu.php" class="active">MENU</a></li><li><a href="attendance.php">ATTENDANCE</a></li><li><a href="students-2.php">STUDENTS</a></li><li><a href="enrollment.php">ENROLLMENT</a></li><li><a href="teachers.php">TEACHERS</a></li><li><a href="fees.php">FEES</a></li><li><a href="cash-flow.php">CASH FLOW</a></li><li><a href="notifications.php">NOTIFICATIONS</a></li><li><a href="security.php">SECURITY</a></li></ul> 
    </nav>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1"><div class="art-vmenublock clearfix">
        
		 <?php include('sidebar1.php');?>
		
</div></div>
                        <div class="art-layout-cell art-content"><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t"></h3>
        </div>
        <div class="art-blockcontent"><p style="text-align: center;"><span style="font-weight: bold;"><img width="16" height="16" alt="" class="art-lightbox" src="images/status_online.png"><img width="16" height="16" alt="" class="art-lightbox" src="images/bullet_green.png"><span style="font-family: 'Comic Sans MS'; color: rgb(205, 71, 4); font-size:16px">WELCOME JOHNSON &nbsp; || &nbsp; &nbsp;<img width="16" height="16" alt="" class="art-lightbox" src="images/time.png">&nbsp;<?php include 'date_time.php';?> &nbsp; || &nbsp;&nbsp;<img width="16" height="16" alt="" class="art-lightbox" src="images/date.png">&nbsp;<?php echo date("d-m-Y");?></span></span><br></p></div>
</div><article class="art-post art-article">
                                <h2 class="art-postheader"><span class="art-postheadericon"></span></h2>
                                                
                                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 67%" >
        <p><img width="16" height="16" alt="" class="art-lightbox" src="images/add.png">&nbsp;<span style="font-family: 'Comic Sans MS'; font-weight: bold; font-size: 20px;">ADD TEACHER</span><br></p>
    </div><div class="art-layout-cell" style="width: 33%" >
        <p><br></p>
    </div>
    </div>
</div>

<?php
//form Validation

$conErr=$conSucc=$msg=$msgErr="";
include 'db.php';

$stdf_name=$stdl_name=$gender=$day=$month=$year=$p_name=$residence=$contact=$class=$level=$vital_info=$date_birth=$conSucc=$name=$date=$conErr=$row=$id=$result=$fileErr="";
$stdf_nameErr=$stdl_nameErr=$genderErr=$dayErr=$monthErr=$yearErr=$p_nameErr=$residenceErr=$contactErr=$classErr=$levelErr=$vital_infoErr="";

if (isset($_POST['add_std']) || isset($_POST['update'])) {
  if (empty($_POST["stdf_name"])) {
    $stdf_nameErr = "Please enter first name";
  } else {
    $stdf_name= mysqli_real_escape_string($con, $_POST["stdf_name"]);
	
  }

  if (empty($_POST["stdl_name"])) {
    $stdl_nameErr = "Please enter last name";
  } else {
    $stdl_name = mysqli_real_escape_string($con, $_POST["stdl_name"]);
	}
	
	if (empty($_POST["gender"])) {
    $genderErr = "Please select a gender";
  } else {
    $gender= mysqli_real_escape_string($con, $_POST["gender"]);
	
  }

  if (empty($_POST["day"])) {
    $dayErr = "";
  } else {
    $day = mysqli_real_escape_string($con, $_POST["day"]);
	}
	
	
	if (empty($_POST["month"])) {
    $monthErr = "";
  } else {
    $month= mysqli_real_escape_string($con, $_POST["month"]);
	
  }

  if (empty($_POST["year"])) {
    $yearErr = "";
  } else {
    $year = mysqli_real_escape_string($con, $_POST["year"]);
	}
	
	
	if (empty($_POST["class"])) {
    $classErr = "";
  } else {
    $class = mysqli_real_escape_string($con, $_POST["class"]);
	}
	
	if (empty($_POST["level"])) {
    $levelErr = "";
  } else {
    $level = mysqli_real_escape_string($con, $_POST["level"]);
	}
	
	if (empty($_POST["vital_info"])) {
    $vital_infoErr = "";
  } else {
    $vital_info = mysqli_real_escape_string($con, $_POST["vital_info"]);
	}
	
	
$class="$level $class";
$date_birth="$day-$month-$year";


//Database Query to update teachers data
/*
if(isset($_POST['update'])){
$sql="UPDATE tch_info SET Fname='$stdf_name',Lname='$stdl_name', Gender='$gender', Date='$date_birth',Class='$class',Qualification='$vital_info' WHERE Fname='$stdf_name' AND Lname='$stdl_name' AND Date='$date_birth'";
if(mysqli_query($con,$sql)){
	$msg="<span style=\"font-family: 'Comic Sans MS'; color: rgb(205, 71, 4);\"><b>Teacher information updated</b></span>";
}else{
	$msgErr="<span style=\"font-family: 'Comic Sans MS'; color: rgb(205, 71, 4);\"><b>Unable to update teacher's information</b></span>";
	}	
			
} */


//Database Query to insert info
if(isset($_POST['add_std']) and !empty($stdf_name) and !empty($stdl_name) and !empty($gender)){
$sql="INSERT INTO tch_info (Fname,Lname, Gender, Date, Class, Qualification) 
VALUES('$stdf_name','$stdl_name','$gender','$date_birth','$class','$vital_info')";

if(mysqli_query($con,$sql)){
	$msg="<span style=\"font-family: 'Comic Sans MS'; color: rgb(205, 71, 4); font-size:16px;\"><b>New teacher successfully added</b></span>";
}else{
	$msgErr="<span style=\"font-family: 'Comic Sans MS'; color: rgb(205, 71, 4);\"><b>Unable to add teacher</b></span>";
}} else{
 $msgErr="<span style=\"font-family: 'Comic Sans MS'; color: rgb(205, 71, 4); font-size: 16px;\"><b>Please make sure all fields are filled!</b></span>";
}

/*
//image file upload 
$fileErr=$tempName=$data="";
if(isset($_POST['add_std'])){
if($_FILES['file']['error']>0)
{
	$fileErr="<span style=\"font-family: 'Comic Sans MS'; color: rgb(205, 71, 4);\"><b>Invalid file</b></span>";
}else{
	$tempName=$_FILES['file']['tmp_name'];
	
	$fp=fopen($tempName,'r');
	$data=fread($fp, filesize($tempName));
	$data=addslashes($data);
	fclose($fp);
}

//Database Query to insert image
$sql="SELECT * FROM tch_info WHERE Fname='$stdf_name' && Lname='$stdl_name' && Date='$date_birth'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$id=$row['ID'];
$sql="INSERT INTO bin_img (ID,Image) VALUES('$id','$data')";
mysqli_query($con,$sql);


}
*/
}



?>		

<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-1" style="width: 67%" >
	
	
	<form  action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
		<?php echo "$msg"."$msgErr"; ?>
        <p><span style="font-size: 18px; font-weight: bold; font-family: 'Comic Sans MS';">PERSONAL INFORMATION</span></p><p><span style="font-weight: bold; font-family: 'Comic Sans MS'; font-size: 18px;">First Name:&nbsp;<input type="text" name="stdf_name" style="font-size: 25px; padding-inline-start: 10px;" value="<?php echo $stdf_name;?>"></span></p><p><span style="font-weight: bold; font-family: 'Comic Sans MS'; font-size: 18px;">Last Name:&nbsp;</span>&nbsp;<input type="text" name="stdl_name" style="font-size: 25px; padding-inline-start: 10px;" value="<?php echo $stdl_name;?>"></p><p><span style="font-family: 'Comic Sans MS'; font-weight: bold; font-size: 18px;">Gender: &nbsp; &nbsp; &nbsp;&nbsp;</span><label class="art-radiobutton"><input type="radio" name="gender" value="male" style="font-family: 'Comic Sans MS'; font-weight: bold;"><span style="font-weight: bold; font-family: 'Comic Sans MS'; font-size: 18px;">Male</span></label><span style="font-weight: bold; font-family: 'Comic Sans MS';">&nbsp;</span> <span style="font-family: 'Comic Sans MS'; font-weight: bold;">&nbsp; &nbsp; &nbsp;&nbsp;</span><label class="art-radiobutton"><input type="radio" name="gender"  value="Female" style="font-family: 'Comic Sans MS'; font-weight: bold;"><span style="font-weight: bold; font-family: 'Comic Sans MS'; font-size: 18px;">Female&nbsp;</span></label><br></p><p><span style="font-family: 'Comic Sans MS'; font-weight: bold; font-size: 18px;">Date of Birth:&nbsp;</span><span style="font-family: 'Comic Sans MS'; font-weight: bold; font-size: 18px;">Day&nbsp;<select name="day" style="font-size: 25px; padding-inline-start: 10px;"><option value="1">1</option><option value="2">2</option><option value="3" selected>3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>&nbsp; &nbsp; <span style="font-weight: bold; font-family: 'Comic Sans MS'; font-size: 18px;">Month&nbsp;
         <select name="month" style="font-size: 25px; padding-inline-start: 10px;"><option value="January">January</option><option value="February">February</option><option value="March" selected>March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select>&nbsp; Year&nbsp;
         <select name="year" style="font-size: 25px; padding-inline-start: 10px;"><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select></span></span><br></p><p><span style="font-family: 'Comic Sans MS'; font-weight: bold; font-size: 18px;"></span></p>
    </div><div class="art-layout-cell" style="width: 33%" >
        <p><br></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 100%" >
        <p><br></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 67%" >
	
        <p>
		<?php /* html for image upload
		<span style="font-family: 'Comic Sans MS'; font-size: 18px; font-weight: bold;">ACADEMIC INFORMATION</span></p><p><span style="font-weight: bold; font-family: 'Comic Sans MS'; font-size: 18px;">Upload an Image:&nbsp;</span></p>
		
		<span style="font-family: 'Comic Sans MS'; font-weight: bold; font-size: 18px;">
         <label for="file">Filename:</label>
         <input type="file" name="file" id="file"><br></span>
		 <?php echo "<br>$fileErr"; ?>
		 
		 */
		 
		 ?>
		 <p style="text-align: -webkit-auto;"><span style="font-weight: bold; font-family: 'Comic Sans MS'; font-size: 18px;">LEVEL: &nbsp; &nbsp;</span><select name="level" style="font-size: 25px; padding-inline-start: 10px;"><option value="Creche">Creche</option><option value="Nursery">Nursery</option><option value="Primary">Primary</option><option value="JHS">JHS</option></select><span style="color: rgb(0, 0, 0); font-size: 18px; line-height: normal; white-space: pre;">&nbsp;</span> <span style="font-family: 'Comic Sans MS'; font-weight: bold; font-size: 18px;">CLASS: &nbsp;<select name="class" style="font-size: 25px; padding-inline-start: 10px;"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option></select></span></p><span style="font-weight: bold; font-family: 'Comic Sans MS'; font-size: 18px;">Qualification:</span><br><p><textarea rows="10" cols="50" style="padding:10px; font-family: Times; font-size: 25px;" name="vital_info" value="<?php echo $vital_info;?>"></textarea></p><p style="text-align: right;">&nbsp;<div align="right"><input type="submit" name="add_std" value="Add Teacher" class="art-button">&nbsp;<?php // <input type="submit" name="update" value="update" class="art-button"> ?></div>&nbsp;<span style="font-family: 'Comic Sans MS'; font-weight: bold;"><br></span></p>
    </div><div class="art-layout-cell" style="width: 33%" >
        
		</form><p><br></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 100%" >
        <p><br></p>
    </div>
    </div>
</div>
<br>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 50%" >
        <p><img width="16" height="16" alt="" class="art-lightbox" src="images/application_form_delete.png"><span style="font-weight: bold; font-size: 18px; font-family: 'Comic Sans MS';">&nbsp;DELETE TEACHER</span><br></p>
    </div><div class="art-layout-cell" style="width: 50%" >
        <p><br></p>
    </div>
    </div>
</div>
<br>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 50%" >
	
	
<?php
 $std_id=$idErr=$mssgErr=$num="";
 if(isset($_POST['delete'])){ 
    if(empty($_POST['std_id'])){
	 $idErr="Please enter a correct student ID";
 }else{
	 $std_id=mysqli_real_escape_string($con,$_POST['std_id']);
 }
 
 $result= mysqli_query($con, "SELECT * FROM tch_info WHERE ID='$std_id'");		

// Checking for matching cridentials in database
$num= mysqli_num_rows($result);

if (!empty($num)){
	$sql="DELETE FROM tch_info WHERE ID='$std_id'";
	if(mysqli_query($con,$sql)){
	echo "<script>alert('Teacher has been deleted from list')</script>";
}else{
	$mssgErr="<span style=\"font-family: 'Comic Sans MS'; color: rgb(205, 71, 4);\"><b>Please enter a correct ID</b></span>";
 }
	
} else {
	$mssgErr="<span style=\"font-family: 'Comic Sans MS'; color: rgb(205, 71, 4);\"><b>Please enter a correct ID</b></span>";
}
 
}
 
 ?>
	
	
	
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
	<?php echo "$mssgErr";?>
        <p><span style="font-weight: bold; font-family: 'Comic Sans MS'; font-size: 18px;">TEACHER'S ID:</span>&nbsp;<div align="center"><input type="text" style="font-size: 25px; padding-inline-start: 10px;" name="std_id"></div><div align="right"><input type="submit" name="delete" value="Delete" class="art-button"></div>&nbsp;</p><span style="font-family: 'Comic Sans MS'; color: rgb(205, 71, 4);"><?php echo "<b>".$idErr."</b>";?></span>
    </div><div class="art-layout-cell" style="width: 50%" >
        <p><br></p>
		</form>
    </div>
    </div>
</div>
<br><br><br><br>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    
    </div>
</div>
</div>


</article></div>
                  
                    </div>
                </div>
            </div><footer class="art-footer">

<p>Copyright © 2017. All Rights Reserved.</p>
</footer>

    </div>
</div>


</body></html>