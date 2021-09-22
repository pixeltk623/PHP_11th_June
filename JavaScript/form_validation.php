<?php 
	
	if (isset($_POST['submit'])) {
		echo "Form Submitted";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style type="text/css">
		table {
			margin: auto;

		}

		table tr th,td {
			padding: 10px;
		}

		table tr th {
			text-align: left;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center; color: blue;">New User Registration </h1>
	
	<form method="post" enctype="multipart/form-data">
		<table border="1" style="border-collapse: collapse; width: 40%;">
			<tr>
				<th>Name</th>
				<td>
					<input type="text" name="fname" id="name" />
					<span id="errorN"></span>
				</td>
			</tr>
			<tr>
				<th>Email</th>
				<td>
					<input type="text"   name="email" id="email" >
					<span id="errorE"></span>
				</td>
			</tr>
			<tr>
				<th>Password</th>
				<td>
					<input type="password"  name="password" id="password" >
					<span id="errorP"></span>
				</td>
			</tr>
			
			<tr>
				<th>Gender</th>
				<td>
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
					<span id="errorG"></span>
				</td>
			</tr>
			<tr>
				<th>Hobby</th>
				<td>
					<input type="checkbox" name="hobby[]" value="Cricket">Cricket
					<input type="checkbox" name="hobby[]" value="Football">Football 
					<input type="checkbox" name="hobby[]" value="Badminton">Badminton 
					<span id="errorH"></span> 
				</td>
			</tr>
			<tr>
				<th>City</th>
				<td>
					<select name="city" id="city">
					   	<option value="">select</option>
						<option value="Vadodara">Vadodara</option>
						<option value="Darjeeling">Darjeeling</option>
						<option value="Bhavnagar">Bhavnagar</option>
						<option value="Anand">Anand</option>
					</select>
					<span id="errorC"></span>
				</td>
			</tr>
			
			
			<tr>
				<th colspan="2" style="text-align: center;">
					<input type="submit" name="submit" onclick="return validateForm();">
					
				</th>
			</tr>
			
		</table>
	</form>

	<button type="button" class="submit">Submit</button>
	<script type="text/javascript">
		$(document).ready(function() {

		$(document).on("click",".submit", function() {
			var myKeyVals = { A1984 : 1, A9873 : 5, A1674 : 2, A8724 : 1, A3574 : 3, A1165 : 5 }

				var saveData = $.ajax({
			    	type: 'POST',
			     	url: "insert.php",
			      	data: myKeyVals,
			      	dataType: "text",
			      		success: function(resultData) { alert("Save Complete") }
					});
				saveData.error(function() { alert("Something went wrong"); });
			});
		

		function validateForm() {
			
			var nameOfUser = document.getElementById('name').value;
			var email = document.getElementById('email').value;
			var password = document.getElementById('password').value;

			var gender = document.getElementsByName('gender');
			var hobby = document.getElementsByName('hobby[]');
			var city = document.getElementById('city').value;

			console.log(hobby);

			if (nameOfUser=='') {
				document.getElementById("errorN").innerHTML = "Name Can Not be Blank";
				document.getElementById("errorN").style.color = "red";
			} else {
				document.getElementById("errorN").innerHTML = "";
			}

			if (email=='') {
				document.getElementById("errorE").innerHTML = "Email Can Not be Blank";
				document.getElementById("errorE").style.color = "red";
			} else {
				document.getElementById("errorE").innerHTML = "";
			}

			if (password=='') {
				document.getElementById("errorP").innerHTML = "Password Can Not be Blank";
				document.getElementById("errorP").style.color = "red";
			} else {
				document.getElementById("errorP").innerHTML = "";
			}

			let genderCount = 0;
			let hobbyCount = 0;

			for (let i = 0; i < gender.length; i++) {

				if (gender[i].checked) {
					genderCount++;
				}
				
			}

			if (genderCount>0) {
				document.getElementById("errorG").innerHTML = "";
			} else {
				document.getElementById("errorG").innerHTML = "Pz Select The Gender";
				document.getElementById("errorG").style.color = "red";
			}

			for (let j = 0; j < hobby.length; j++) {
					
				if (hobby[j].checked) {
					hobbyCount++;
				}

			}

			if (hobbyCount==0) {
				//console.log('Pz Select The Hobby');
				document.getElementById("errorH").innerHTML = "Pz Select The Hobby";
				document.getElementById("errorH").style.color = "red";
			} else if(hobbyCount==1) {
				document.getElementById("errorH").innerHTML = "Pz Select atleast 2 Hobby";
				document.getElementById("errorH").style.color = "red";
				//console.log('Pz Select atleast 2 Hobby');
			} else {
				document.getElementById("errorH").innerHTML = "";
			}

			if (city=='') {
				document.getElementById("errorC").innerHTML = "City is Not Selected";
				document.getElementById("errorC").style.color = "red";
			} else {
				document.getElementById("errorC").innerHTML = "";
			}

			// console.log(hobbyCount);


			// console.log(nameOfUser + email + password);

			// if (nameOfUser!='' && email !='' && password!='' && city !='' && genderCount>0 && hobbyCount>1) {
			// 	return true;
			// }


			return false;
		}

		});

		// $(document).ready(function() {
		// 	var myKeyVals = { A1984 : 1, A9873 : 5, A1674 : 2, A8724 : 1, A3574 : 3, A1165 : 5 }

		// 	var saveData = $.ajax({
		// 	      type: 'POST',
		// 	      url: "insert.php",
		// 	      data: myKeyVals,
		// 	      dataType: "text",
		// 	      success: function(resultData) { alert("Save Complete") }
		// 	});
		// 	saveData.error(function() { alert("Something went wrong"); });
		// });

	</script>
</body>
</html>