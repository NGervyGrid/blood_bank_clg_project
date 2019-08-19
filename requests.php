<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
<?php include('admin/php/config.php'); ?>

 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
<div style="height:530px; width:500px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" action="req.php" enctype="multipart/form-data">
 <table cellpadding="0" cellspacing="0" width="500px" height="480px" style="margin:auto" >

   <tr><td colspan="2" align="center"><img src="Images/brequest.png" height="90px" /></td></tr>

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   

                   

<tr><td class="lefttd" align="center"> Name:</td><td><input type="text" name="name" required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character  between 5 to 15 for donor name" /></td></tr>
 <tr><td>&nbsp;</td></tr>
<tr><td class="lefttd" align="center" >Gender</td><td><input name="radio" type="radio" value="male" checked="checked">Male<input name="radio" type="radio" value="female" >Female</td></tr>
 <tr><td>&nbsp;</td></tr>
<tr><td class="lefttd" align="center">Age</td><td><input type="number" name="age" required="required" maxlength="2" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td></tr>
 <tr><td>&nbsp;</td></tr>
<tr><td class="lefttd" align="center">Mobile No</td><td><input type="text" name="mobile" maxlength="10" required=""  /></td></tr>
 <tr><td>&nbsp;</td></tr>
<tr><td class="lefttd" align="center">Select Blood Group </td><td><select name="blood_group" required><option value="">Select</option> <option value="O+">O+</option> <option value="A+">A+</option> <option value="B+">B+</option> <option value="AB+">AB+</option> <option value="O-">O-</option> <option value="A-">A-</option> <option value="B-">B-</option> <option value="AB-">AB-</option> 
</select></td></tr>
 <tr><td>&nbsp;</td></tr>
<tr><td class="lefttd" align="center">E-Mail</td><td><input type="email" name="mail" required="required" /></td></tr>
 <tr><td>&nbsp;</td></tr>
<tr><td class="lefttd" align="center">till date</td><td><input type="date" name="till_date"  required=""  /></td></tr>
 <tr><td>&nbsp;</td></tr>
<tr><td class="lefttd" align="center">Detail</td><td><input type="text" name="details"> </td></tr>
 <tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="Submit" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr></table>

</form>
        </div>
          
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li class="active"><a href="index.php">Home</a></li>			
			<li><a href="donar.php">Donor</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			
            </ul>
	</div>
		<div class="copy">
			<p class="title">© All Rights Reserved </p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>
