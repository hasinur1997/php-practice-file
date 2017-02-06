<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Form validation</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	
	<div class="form"> 
	
		<form action="" method="POST" id="form">
			<div class="form-group"> 
				<label for="name">Name: <span class="required">*</span></label>
				<input type="text" id="name" name="name" class="form-control"/>
				<i></i>
			</div>
			
			<div class="form-group"> 
				<label for="email">Email: <span class="required">*</span></label>
				<input type="text" id="email" name="email" class="form-control"/>
				<i></i>
			</div>
		
			
			<div class="form-group"> 
				<label for="phone">Phone: <span class="required">*</span></label>
				<input type="text" id="phone" name="phone" class="form-control"/>
				<i></i>
			</div>
		
		
			<div class="form-group"> 
				<input type="submit" value="Submit" class="btn"/>
			</div>
		
		</form>
		
	</div>
	
	<script type="text/javascript"> 
	
		
	
		document.getElementById("form").addEventListener("submit", function(e){
			e.preventDefault();
			
			// Validater for required field
			
			var input = document.querySelectorAll('input[type=text]');
			for(x = 0; x < input.length; x++){
				if(input[x].value == ""){
					input[x].nextElementSibling.innerHTML = "! "+input[x].id+"  is required";
				}else{
					input[x].nextElementSibling.innerHTML = "";
				}
			}
			
			// Validate for email
			var email = document.getElementById("email").value;
			    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			
			if(!email == ""){
				
				if(!email.match(re)){
					document.getElementById("email").nextElementSibling.innerHTML = "! This email is not valid";
				}else{
					document.getElementById("email").nextElementSibling.innerHTML = "";
				}
			}
			
			// Validate for name
			var name = document.getElementById("name").value;
			if(!name == ""){
				if(name.length > 26){
					document.getElementById("name").nextElementSibling.innerHTML = "! Your name should be maximum 25 characters";
				}
				else if(!isNaN(name) == true){
					document.getElementById("name").nextElementSibling.innerHTML = "! This field should contain only text";
				}
				else{
					document.getElementById("name").nextElementSibling.innerHTML = "";
				}
			}
			
			var phone = document.getElementById("phone").value;
			if(!phone == ""){
				if(isNaN(phone) == true){
					document.getElementById("phone").nextElementSibling.innerHTML = "This field should contain only digit";
				}else{
					document.getElementById("phone").nextElementSibling.innerHTML = "";
				}
			}

		});
		
	</script>
	
</body>
</html>