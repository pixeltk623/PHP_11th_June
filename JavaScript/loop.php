<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		/** {
			padding: 0;
			margin: 0;
		}*/
		table tr td,th {
			padding: 10px;
		}
	</style>
</head>
<body>

	<div id="res">
		
	</div>
<!-- 	<div id="result"></div> -->
	<!-- <div id="table"></div>

	<div id="printableArea">
      <h1>Print me</h1>
</div>

	<a href="" onClick="printPage()">Print</a> -->

	<script type="text/javascript">


		function httpGet(theUrl) {
    		var xmlHttp = new XMLHttpRequest();
    		xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
    		xmlHttp.send( null );
    		return xmlHttp.responseText;
		}

		var allData = httpGet("http://localhost/php_11th_june/mvc/allCourse");

		var finalData = JSON.parse(allData);

		var html = '';

		html += "<table border='1' style='border-collapse: collapse; width: 100%;'>";
			html += "<tr>";
				html += "<th>Sr.No</th>";
				html += "<th>Course Name</th>";
				html += "<th>Class</th>";
				html += "<th>Date</th>";
				html += "<th>Action</th>";
			html += "</tr>";
			for (var i = 0; i < finalData.length; i++) {
				html += "<tr>";
					html += "<td>"+(i+1)+"</td>";
					html += "<td>"+finalData[i]['name']+"</td>";
					html += "<td>"+finalData[i]['class']+"</td>";
					html += "<td>"+finalData[i]['created_at']+"</td>";
					html += "<td><a href = '' >Show</a>||<a href = '' >Edit</a>||<a href = '' >Delete</a></td>";
				html += "</tr>";
			}
		html += "</table>";

		document.getElementById('res').innerHTML = html;
		console.log(allData);

		console.log(JSON.parse(allData));

		// var allData = [{name: "sharvan", email: "s@gmail.com", mobile: "9835401515", salary: "152000"},
		// 	{name: "sharvan", email: "s@gmail.com", mobile: "9835401515", salary: "152000"},
		// 	{name: "sharvan", email: "s@gmail.com", mobile: "9835401515", salary: "152000"},
		// 	{name: "sharvan", email: "s@gmail.com", mobile: "9835401515", salary: "152000"},
		// 	{name: "sharvan", email: "s@gmail.com", mobile: "9835401515", salary: "152000"},
		// 	{name: "sharvan", email: "s@gmail.com", mobile: "9835401515", salary: "152000"},
		// 	{name: "sharvan", email: "s@gmail.com", mobile: "9835401515", salary: "152000"},
		// 	{name: "sharvan", email: "s@gmail.com", mobile: "9835401515", salary: "152000"},
		// 	{name: "sharvan", email: "s@gmail.com", mobile: "9835401515", salary: "152000"},
		// 	{name: "sharvan", email: "s@gmail.com", mobile: "9835401515", salary: "152000"},
		// 	{name: "sharvan", email: "s@gmail.com", mobile: "9835401515", salary: "152000"},
		// 	{name: "sharvan", email: "s@gmail.com", mobile: "9835401515", salary: "152000"},
		// 	{name: "sharvan", email: "s@gmail.com", mobile: "9835401515", salary: "152000"},
		// 	{name: "sharvan", email: "s@gmail.com", mobile: "9835401515", salary: "152000"}

		// 	];

		// console.log(allData);

		// for(var i = 1; i<=10; i++) {

			
		// 	if (i==5) {
		// 		continue;
		// 	}
		// 	console.log(i);

		// }

		// function printPage(divName) {
		// 	// var myWindow = window.open('','','width=500,height=500')
		// 	// myWindow.document.write("<h1>This is HTML</h1>")
		// 	// window.print();

		// 	var printContents = document.getElementById('table').innerHTML;

		// 	//console.log(document.body.innerHTML);

		// 	 var originalContents = document.body.innerHTML;

		// 	 document.body.innerHTML = printContents;

		// 	 window.print();

		// 	 document.body.innerHTML = originalContents;
		// }
		

		// //var myWindow = window.open('','','width=200,height=100')


		// // console.log(myWindow);

	 //    // myWindow.document.write("<h1>This is HTML</h1>")
	 //    // myWindow.print();

		// var html = "";
		// html += "<table border='1' style='border-collapse: collapse; width: 100%;'>";
		// for (var i = 1; i <= 8; i++) {
		// 	html += "<tr>";	
		// 	for(var j = 1; j<=8; j++) {

		// 		sum = i + j; // 1 + 1 // 2 

		// 		if (sum%2==0) {
		// 			html += "<td style='background-color: black;'></td>";
		// 		} else {
		// 			html += "<td style='background-color: white;'></td>";
		// 		}

				
		// 	}
		// 	html += "</tr>";
		// }
		// html += "</table>";

		// //console.log(html);
		// document.getElementById('table').innerHTML = html;




		// arrayData = ["Nirali", "Nilesh", "Sandeep", "Sunil","Sharvan","Priyanka","Rupa","Ritesh"];

	 // 	// console.log(arrayData[0]);	

	 // 	var html = '';
	 // 	html  += "<ul>";
	 // 	for(var i = 0; i<arrayData.length; i++) {


		// 	html += 	"<li>"+arrayData[i]+"</li>";
		// }
		// html += "</ul>";

		// console.log(html);

		// document.getElementById('result').innerHTML = html;

	 // 	for (var i = 0; i < arrayData.length; i++) {
	 // 		console.log(arrayData[i]);
	 // 	}

		//arrayData = new Array("Saab", "Volvo", "BMW");

		//console.log(arrayData);


		//1. for loop 
		//2. While loop
		//3. do while loop

		// for (var i = 1; i<=10; i++) {
			
		// 	console.log(i);
		// }

		// var i = 1;
		// while(i<=10) {

		// 	console.log(i);
		// 	i++;
		// }

		// var i = 1;
		// do {

		// 	console.log(i);

		// 	i++;
		// }while(i<=10)

	</script>
</body>
</html>