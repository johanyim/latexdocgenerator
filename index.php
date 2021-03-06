<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Latex Document Generator</title>
</head>

<body>
	<form name="myForm" action="action_page.php" method="post">
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
			   name="date">
		<br><br>
		
			
		Font Size (pt):<br>
		<input autocomplete="off"
			   type="number"
			   name="fontSize"
			   value="12">
			
		<br><br>
		
			
		Font Size (pt):<br>
		<input type="checkbox" name="includeAbstract" value="Yes"> Include Abstract<br>
		<br>
			
		
			
		<input type="button" id="sectionButton" value="Add Section Title">	
			
			<script>
			
			var number = 1;
			
			document.getElementById("sectionButton").onclick=function(){
				
				var secDiv = document.getElementById("secContainer");
				var input = document.createElement("input");
				input.type = "text";
				input.placeholder =  "Section " + number;
				input.name = "section" + number;
				secDiv.appendChild(input);
				secDiv.appendChild(document.createElement("br"));
				number = number + 1;
				
				
				
			}
			
			</script>
			
		<div id="secContainer"></div>
			
		<br>
		<input type="submit" value="Submit">
			
		
		</form>
		
		
		
	
	
</form> 
</body>
</html>

	
	
</form> 
</body>
</html>
