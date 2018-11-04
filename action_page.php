<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Your Document</title>
</head>

<body>
	<?php 
	
	echo '\documentclass[',$_POST["fontSize"],']{article}<br>';
	echo '\usepackage{blindtext}<br>';
	echo '\begin{document}<br><br>';
	
	echo '\title{',$_POST["docTitle"],'}<br>';
	echo '\author{',$_POST["author"],'}<br><br>';
	
	echo '\maketitle<br><br>'; ?>
	
	
	<?php
	
	if(isset($_POST['includeAbstract']) && $_POST['includeAbstract'] == 'Yes'){
		echo '\begin{abstract}<br>%[Your Abstract text here]<br>\end{abstract}';
	}

	
	?>
	
	
	
	
	
	<?php echo '\end{document}'; ?><br>
	
<!--Copy all button-->
	
</body>
</html>