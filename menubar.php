<?php
/*
 * Created on Nov 14, 2010
 *
 */
?>
<html>
<head>
</head>
<body>

<form>
	<input style="color: green; font-weight: bold" type=button onclick="document.location.href='index.php'" value="Go to Sparta Coaching Home Page">
	<input style="color: orange font-weight: bold" type=button onclick="document.location.href='admin.php'" value="Admin Page">
	<input style="color: blue; font-weight: bold" type=button onclick="document.location.href='manageData.php'" value="Manage Students & Coaches">
	<?php
	if ($_SESSION['user'] == "ekohanchi") { ?>
		<input style="color: Maroon; font-weight: bold" type=button onclick="document.location.href='db/index.php'" value="DB Management">
	<?php
	}?>
	<br>
</form>

</body>
</html>