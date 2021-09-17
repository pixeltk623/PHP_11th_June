<!DOCTYPE html>
<html>
<head>
	<title>Js</title>
</head>
<body>

	<div style="float: right; width: 250px; height: 100px; background-color: black; color: white; font-size: 30px; text-align: center; border-radius: 10px;">
		<h3 id="time">00:15:15</h3>
	</div> 


	<form method="POST">
		<label>Enter Your Number</label>
		<input type="text" name="number" id="number">
		<span id="error"></span>
		<br><br>
		<input type="submit" name="submit" onclick="return getTheNumber()">

		<!-- <button type="button" onclick="getTheNumber()">Submit</button> -->
	</form>

	<div id="result"></div>

	<script type="text/javascript">
		var dateTime = new Date();

		function getRealTime() {
			var dateTime = new Date();
			hours = dateTime.getHours();
			minutes = dateTime.getMinutes();
			seconds = dateTime.getSeconds();

			var completeTime = (hours<10) ? '0'+hours : hours + " : " +((minutes<10) ? '0'+minutes : minutes)  + " : " +((seconds<10) ? '0'+seconds : seconds);

			console.log(completeTime);

			document.getElementById("time").innerHTML = completeTime;

		}

	// const date = new Date('August 19, 1975 00:15:30');


	// function formatAMPM(date) {
	//   var hours = date.getHours();
	//   var minutes = date.getMinutes();

	//   if (hours>=12) {
	//   	ampm = "PM"
	//   } else {
	//   	ampm = "AM"
	//   }

	//   if (hours>12) {

	//   	hours = hours-12; // 13 - 12 = 1 // 24-12 = 12

	//   	if (hours==0) {
	//   		hours = "00";
	//   	} else {
	//   		hours;
	//   	}

	//   } else {
	//   	hours;
	//   }



	//   console.log(hours);

	// }

	// console.log(formatAMPM(date));


		var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];

    	var months = ['January','February','March','April','May','June','July','August','September','October','November','December'];


		

		console.log(dateTime);

		let today = dateTime.toLocaleDateString()

		var now = Date.now()



		console.log(now);


		var day = dateTime.getDay()
		var month = dateTime.getMonth()
		var year = dateTime.getFullYear()

		console.log(day);
		console.log(month);
		console.log(year);

		console.log(days[day]);	
		console.log(months[month]);	

		hours = dateTime.getHours();
		minutes = dateTime.getMinutes();
		seconds = dateTime.getSeconds();

		console.log(hours);
		console.log(minutes);
		console.log(seconds);

		// var completeTime = (hours<10) ? '0'+hours : hours + " : "+(minutes<10) ? '0'+minutes : minutes+" : "+(seconds<10) ? '0'+seconds : seconds;

		var completeTime = (hours<10) ? '0'+hours : hours + " : " +((minutes<10) ? '0'+minutes : minutes)  + " : " +((seconds<10) ? '0'+seconds : seconds);

		console.log(completeTime);

		document.getElementById("time").innerHTML = completeTime;

		setInterval(function() {

			 getRealTime()

		}, 1000);



		function getTheNumber() {
			var number =  parseInt(document.getElementById('number').value);

			
			if (isNaN(number)) {
				document.getElementById("error").innerHTML = "Number can not be blank";
				document.getElementById("error").style.color = "red";
			} else {
				document.getElementById("error").innerHTML = "";

				if (number%2==0) {
					document.getElementById("result").innerHTML = "Even";
				} else {
					document.getElementById("result").innerHTML = "Odd";
				}
			}

		

			return false;
		}

		// if (true) {}

		// if (true) {} else {}

		// if (true) {} else if {} else {}

		// switch() {

		// }

		// for (var i = 0; i < Things.length; i++) {
		// 	Things[i]
		// }

		// while() {

		// }

		// do {

		// }while()




	</script>
</body>
</html>