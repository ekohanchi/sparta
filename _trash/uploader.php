<?php
include("include/configs.php");

$target_path = $target_path . basename( $_FILES['uploadedresume']['name']);

$filesize = $_FILES['uploadedresume']['size'];
$filetype = $_FILES['uploadedresume']['type'];

foreach ($_FILES as $file) {
    if ($file['tmp_name'] > '') {
      if (!in_array(end(explode(".", strtolower($file['name']))), $allowedExtensions)) {
      	die($file['name'].' is an invalid file type!<br/>'.'<a href="javascript:history.go(-1);">'.'Try Again.</a>');
      }
    }
}

if(move_uploaded_file($_FILES['uploadedresume']['tmp_name'], $target_path)) {
	echo "The file <b>". basename( $_FILES['uploadedresume']['name']). "</b> has been uploaded successfully!";
} else {
	echo "Sorry, there was a problem uploading your file.";
} 
//echo "<br>filesize: $filesize<br>";
//echo "filetype: $filetype";

/*
foreach ($_FILES as $file) {
    if ($file['tmp_name'] > '') {
      if (!in_array(end(explode(".", strtolower($file['name']))), $allowedExtensions)) {
      	die($file['name'].' is an invalid file type!<br/>'.'<a href="javascript:history.go(-1);">'.'&lt;&lt Go Back</a>');
      }
      else {
		if(move_uploaded_file($file['name']['tmp_name'], $target_path)) {
			echo "The file ".  basename( $file['name']['name'])." has been uploaded";
		} else {
		    echo "There was an error uploading the file, please try again!<br>";
		    echo "Return Code: " . $file['name']['error'] . "<br/>";
		}
      }
    }
}

/*
if(move_uploaded_file($_FILES['uploadedresume']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedresume']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}


if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 100000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
*/
?>