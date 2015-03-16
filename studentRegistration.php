<html>
<head>
<?php include ("include/allcss.php"); ?>

<title>Sparta Coaching | Student Registration</title>
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

<form name="studentform" method="post" action="storeRegistration.php" onsubmit="return validateForm('studentForm');">
<div id="validationErrors"></div>
<font class="astrik">* </font><font class="reqfields">Required Fields</font><br/><br/>
<table class="regform">
	<tr>
		<td class="field"><font class="astrik">* </font>First Name:</td>
		<td><input name="student_fname" type="text" size="30" maxlength="30"/></td>
		<td></td>
		<td class="field"><font class="astrik">* </font>Last Name:</td>
		<td><input name="student_lname" type="text" size="30" maxlength="30"/></td>
	</tr>
	<tr>
		<td class="field"><font class="astrik">* </font>Birth Date:</td>
		<td>
		<select name="student_dobm" size="1"> <?php echo createDropdown($monthsArray); ?>  </select>/
		<select name="student_dobd" size="1"> <?php echo createDropdown($monthdaysArray); ?>  </select>/
		<!--<input name="student_dobm" type="text" size="2" maxlength="2" value="MM"/>/-->
		<!--<input name="student_dobd" type="text" size="2" maxlength="2" value="DD"/>/-->
		<input name="student_doby" type="text" size="4" maxlength="4" value="YYYY"/>
		</td>
		<td></td>
		<td class="field"><font class="astrik">* </font>Gender:</td>
		<td>
		<input type="hidden" name="student_gender" value=""/>
		<input type="radio" name="student_gender" value="Male"/>Male
		<input type="radio" name="student_gender" value="Female"/>Female
		</td>
	</tr>
	<tr>
		<td class="field">Street Address:</td>
		<td><input name="student_street" type="text" size="30" maxlength="30"/></td>
		<td></td>
		<td class="field">City:</td>
		<td><input name="student_city" type="text" size="30" maxlength="30"/></td>
	</tr>
	<tr>
		<td class="field">State:</td>
		<td><select name="student_state" size="1"> <?php echo createDropdown($statesArray); ?>  </select></td>
		<td></td>
		<td class="field"><font class="astrik">* </font>Zip:</td>
		<td><input name="student_zip" size="5" maxlength="5"/></td>
	</tr>
	<tr>
		<td class="field"><font class="astrik">* </font>Email:</td>
		<td><input name="student_email" type="text" size="30" maxlength="30"/></td>
		<td></td>
		<td class="field">Home Phone:</td>
		<td>
		(<input name="student_hpareacode" type="text" size="3" maxlength="3"/>)
		<input name="student_hp3" type="text" size="3" maxlength="3"/> -
		<input name="student_hp4" type="text" size="4" maxlength="4"/>
		</td>
	</tr>
</table>

<br/>
<table>
	<tr>
		<td class="field" colspan="4"><font class="astrik">* </font>Extracurricular Interests (Check All That Apply):</td>
	</tr>
	<tr>
		<td height="10px"></td>
	</tr>
	<tr>
		<td class="intheading"><input type="hidden" name="student_interests[]" value=""/>SPORTS:</td>
		<td class="intheading">MUSIC:</td>
		<td class="intheading">PERFORMING ARTS:</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="Baseball"/>Baseball</td>
		<td><input type="checkbox" name="student_interests[]" value="Bass"/>Bass</td>
		<td><input type="checkbox" name="student_interests[]" value="Acting"/>Acting / Theater</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="Baseketball"/>Basketball</td>
		<td><input type="checkbox" name="student_interests[]" value="StringInstruments"/>Cello / Other String Instrument</td>
		
		<td><input type="checkbox" name="student_interests[]" value="BalletStudioDancing"/>Ballet / Studio Dancing</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="Fitness"/>Fitness</td>
		<td><input type="checkbox" name="student_interests[]" value="Drums"/>Drums</td>
		
		<td><input type="checkbox" name="student_interests[]" value="FilmVideoProduction"/>Film &amp; Video Production</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="Football"/>Football</td>
		<td><input type="checkbox" name="student_interests[]" value="Guitar"/>Guitar</td>
		
		<td><input type="checkbox" name="student_interests[]" value="ModernDance"/>Modern Dance / Hip Hop</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="Golf"/>Golf</td>
		<td><input type="checkbox" name="student_interests[]" value="HornBrassInstrument"/>Horn / Brass Instrument</td>
		
		<td><input type="checkbox" name="student_interests[]" value="OtherPerformingArts"/>Other
		<input name="student_otherperformingarts" type="text" size="15" maxlength="30"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="Gymncheerleading"/>Gymnastics / Cheerleading</td>
		<td><input type="checkbox" name="student_interests[]" value="Piano"/>Piano</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="Hockey"/>Hockey</td>
		<td><input type="checkbox" name="student_interests[]" value="Singing"/>Singing</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="Soccer"/>Soccer</td>
		<td><input type="checkbox" name="student_interests[]" value="ViolinViola"/>Violin / Viola</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="Softball"/>Softball</td>
		<td><input type="checkbox" name="student_interests[]" value="OtherMusic"/>Other
		<input name="student_othermusic" type="text" size="15" maxlength="30"/>		</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="Surfing"/>Surfing</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="Tennis"/>Tennis</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="TrackField"/>Track / Field</td>
	</tr>
	<tr>
	  <td><input type="checkbox" name="student_interests[]" value="OtherSports"/>
	    Other
	    <input name="student_othersports" type="text" size="15" maxlength="30"/>      </td>
    </tr>
    <tr>
    	<td colspan="3"></td>
    </tr>
	<tr>
		<td height="10px"></td>
	</tr>
	<tr>
		<td class="intheading">FINE ARTS:</td>
		<td class="intheading">TECH / OTHER HOBBIES:</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="Drawing"/>Drawing / Sketching</td>
		<td><input type="checkbox" name="student_interests[]" value="ComputerEngineering"/>Computer Engineering</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="Painting"/>Painting</td>
		<td><input type="checkbox" name="student_interests[]" value="Cooking"/>Cooking</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="Photography"/>Photography</td>
		<td><input type="checkbox" name="student_interests[]" value="Electronics"/>Electronics</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="Sculpture"/>Sculpture</td>
		<td><input type="checkbox" name="student_interests[]" value="Entrepreneurship"/>Entrepreneurship</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="student_interests[]" value="OtherFineArts"/>Other
		<input name="student_otherfinearts" type="text" size="15" maxlength="30"/></td>
		<td><input type="checkbox" name="student_interests[]" value="GraphicWebDesign"/>Graphic / Web Design</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="checkbox" name="student_interests[]" value="FashionInteriorDesign"/>Fashion / Interior Design</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="checkbox" name="student_interests[]" value="MartialArts"/>Martial Arts</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="checkbox" name="student_interests[]" value="Rocketry"/>Rocketry</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="checkbox" name="student_interests[]" value="Writing"/>Writing</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="checkbox" name="student_interests[]" value="OtherTechNHobbies"/>Other
		<input name="student_othertechnhobbies" type="text" size="15" maxlength="30"/></td>
	</tr>
</table>

<br/>
<!--
<div class="field"><font class="astrik">* </font>How often do you plan to hire a coach?</div>
<select name="student_coachhire1" size="1"> <?php echo createDropdown($coachhire1); ?>  </select> TIME(S) PER
<select name="student_coachhire2" size="1"> <?php echo createDropdown($coachhire2); ?>  </select>
<br/>

<br/>
-->

<table class="regform">
	<tr>
		<td class="field" colspan="4">Parent / Sponsors</td>
	</tr>
	<tr>
		<td class="field"><font class="astrik">* </font>First Name:</td>
		<td><input name="student_pfname" type="text" size="30" maxlength="30"/></td>
		<td></td>
		<td class="field"><font class="astrik">* </font>Last Name:</td>
		<td><input name="student_plname" type="text" size="30" maxlength="30"/></td>
	</tr>
	<tr>
		<td class="field"><font class="astrik">* </font>Email:</td>
		<td><input name="student_pemail" type="text" size="30" maxlength="30"/></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="5" class="field"><font class="astrik">* </font>Relationship to Student: 
		<select name="parentrelationship" size="1"><?php echo createDropdown($parentrelationship); ?></select></td>	

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
