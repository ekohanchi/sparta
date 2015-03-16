<html>
<head>
<title>Manage Coaches and Students</title>
<style type='text/css'>
	tr.rowhighlightc:hover { background:#F5E5D2; }
	tr.rowhighlights:hover { background:#2290CB; }
</style>
</head>
    <body>
    <?php
    include("login.php");
	?>
	<center>
		<h1>Manage Coaches and Students</h1>
	</center>
	<?php
include("include/configs.php");
include("menubar.php");

function displayFields($table,$fields2display) {
	if ($table == "coaches") {
		$headercolor = "#ECA239";
		$rowclass = "rowhighlightc";
	}
	elseif ($table == "students") {
		$headercolor = "#056FB8";
		$rowclass = "rowhighlights";
	}
	
	$query = "Select $fields2display from $table where regstatus != 0 order by inserted desc;";
	$result = mysql_query($query);
	if (!$result) {
	    die("<br>Query to show fields from table FAILED - Database may not have been set up!");
	}
	$numof_fields = mysql_num_fields($result);
	//echo "<br><b>Actions</b>: GSR = <b>G</b>enerate <b>S</b>ummary <b>R</b>eport";
	//echo " | Delete = <font color=\"red\">Choosing to delete a summary report is currently NOT easily reversable</font>";
	echo "<table width=\"100%\" align=\"center\" border=\"1\" cellpadding=\"2\" cellspacing=\"2\" font-size=\"11px\">";
	echo "<tr>";
		// printing table headers
	for($i=0; $i<$numof_fields; $i++) {
		$field = mysql_fetch_field($result);
		echo "<td bgcolor=\"{$headercolor}\" align=\"center\"><b>{$field->name}</b></td>";
	}
	echo "</tr>\n";
		// printing table rows
	$i=0;
	while($row = mysql_fetch_row($result)) {
		echo "<tr class=\"{$rowclass}\">";
		$queryall = "Select * from $table where regstatus != 0 order by inserted desc;";
		$resultall = mysql_query($queryall);
		$regid = mysql_result($resultall,$i,"regid");
		$i++;
		//echo "<td><input style=\"color: #400000; font-weight: bold\" type=button onclick=\"window.open('viewSummaryReport.php?srfid=$srfid','View Summary Report - $srfid',config='height=600,width=800, toolbar=no, menubar=no, scrollbars=yes, resizable=yes,location=no, directories=no, status=no')\" value=\"GSR\">";
		//echo "<input style=\"color: #347C17; font-weight: bold\" type=button onclick=\"document.location.href='editSummaryReport.php?srfid=$srfid'\" value=\"Edit\">";
		//echo "<input style=\"color: #FF0000; font-weight: bold\" type=button onclick=\"document.location.href='deleteSummaryReport.php?srfid=$srfid'\" value=\"Delete\"></td>";
		//echo "<td>$srfid</td>";
		foreach($row as $cell) {
			echo "<td>&nbsp;$cell</td>";
		}
		echo "</tr>\n";
	}
	mysql_free_result($result);
	echo "</table";
}
?>
<form name="filterform" method="post" action="manageData.php">
	Select which table and fields you wish to display: 
	<select name="filteroptionMenu">
		<option value="selectOption">Select a Filter Option</option>
		<option value="showallc">Show All Fields - Coaches</option>
		<option value="showalls">Show All Fields - Students</option>
	</select>
	<input type="hidden" name="hdn_filteropt" value="statusFilteropt"></input>
	<input type="submit" value="Update Table"></input>
</form>

<?php
include("db/opendb.php");

if (isset($_REQUEST['hdn_filteropt'])) {
	$filterchoice=$_REQUEST['filteroptionMenu'];
	//echo "request[filteroptionMenu]: [$filterchoice]";
	echo "<b>Display Fields</b>: ";
	switch ($filterchoice) {
		case "selectOption":
			echo "Select a filter option from above to display values";
			break;
		case "showallc":
			echo "All Coaches <i>except deleted</i> ordered by inserted descending";
			displayFields($coaches_table,'*');
			break;
		case "showalls":
			echo "All Students <i>except deleted</i> ordered by inserted descending";
			displayFields($students_table,'*');
			break;
	}
}
else {
	//echo "<b>Display Fields</b>: All <i>except deleted</i> ordered by inserted descending";
	//displayFields($students_table,'*');
	echo "<b>Select one of the options from above to display table here...</b>";
}

include("db/closedb.php");
	
	?>
	</body>
</html>