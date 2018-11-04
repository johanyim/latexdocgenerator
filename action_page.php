<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Your Document</title>
</head>

<body>
	<?php echo '\documentclass[',$_POST["fontSize"],']{article}'; ?><br>
	<?php echo '\title{',$_POST["docTitle"],'}'; ?><br>
	<?php echo '\author{',$_POST["author"],'}'; ?><br>
	
	
</body>
</html>