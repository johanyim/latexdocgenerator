<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Latex Document Generator</title>
</head>

<body>
	<form action="action_page.php" method="post">
		<h1>LaTeX Document Generator</h1>
		
		<form action="/action_page.php" 
			  target="_blank">
		
		Document Title:<br>
		<input autocomplete="off"
			   type="text" 
			   name="docTitle" 
			   placeholder="The History of LaTeX">
		<br><br>

		Author:<br>
		<input autocomplete="off" 
			   type="text" 
			   name="author" 
			   placeholder="Smith J.">
		<br><br>
			
		Date:<br>
		<input type="date"
			   name="date"
			   >
		<br><br>
		
			
		Font Size (pt):<br>
		<input autocomplete="off"
			   type="number"
			   name="fontSize"
			   value="12">
		<br><br>
		
			
		Font Size (pt):<br>
		<input type="checkbox" name="includeAbstract" value="Yes"> Include Abstract<br>
		<br><br>
		
		<input type="text" id="member" name="member" value="">Number of members: (max. 10)<br/>
			<script src="add_fields.js"></script>
		<a href="#" id="filldetails" onclick="addFields()">Fill Details</a>
			
    	<div id="container"/>
<!--		Placement of container div tag changes the submit button-->
		<input type="submit" value="Submit">
			
		
		</form>
		
		
		
	
	
</form> 
</body>
</html>

	
	
</form> 
</body>
</html>
