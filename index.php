<!DOCTYPE html>
<html>
<head>
 <title>Home</title>
</head>
<body>
<div id="body">
	<form action="upload.php" name="img_compress" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<button type="submit" name="btn-upload">upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?><br><br><br>
        
    <?php
	$sql="SELECT * FROM tbl_uploads ORDER BY id DESC";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
    {
		?>
     <img src="uploads/<?php echo $row['file'] ?>" width="100%" height="100%">
    <?php
}
	?>
   
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
	}
	?>
</div>
</body>
</html>