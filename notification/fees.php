<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.60046 -->
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


<style>.art-content .art-postcontent-0 .layout-item-0 {  border-collapse: separate;  }
.art-content .art-postcontent-0 .layout-item-1 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:3px;border-right-width:3px;border-bottom-width:3px;border-left-width:3px;border-top-color:#CFD8E2;border-right-color:#CFD8E2;border-bottom-color:#CFD8E2;border-left-color:#CFD8E2; color: #C6D1DD; background: #000000; padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px; border-radius: 10px;  }
.art-content .art-postcontent-0 .layout-item-2 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:3px;border-right-width:3px;border-bottom-width:3px;border-left-width:3px;border-color:#303F50; padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px; border-radius: 5px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 100%;
    border-collapse: collapse;
}

#customers td, #customers th {
    font-size: 1.6em;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;
}

#customers th {
    font-size: 1.9em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #2E8B57;
    color: #ffffff;
}

#customers tr.alt td {
    color: #000000;
    background-color: #EAF2D3;
}
</style>

<style> 
#wit {
	width: 250px;
	height: 48px;
	font-size: 1.3em;
}


</style>

</head>
<body>
<div id="art-main">
    <div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <h2 class="art-postheader"></h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout layout-item-0">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-1" style="width: 100%" >
        <p><span style="padding-left: 20px; font-family: 'Comic Sans MS'; font-weight: bold; color: rgb(255, 255, 255); background-color: rgb(0, 0, 0); font-size: 18px;">FEE NOTIFICATIONS</span></p>
    </div>
    </div>
</div>

</div>
<br><br>
<span style="padding: 20px; font-family: 'Comic Sans MS'; font-size:22px; color: rgb(205, 71, 4);"><b>List of Students Owing</b></span>
<div>

<?php
include('db.php');

$name=$amount=$payment=$bal=$month=$year=$level=$class="";
$nameErr=$amountErr=$balErr=$levelErr=$classErr="";

if(isset($_POST['mon_srch'])){
		
	if (empty($_POST["month"])) {
    $monthErr = "Please select a month";
  } else {
    $month = mysqli_real_escape_string($con, $_POST["month"]);
	}
	
	if (empty($_POST["year"])) {
    $yearErr = "Please select a year";
  } else {
    $year = mysqli_real_escape_string($con, $_POST["year"]);
	}
	
	
	if (empty($_POST["level"])) {
    $levelErr = "Please select a level";
  } else {
    $level = mysqli_real_escape_string($con, $_POST["level"]);
	}
	
	if (empty($_POST["class"])) {
    $classErr = "Please select a class";
  } else {
    $class = mysqli_real_escape_string($con, $_POST["class"]);
	}
	
	
	
	
	// Fee entery into cashflow plan
	$table_name=$conSucc=$conErr="";
	$table_name="$month"."$year"."_Plan";
	
	
$sql=mysqli_query($con,"SELECT * FROM fees WHERE Level='$level' && Class='$class' && Year='$year' && Month='$month' && Status='Part payment'");
$sql1=mysqli_query($con,"SELECT * From std");
echo "<table id=\"customers\">

<tr>
<th style=\"text-align:center\">Name</th>
<th style=\"text-align:center\">Level</th>
<th style=\"text-align:center\">Class</th>
<th style=\"text-align:center\">Month Owing</th>
<th style=\"text-align:center\">Status</th>
<th style=\"text-align:center\">Amount Paid</th>
<th style=\"text-align:center\">Owing</th>
</tr>";

while($row=mysqli_fetch_array($sql)){
  echo "<tr>";
  echo "<td style=\"text-align:center\">" . $row['Name'] . "</td>";
  echo "<td style=\"text-align:center\">" . $row['Level'] . "</td>";
  echo "<td style=\"text-align:center\">" . $row['Class'] . "</td>";
  echo "<td style=\"text-align:center\">" . $row['Month'] . "</td>";
  echo "<td style=\"text-align:center\">" . $row['Status'] . "</td>";
  echo "<td style=\"text-align:center\">" . $row['Amount'] . "</td>";
  echo "<td style=\"text-align:center\">" . $row['Bal'] . "</td>";
  echo "</tr>";
}

echo "</table>";
}
?>


<br><br>
<form action="fees.php" method="POST">
<div style="padding-left:20px;">
<span style="font-weight: bold; font-family: 'Comic Sans MS'; font-size: 18px;"><select name="month" style="font-size: 25px; padding-inline-start: 10px;"><option value="January">January</option><option value="February">February</option><option value="March" selected>March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select>&nbsp; &nbsp;
<select name="year" style="font-size: 25px; padding-inline-start: 10px;"><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option></select>&nbsp; <select name="level" style="font-size: 25px; padding-inline-start: 10px;"><option value="Creche">Creche</option><option value="Nursery">Nursery</option><option value="KG">KG</option><option value="Primary">Primary</option><option value="JHS">JHS</option></select>&nbsp; &nbsp;<select name="class" style="font-size: 25px; padding-inline-start: 10px;"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option></select>&nbsp;<input type="submit" name="mon_srch" value="Search" class="art-button"></span>
</div>
</form>
<br>

</article></div>
                    </div>
                </div>
            </div>

    </div>
</div>


</body></html>
<?php ob_end_flush(); ?>