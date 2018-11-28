<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Your Document</title>
</head>

<body>
	<textarea name="copyText" cols="100" rows="50"><?php
	echo '\documentclass[',$_POST["fontSize"],']{article}	&#13;&#10;';
	echo '\usepackage{blindtext}							&#13;&#10;'; 
	echo '\begin{document}									&#13;&#10;';
	
	echo '\title{',$_POST["docTitle"],'}					&#13;&#10;';
	echo '\author{',$_POST["author"],'}						&#13;&#10;';
	
	echo '\maketitle										&#13;&#10;'; 
	
	if(isset($_POST['includeAbstract']) && $_POST['includeAbstract'] == 'Yes'){
		echo '\begin{abstract}								&#13;&#10;
		%[Your Abstract text here]							&#13;&#10;
		\end{abstract}';
	}

	
	
	for($i = 1; $i <= 3; $i++){
		
		try{
			echo '\section' . $i .' = ', $_POST['section' . $i], ' &#13;&#10;>';
		} catch(Exception $e){
			echo "error";
		}
		
	}
	
	echo '\end{document}';?></textarea>
	<br><br><br><br><br><br><br><br><br><br>
	
	
	
<!--Copy all button-->
	
</body>
</html>