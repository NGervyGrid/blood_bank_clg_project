<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<div style="height:530px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" action="reg.php" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" style="margin:auto; width:100%; " >

    <tr><td colspan="2"  align="center"><img src="Images/donor.png" width="300px" height="80px"  /></td></tr>
   
<tr><td colspan="2">&nbsp;</td></tr>
   
                <tr><td  style=" padding-left:20px;" ><img src="Images/sidebanner.jpg" width="170px" class="shaddoww"/>&nbsp; </td>
                    <td style="vertical-align:top;padding-top:20px;">
                    <table cellpadding="0" cellspacing="0" style="width:100%; height:400px;">

<tr><td class="lefttd">Donor Name:</td><td><input type="text" name="name" required="required" pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 4 to 15 for donor name" /></td></tr>

<tr><td class="lefttd">Gender</td><td><input name="radio" type="radio" value="male" checked="checked">Male<input name="radio" type="radio" value="female" >Female</td></tr>

<tr><td class="lefttd">Age</td><td><input type="number" name="age" maxlength="2" max="40" min="18" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td></tr>
<tr><td class="lefttd">Mobile No</td><td><input type="text" name="mobile" required="" maxlength="10" /></td></tr>
<tr><td class="lefttd"> Blood Group </td><td><select name="blood_group" required><option value="">Select</option><option value="O+" type="text">O+</option><option value="A+" type="text">A+</option><option value="B+" type="text">B+</option><option value="AB+" type="text">AB+</option><option value="O-" type="text">O-</option><option value="A-" type="text">A-</option><option value="B-" type="text">B-</option><option value="AB-" type="text">AB-</option>
</select></td></tr>
<tr><td class="lefttd">E-Mail</td><td><input type="email" name="mail" required="required" /></td></tr>
<tr><td class="lefttd">Area</td><td><select name="area" required><option value="">Select</option><option value="1" type="number">Madurai central</option><option value="2" type="number">villapuram</option><option value="3" type="number">Madurai East</option><option value="4" type="number">Madurai West</option><option value="5" type="number">Madurai South</option><option value="6" type="number">Madurai North</option><option value="7" type="number">Puthur</option><option value="8" type="number">Sellur</option><option value="9" type="number">Simmakkal</option><option value="10" type="number">jaihindupuram</option><option value="11" type="number">Pasumalai</option><option value="12" type="number">Perungudi</option><option value="13" type="number">Avaniyapurum</option><option value="14" type="number">S.S.Colony</option><option value="14" type="number">K.K.Nagar</option><option value="15" type="number">Othakadai</option><option value="16" type="number">Thiru Nagar</option><option value="17" type="number">Thirupuramkundram</option><option value="18" type="number">Palaganatham</option><option value="19" type="number">Anupanadi</option>
</select></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="Regsitred" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr></table>
</td></tr>
</table>
</form>
        </div>
          
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li><a href="index.php">Home</a></li>			
			<li class="active"><a href="donar.php">Donor</a></li>
            
			
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


	


