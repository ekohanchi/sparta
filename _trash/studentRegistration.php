<?php
// Creation Date: Sep 6, 2010 9:38:46 AM
?>
<html>
<head>
<title>Sparta Coaching | Student Registration</title>
<link rel="stylesheet" type="text/css" href="css/regform.css" />
</head>
<body>
<?php
include("include/configs.php");

function createDropdown($array) {
	foreach($array as $key => $value) {
		echo "<option value=\"$key\">$value</option>\n";
	}
}
?>

<form name="sumrform" method="post" action="storeregistration.php">

<table>
	<tr>
		<td class="field"><font class="astrik">* </font>First Name:</td>
		<td><input name="stfname" type="text" size="30" maxlength="30"/></td>
		<td></td>
		<td class="field"><font class="astrik">* </font>Last Name:</td>
		<td><input name="stlname" type="text" size="30" maxlength="30"/></td>
		
	</tr>
	<tr>
		<td class="field"><font class="astrik">* </font>Birth Date:</td>
		<td>
		<input name="stdobm" type="text" size="2" maxlength="2" value="MM"/>/
		<input name="stdobd" type="text" size="2" maxlength="2" value="DD"/>/
		<input name="stdoby" type="text" size="4" maxlength="4" value="YYYY"/>
		</td>
		<td></td>
		<td class="field"><font class="astrik">* </font>Gender:</td>
		<td>
		<input type="hidden" name="stgender" value=""/>
		<input type="radio" name="stgender" value="Male"/>Male
		<input type="radio" name="stgender" value="Female"/>Female
		</td>
		
	</tr>
	<tr>
		<td class="field">Street Address:</td>
		<td><input name="ststreet" type="text" size="30" maxlength="30"/></td>
		<td></td>
		<td class="field">City:</td>
		<td><input name="stcity" type="text" size="30" maxlength="30"/></td>
		
	</tr>
	<tr>
		<td class="field">State:</td>
		<td><select name="ststate" size="1"> <?php echo createDropdown($statesArray); ?>  </select></td>
		<td></td>
		<td class="field">Zip:</td>
		<td><input name="stzip" size="5" maxlength="5"/></td>
	</tr>
	<tr>
		<td class="field"><font class="astrik">* </font>Email:</td>
		<td><input name="stemail" type="text" size="30" maxlength="30"/></td>
		<td></td>
		<td class="field"><font class="astrik">* </font>Home Phone:</td>
		<td>
		(<input name="sthpareacode" type="text" size="3" maxlength="3"/>)
		<input name="sthp3" type="text" size="3" maxlength="3"/> -
		<input name="sthp4" type="text" size="4" maxlength="4"/>
		</td>
	</tr>
</table>

<br/>
<table>
	<tr>
		<td class="field" colspan="4"><font class="astrik">* </font>Extracurricular Interests (Check All That Apply):</td>
	</tr>
	<tr>
		<td class="intheading"><input type="hidden" name="stinterests[]" value=""/>SPORTS:</td>
		<td class="intheading">MUSIC:</td>
		<td class="intheading">PERFORMING ARTS:</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="Baseball"/>Baseball</td>
		<td><input type="checkbox" name="stinterests[]" value="Bass"/>Bass</td>
		<td><input type="checkbox" name="stinterests[]" value="Acting"/>Acting / Theater</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="Baseketball"/>Basketball</td>
		<td><input type="checkbox" name="stinterests[]" value="Drums"/>Drums</td>
		<td><input type="checkbox" name="stinterests[]" value="Ballet"/>Ballet</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="Fitness"/>Fitness</td>
		<td><input type="checkbox" name="stinterests[]" value="Guitar"/>Guitar</td>
		<td><input type="checkbox" name="stinterests[]" value="FilmVideoProduction"/>Film &amp; Video Production</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="Football"/>Football</td>
		<td><input type="checkbox" name="stinterests[]" value="HornBrassInstrument"/>Horn/Brass Instrument</td>
		<td><input type="checkbox" name="stinterests[]" value="ModernDance"/>Modern Dance / Hip Hop</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="Golf"/>Golf</td>
		<td><input type="checkbox" name="stinterests[]" value="Piano"/>Piano</td>
		<td><input type="checkbox" name="stinterests[]" value="OtherPerformingArts"/>Other
		<input name="stotherperformingarts" type="text" size="15" maxlength="30"/></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="Gymncheerleading"/>Gymnastics / Cheerleading</td>
		<td><input type="checkbox" name="stinterests[]" value="Violin"/>Violin</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="Hockey"/>Hockey</td>
		<td><input type="checkbox" name="stinterests[]" value="Singing"/>Singing</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="Soccer"/>Soccer</td>
		<td><input type="checkbox" name="stinterests[]" value="StringInstruments"/>String Instruments</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="Softball"/>Softball</td>
		<td><input type="checkbox" name="stinterests[]" value="OtherMusic"/>Other
		<input name="stothermusic" type="text" size="15" maxlength="30"/>		</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="Surfing"/>Surfing</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="Tennis"/>Tennis</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="TrackField"/>Track/Field</td>
	</tr>
	<tr>
	  <td><input type="checkbox" name="stinterests[]" value="OtherSports"/>
	    Other
	    <input name="stothersports" type="text" size="15" maxlength="30"/>      </td>
    </tr>
    <tr>
    	<td colspan="3"></td>
    </tr>
	<tr>
		<td class="intheading">FINE ARTS:</td>
		<td class="intheading">TECH / OTHER HOBBIES:</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="Drawing"/>Drawing / Sketching</td>
		<td><input type="checkbox" name="stinterests[]" value="ComputerEngineering"/>ComputerEngineering</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="Painting"/>Painting</td>
		<td><input type="checkbox" name="stinterests[]" value="Cooking"/>Cooking</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="Photography"/>Photography</td>
		<td><input type="checkbox" name="stinterests[]" value="Electronics"/>Electronics</td>
		
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="Sculpture"/>Sculpture</td>
		<td><input type="checkbox" name="stinterests[]" value="Entrepreneurship"/>Entrepreneurship</td>
		
		
	</tr>
	<tr>
		<td><input type="checkbox" name="stinterests[]" value="OtherFineArts"/>Other
		<input name="stotherfinearts" type="text" size="15" maxlength="30"/></td>
		<td><input type="checkbox" name="stinterests[]" value="GraphicWebDesign"/>Graphic/Web Design</td>
		
		
	</tr>
	<tr>
		<td></td>
		<td><input type="checkbox" name="stinterests[]" value="FashionInteriorDesign"/>Fashion / Interior Design</td>
		
		
	</tr>
	<tr>
		<td></td>
		<td><input type="checkbox" name="stinterests[]" value="MartialArts"/>Martial Arts</td>
		
		
	</tr>
	<tr>
		<td></td>
		<td><input type="checkbox" name="stinterests[]" value="Rocketry"/>Rocketry</td>
		
	</tr>
	<tr>
		<td></td>
		<td><input type="checkbox" name="stinterests[]" value="Writing"/>Writing</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="checkbox" name="stinterests[]" value="OtherTechNHobbies"/>Other
		<input name="stothertechnhobbies" type="text" size="15" maxlength="30"/></td>
	</tr>
</table>

<br/>
<!--
<div class="field"><font class="astrik">* </font>How often do you plan to hire a coach?</div>
<select name="stcoachhire1" size="1"> <?php echo createDropdown($coachhire1); ?>  </select> TIME(S) PER
<select name="stcoachhire2" size="1"> <?php echo createDropdown($coachhire2); ?>  </select>
<br/>

<br/>
-->

<table>
	<tr>
		<td class="field" colspan="4">Parent/Sponsors</td>
	</tr>
	<tr>
		<td class="field"><font class="astrik">* </font>First Name:</td>
		<td><input name="stpfname" type="text" size="30" maxlength="30"/></td>
		<td></td>
		<td class="field"><font class="astrik">* </font>Last Name:</td>
		<td><input name="stplname" type="text" size="30" maxlength="30"/></td>
	</tr>
	<tr>
		<td class="field"><font class="astrik">* </font>Email:</td>
		<td><input name="stpemail" type="text" size="30" maxlength="30"/></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="5" class="field"><font class="astrik">* </font>Relationship to Student: 
		<select name="parentrelationship" size="1"><?php echo createDropdown($parentrelationship); ?></select></td>	

	</tr>
</table>
<br/>
<input type="submit" value="Submit" />
<input type="reset" value="Reset" />
</form>
<br/>
<br/>

</body>
</html>