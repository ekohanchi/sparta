<?php
// Creation Date: Sep 20, 2010 1:50:51 AM
?>
<html>
<head>
<?php include ("include/allcss.php"); ?>

<title>Store Registration Details</title>
</head>
<body>
<?php include ("header.php"); ?>
<table class="centertable">
  <tr>
    <td class="leftcol"></td>
    <td class="contentbody">

<?php
 if ((isset($_REQUEST['student_fname'])) || (isset($_REQUEST['coach_fname']))) {
 	// # of student fields: 28
 	
 	if (isset($_REQUEST['student_fname'])) {
 		$whichform="student";
 	} elseif (isset($_REQUEST['coach_fname'])) {
 		$whichform="coach";
 	}
 	
 	include("include/configs.php");
 	
 	$Unixtime = time();
	$uniqueid = date("YmdHis", $Unixtime + -3.00 * 3600);	//new method of uniqueid
	$regid = "${uniqueid}";
	$lastfieldtrigger = false;
	
	$sql_values = "'',";		
	$sql_values = "$sql_values now(),";
	
	// if firstname or lastname contains "test" then set regstatus to 10, else to 100
	if ($whichform == "student") {
		if (((strlen(strstr(strtolower($_REQUEST['student_fname']),"test"))>0)) ||
		(((strlen(strstr(strtolower($_REQUEST['student_lname']),"test"))>0))))  {
		$regstatus=10;
		$regstatus_msg="Test";
		} else {
			$regstatus=100;
			$regstatus_msg="";
		}
	} elseif ($whichform == "coach") {
		if (((strlen(strstr(strtolower($_REQUEST['coach_fname']),"test"))>0)) ||
		(((strlen(strstr(strtolower($_REQUEST['coach_lname']),"test"))>0))))  {
		$regstatus=10;
		$regstatus_msg="Test";
		} else {
			$regstatus=100;
			$regstatus_msg="";
		}
	}


	$sql_values = "$sql_values'$regstatus',";
	$sql_values = "$sql_values'$regid',";
		//error statement
	//$sql_values = "$sql_values$regid',";
	
		// Debugging purposes only
	$keyvaluepair_array = array();
	$keyvaluepair_array["id"] = "1";
	$keyvaluepair_array["inserted"] = "now()";
	$keyvaluepair_array["regstatus"] = "$regstatus";
	$keyvaluepair_array["regid"] = "$regid";
		// Debugging purposes only end
		
	foreach (array_keys($_REQUEST) as $k) {
		if ($k == "student_interests") {
			$interests = $_REQUEST[$k];
			$value = "";
			while (list ($krs,$vrs) = @each ($interests)) {
				if ($vrs == "") {
					$value = "$value $vrs";
				} else {
					$value = "$value $vrs, ";
				}
			}
		}
		elseif ($k == "coach_availability") {
			$interests = $_REQUEST[$k];
			$value = "";
			while (list ($krs,$vrs) = @each ($interests)) {
				if ($vrs == "") {
					$value = "$value $vrs";
				} else {
					$value = "$value $vrs, ";
				}
			}
		}
		elseif ($k == "lastfield") {
			$value = "";
			$lastfieldtrigger = true;
		}
		
		else {
			$value = $_REQUEST[$k];
		}	

			// store values to sql_values variable
		if (! $lastfieldtrigger) {
			$esc_value = mysql_escape_string($value);
			$sql_values = "$sql_values'$esc_value',";
				// Debugging purposes only
			$keyvaluepair_array["$k"] = "$value";
				// Debugging purposes only end
		}
		elseif ($lastfieldtrigger) {
			$lastchar = $sql_values[strlen($sql_values)-1];
			if ($lastchar == ',') {
					// removing the last character from the string, which is ,
				$sql_values = substr($sql_values,',',-1);
			}
		}
	}

			// Debugging purposes only
	if ($debugmsgs) {
		echo "<br>sql_values Value: [$sql_values]<br>";
		$j=1;
		foreach($keyvaluepair_array as $key => $value) {
			print "$j - $key: $value<br>";
			$j++;
		}
			// Debugging purposes only end
	}

	// Store values to DB
	include("db/opendb.php");
	
	if ($whichform == "student") {
		$insertquery = "INSERT INTO $students_table VALUES ($sql_values)";
	} elseif ($whichform == "coach") {
		$insertquery = "INSERT INTO $coaches_table VALUES ($sql_values)";
	}
		//$insertstatus value equals 1 when the query is successfull
	$insertstatus = mysql_query($insertquery);
	$insert_errmsg=("<b>A MySQL error occured for regid: $regid</b><br><br><b>Query:</b> " . $insertquery . " <br><br><b>Error:</b> (" . mysql_errno() . ") " . mysql_error() . "<br><br><br>");
	$insert_errmsg_fileformatted=("A MySQL error occured for regid: $regid\nQuery: " . $insertquery . " \nError: (" . mysql_errno() . ") " . mysql_error() . "\n***********************\n");
	
	include("db/closedb.php");
	
	if ($insertstatus != 1) {
		$sqlerrors_hndlr = fopen($sqlerrors, 'a');
		fwrite($sqlerrors_hndlr, $insert_errmsg_fileformatted);
		fclose($sqlerrors_hndlr);
		echo "$insert_errmsg";
		
		$to = "$error_emailnotify";
		$subject = "Sparta Coaching - $whichform Registration Submission ERROR message";
		$message = "A $whichform Registration form with regid: $regid has been submitted, but there were errors in storing the values<br>";
		$message .= "sql error statement: $insert_errmsg";
		$headers = "From: spartacoaching@noreply.com\r\n";
		$headers .= "Reply-To: spartacoaching@noreply.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
		mail( $to, $subject, $message, $headers );
		//Emailing srfid notification DONE
		
		?>
		A report of this error message has been emailed to the administrator<br/><br/>
		Please <a href="index.php">try again!</a>
		<?php
	}
	else {
		
		if ($whichform == "student") {
			?>
			Thank you for registering with SPARTA Coaching.  Soon, you will have the ability to select a Coach to develop your interest, 
			promote your talents, and access innovative resources to help you reach your goals and master the extracurricular you are 
			passionate about. Welcome to the SPARTA Coaching experience. You will receive an email for the upcoming launch.
			<br/><br/>
			Good luck!
			<?php
		}
		elseif ($whichform == "coach") {
			?>
			Thank you for your interest in Sparta Coaching.  Soon, Students will have the ability to hire Coaches, and Coaches 
			will have access the innovative resources of the SPARTA Coaching site to develop your network, acquire experience in 
			your areas of interest, and market your growth. You will receive an email for the upcoming launch.
			<br/><br/>
			Good luck!
			<?php
		}
		else {
			echo "Registration form has been submitted";	
		}
	}


}
/*else {
	header("Location: index.php");
	exit;
	//echo "Nothing to display here";
}*/

?>

    </td>
    <td class="rightcol"></td>
  </tr>
</table>
<?php include ("footer.php"); ?>
</body>
</html>