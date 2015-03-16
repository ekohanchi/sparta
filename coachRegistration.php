<html>
<head>
<?php include ("include/allcss.php"); ?>

<title>Sparta Coaching | Coach Registration</title>
<script language="javascript" src="include/validation.js"></script>
</head>
<body>
<?php
include ("header.php");
include("include/configs.php");

function createDropdown($array) {
	foreach($array as $key => $value) {
		echo "<option value=\"$key\">$value</option>\n";
	}
}

function createSpecialDropdown($array) {
	$firsttime=true;
	
	foreach($array as $key => $value) {
		if ($key == "SPORTS" || $key == "MUSIC" || $key == "PERFORMING ARTS" || $key == "FINE ARTS" || $key == "TECH / OTHER HOBBIES") {
			//echo "<option value=\"$key\">$value</option>\n";
			if (! $firsttime) {
				echo "</optgroup>\n";
			}
			echo "<optgroup label=\"$key\">\n";
			$firsttime=false;
		}
		else {
			echo "<option value=\"$key\">$value</option>\n";
			if ($key == "Writing") { echo "</optgroup>\n"; }
		}
	}
}
?>

<table class="centertable">
  <tr>
    <td class="leftcol"></td>
    <td class="contentbody">

<div class="aboveform">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SPARTA Coaching is currently in its final stages of development. In the near future, Students and  
Coaches will have access to the entire site and resources. Please register below to become one of 
the first members of the team and to learn more about SPARTA Coaching. You can remain updated with our 
progress by following us on <a href="http://twitter.com/spartacoaching" target="_blank">Twitter</a>, 
reading our <a href="http://spartacoaching.wordpress.com/" target="_blank">Blog</a>, 
liking us on <a href="http://www.facebook.com/spartacoaching" target="_blank">Facebook</a>, and watching our <a href="http://www.youtube.com/spartacoaching" target="_blank">Youtube</a> channel.</div><br/><br/>

<form name="coachform" method="post" action="storeRegistration.php" onsubmit="return validateForm('coachForm');">
<div id="validationErrors"></div>
<font class="astrik">* </font><font class="reqfields">Required Fields</font><br/><br/>
<table class="regform">
	<tr>
		<td class="field"><font class="astrik">* </font>First Name:</td>
		<td><input name="coach_fname" type="text" size="30" maxlength="30"/></td>
		<td></td>
		<td class="field"><font class="astrik">* </font>Last Name:</td>
		<td><input name="coach_lname" type="text" size="30" maxlength="30"/></td>
	</tr>
	<tr>
		<td class="field"><font class="astrik">* </font>Birth Date:</td>
		<td>
		<select name="coach_dobm" size="1"> <?php echo createDropdown($monthsArray); ?>  </select>/
		<select name="coach_dobd" size="1"> <?php echo createDropdown($monthdaysArray); ?>  </select>/
		<!--<input name="coach_dobm" type="text" size="2" maxlength="2" value="MM"/>/
		<input name="coach_dobd" type="text" size="2" maxlength="2" value="DD"/>/ -->
		<input name="coach_doby" type="text" size="4" maxlength="4" value="YYYY"/>
		</td>
		<td></td>
		<td class="field"><font class="astrik">* </font>Gender:</td>
		<td>
		<input type="hidden" name="coach_gender" value=""/>
		<input type="radio" name="coach_gender" value="Male"/>Male
		<input type="radio" name="coach_gender" value="Female"/>Female
		</td>
	</tr>
	<tr>
		<td class="field">Street Address:</td>
		<td><input name="coach_street" type="text" size="30" maxlength="30"/></td>
		<td></td>
		<td class="field">City:</td>
		<td><input name="coach_city" type="text" size="30" maxlength="30"/></td>
	</tr>
	<tr>
		<td class="field">State:</td>
		<td><select name="coach_state" size="1"> <?php echo createDropdown($statesArray); ?>  </select></td>
		<td></td>
		<td class="field"><font class="astrik">* </font>Zip:</td>
		<td><input name="coach_zip" size="5" maxlength="5"/></td>
	</tr>
	<tr>
		<td class="field"><font class="astrik">* </font>Email:</td>
		<td><input name="coach_email" type="text" size="30" maxlength="30"/></td>
		<td></td>
		<td class="field">Home Phone:</td>
		<td>
		(<input name="coach_hpareacode" type="text" size="3" maxlength="3"/>)
		<input name="coach_hp3" type="text" size="3" maxlength="3"/> -
		<input name="coach_hp4" type="text" size="4" maxlength="4"/>
		</td>
	</tr>
</table>

<br/>
<table class="regform">
	<tr>
		<td class="field"><font class="astrik">* </font>Extracurricular Expertise #1:</td>
		<td><select name="coach_extraexpertise1" size="1"> <?php echo createSpecialDropdown($extra_expertise); ?>  </select></td>
	</tr>
	<tr>
		<td class="field" colspan="2"><font class="astrik">* </font>Explain how you are qualified to be a coach for this extracurricular:</td>
	</tr>
	<tr>
		<td colspan="2"><textarea name="coach_question1" rows="5" cols="45"></textarea> <font class="smallfont">200 character max</font><br/><hr class="hrstyle"></hr></td>
	</tr>
	<tr>
		<td class="field">Extracurricular Expertise #2:</td>
		<td><select name="coach_extraexpertise2" size="1"> <?php echo createSpecialDropdown($extra_expertise); ?>  </select></td>
	</tr>
	<tr>
		<td class="field" colspan="2">Explain how you are qualified to be a coach for this extracurricular:</td>
	</tr>
	<tr>
		<td colspan="2"><textarea name="coach_question2" rows="5" cols="45"></textarea> <font class="smallfont">200 character max</font><br/><hr class="hrstyle"></hr></td>
	</tr>
	
	<tr>
		<td class="field">Extracurricular Expertise #3:</td>
		<td><select name="coach_extraexpertise3" size="1"> <?php echo createSpecialDropdown($extra_expertise); ?>  </select></td>
	</tr>
	<tr>
		<td class="field" colspan="2">Explain how you are qualified to be a coach for this extracurricular:</td>
	</tr>
	<tr>
		<td colspan="2"><textarea name="coach_question3" rows="5" cols="45"></textarea> <font class="smallfont">200 character max</font><br/><hr class="hrstyle"></hr></td>
	</tr>
</table>

<br/>

<div class="optionalfield">OPTIONAL INFORMATION</div><br/>
<div class="field">What is your availability to coach (Check all that apply)?</div>
<table class="schedual" border="1">
	<tr>
		<th></th>
		<th><input type="hidden" name="coach_availability[]" value=""/>SUN</th>
		<th>MON</th>
		<th>TUE</th>
		<th>WED</th>
		<th>THURS</th>
		<th>FRI</th>
		<th>SAT</th>
	</tr>
	<tr>
		<th>AM</th>
		<td><input type="checkbox" name="coach_availability[]" value="am_sun"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="am_mon"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="am_tue"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="am_wed"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="am_thurs"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="am_fri"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="am_sat"/></td>
	</tr>
	<tr>
		<th>Afternoon</th>
		<td><input type="checkbox" name="coach_availability[]" value="afternoon_sun"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="afternoon_mon"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="afternoon_tue"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="afternoon_wed"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="afternoon_thurs"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="afternoon_fri"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="afternoon_sat"/></td>
	</tr>
	<tr>
		<th>PM</th>
		<td><input type="checkbox" name="coach_availability[]" value="pm_sun"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="pm_mon"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="pm_tue"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="pm_wed"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="pm_thurs"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="pm_fri"/></td>
		<td><input type="checkbox" name="coach_availability[]" value="pm_sat"/></td>
	</tr>
</table>

<br/>

<iframe src ="resumeuploader.php" width="100%" height="80px" frameborder="0" >
  <p>Failed to load resume upload component. Your browser does not support iframes. Please use a different browser</p>
</iframe>

<table class="regform">
	<tr>
		<td class="field">References:</td>
		<td>&nbsp;&nbsp;(1) Name: </td>
		<td><input name="coach_ref1name" type="text" size="15" maxlength="30"/></td>
		<td>Email: </td>
		<td><input name="coach_ref1email" type="text" size="15" maxlength="30"/></td>
		<td>Phone: </td>
		<td><input name="coach_ref1phone" type="text" size="15" maxlength="12"/></td>
	</tr>
	<tr>
		<td></td>
		<td>&nbsp;&nbsp;(2) Name: </td>
		<td><input name="coach_ref2name" type="text" size="15" maxlength="30"/></td>
		<td>Email: </td>
		<td><input name="coach_ref2email" type="text" size="15" maxlength="30"/></td>
		<td>Phone: </td>
		<td><input name="coach_ref2phone" type="text" size="15" maxlength="12"/></td>
	</tr>
	<tr>
		<td></td>
		<td>&nbsp;&nbsp;(3) Name: </td>
		<td><input name="coach_ref3name" type="text" size="15" maxlength="30"/></td>
		<td>Email: </td>
		<td><input name="coach_ref3email" type="text" size="15" maxlength="30"/></td>
		<td>Phone: </td>
		<td><input name="coach_ref3phone" type="text" size="15" maxlength="12"/></td>
	</tr>
	<tr>
		<td colspan="5">Can SPARTA Coaching send an email to your references?<input type="hidden" name="Qemailtoref" value="">
		<input type="radio" name="Qemailtoref" value="Yes">Yes
		<input type="radio" name="Qemailtoref" value="No">No
		</td>
	</tr>
</table>

<br/>
<input name="lastfield" type="hidden">
<input type="submit" value="Submit" />
<input type="reset" value="Reset" />
</form>
<br/>
    </td>
    <td class="rightcol"></td>
  </tr>
</table>
<?php include ("footer.php"); ?>
</body>
</html>
