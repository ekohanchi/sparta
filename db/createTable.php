<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX,FOLLOW,NOIMAGEINDEX,NOIMAGECLICK">
</head>
<body>

<?php
/*
 * last modified: 3/21/10
 */
include("../include/configs.php");
include("../login.php"); 

$createquery_st="CREATE TABLE $students_table
(
	id int NOT NULL AUTO_INCREMENT,
	inserted Datetime NOT NULL,
	regstatus int(3),
	regid varchar(25) NOT NULL,
	student_fname varchar(30),
	student_lname varchar(30),
	student_dobm varchar(2),
	student_dobd varchar(2),
	student_doby varchar(4),
	student_gender varchar(10),
	student_street varchar(30),
	student_city varchar(30),
	student_state varchar(20),
	student_zip varchar(10),
	student_email varchar(30),
	student_hpareacode varchar(3),
	student_hp3 varchar(3),
	student_hp4 varchar(4),
	student_interests varchar(215),
	student_otherperformingarts varchar(30),
	student_othermusic varchar(30),
	student_othersports varchar(30),
	student_otherfinearts varchar(30),
	student_othertechnhobbies varchar(30),
	student_pfname varchar(30),
	student_plname varchar(30),
	student_pemail varchar(30),
	parentrelationship varchar(15),
	UNIQUE KEY id (id)
);";

$createquery_ct="CREATE TABLE $coaches_table
(
	id int NOT NULL AUTO_INCREMENT,
	inserted Datetime NOT NULL,
	regstatus int(3),
	regid varchar(25) NOT NULL,
	coach_fname varchar(30),
	coach_lname varchar(30),
	coach_dobm varchar(2),
	coach_dobd varchar(2),
	coach_doby varchar(4),
	coach_gender varchar(10),
	coach_street varchar(30),
	coach_city varchar(30),
	coach_state varchar(20),
	coach_zip varchar(10),
	coach_email varchar(30),
	coach_hpareacode varchar(3),
	coach_hp3 varchar(3),
	coach_hp4 varchar(3),
	coach_extraexpertise1 varchar(30),
	coach_question1 varchar(215),
	coach_extraexpertise2 varchar(30),
	coach_question2 varchar(215),
	coach_extraexpertise3 varchar(30),
	coach_question3 varchar(215),
	coach_availability varchar(215),
	coach_ref1name varchar(30),
	coach_ref1email varchar(30),
	coach_ref1phone varchar(15),
	coach_ref2name varchar(30),
	coach_ref2email varchar(30),
	coach_ref2phone varchar(15),
	coach_ref3name varchar(30),
	coach_ref3email varchar(30),
	coach_ref3phone varchar(15),
	Qemailtoref varchar(3),
	UNIQUE KEY id (id)
);";

if(isset($_GET['students']) || isset($_GET['coaches'])) {
	if(isset($_GET['students'])) {
		$table = $students_table;
		$createquery = $createquery_st;
		$param = students;
	}
	if(isset($_GET['coaches'])) {
		$table = $coaches_table;
		$createquery = $createquery_ct;
		$param = coaches;
	}
	
	//NOTE: nothing more to change from here on...
		
	if (isset($_POST['confirm'])) {
		include("opendb.php");
		$dropquery="DROP TABLE IF EXISTS $table;";
		mysql_query($dropquery) or die("<br><b>A MySQL error occured</b><br><b>Query:</b> " . $dropquery . " <br /> <b>Error:</b> (" . mysql_errno() . ") " . mysql_error());

		mysql_query($createquery) or die("<br><b>A MySQL error occured</b><br><b>Query:</b> " . $createquery . " <br /> <b>Error:</b> (" . mysql_errno() . ") " . mysql_error());
		
		echo "<br>Successful!<br>";
		echo "<br>Done creating (and populating) table with the following credentials...<br>";
		echo "<b>Table name:</b> $table <br>";
		echo "<b>DB:</b> $database <br>";
		include("closedb.php");
		
		echo "<br>Back to <a href=\"index.php\">Database Management</a>";
	}
	else {
		$action_script = "createTable.php?$param";
		?>
		<form method="post" action="<?php $action_script ?>">
		<br>This script will drop then create the Table with the following credentials:<br>
		<?php
			echo "<li>Database Host: $dbhost</li>";
			echo "<li>Database Username: $dbuser</li>";
			echo "<li>Database Name: $database</li>";
			echo "<li>Database Table: $table</li>";
			echo "<li>Create Query: <pre>$createquery</pre></li>";
		?>
		<p><input type="submit" name="confirm" value="OK">
		<input type=button onclick="document.location.href='index.php'" value="Cancel">
		</form> 
	<?php
	}
}
else {
	echo "<br>Back to <a href=\"index.php\">Database Management</a>";
//	header('Location: index.php');
}?>

</body>
</html>