<!DOCTYPE html>
<html>
<head>
	<title>Search User</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
	<script>
		function showSuggestion(str){
			if(str.length == 0){
				document.getElementById('output').innerHTML = '';
			} else {
				// Ajax Request
				var xmlhttp = new XMLHttpRequest();
				// Check to see if request finished and response is ready
				// and status OK
				xmlhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						document.getElementById('output').innerHTML = this.responseText;
					}
				}
				// Open a request along the query string
				xmlhttp.open("GET", "suggest.php?q="+str, true);
				xmlhttp.send();
			}
		}
	</script>
</head>
<body>
	<div class="container">
		<h1>Search Users</h1>
		<form>
			<label for="search-user">Search User:</label>
			<input type="text" id="search-user" class="form-control" onkeyup="showSuggestion(this.value)">	
		</form>
		<p>Suggestions: <span id="output" style="font-weight: bold"></span></p>
	</div>
</body>
</html>