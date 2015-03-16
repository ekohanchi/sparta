<?php
include("include/configs.php");
include ("include/allcss.php"); 
?>

<form enctype="multipart/form-data" action="uploader.php" method="POST">
	<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $maxfilesize;?>" />
	<div class="field">Attach Resume (Optional):
	<input name="uploadedresume" type="file" size="30"/> <input type="submit" value="Upload File" /></div> 
</form>