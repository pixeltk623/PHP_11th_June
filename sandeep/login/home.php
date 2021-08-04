
<?php 
	session_start();
	if (!isset($_SESSION['u'])) {
		header("Location: login.php");
	}

    $connect = mysqli_connect("localhost","root", "", "test");
    $query = "SELECT * FROM students";
    $output = mysqli_query($connect,$query);
// $response = mysqli_fetch_object($output);

// while ($response[] = mysqli_fetch_assoc($output))
$response = array();
while ($response[] = mysqli_fetch_assoc($output)) {
    
}
$finalData = array_filter($response);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
	button{
		position: absolute;
		top: 8%;
		right: 8%;
		transform: scale(3);
		background-color: darkcyan;
		border: none;
	}
    h1{
        color: darkcyan; 

    }
	A{
		text-decoration: none;
		color: white;}

        table{
            width: 50%;
            margin:auto;
            border-collapse:collapse;
            border:5px solid darkcyan;
        }
      td{
          border: 1px solid darkcyan;
          padding: 15px;
      }
	</style>
</head>
<body>
    <h1>Welcome User</h1>
	<button>
		<a href="logout.php">LOG OUT</a>
	</button>
    <table >
        <tr>
            <th colspan="6" style="height: 50px;font-size:2.5rem;color:teal">STUDENT LIST</th>
        </tr>

        <?php 
            foreach ($finalData as $key => $value) {
                 ?>

             <tr>
               <td><?php echo $value['Sr.no']?></td>
               <td><?php echo $value['Name']?></td>
               <td><?php echo $value['Education']?></td>
               <td><?php echo $value['Course']?></td>
               
            </tr>
                <?php
             }
             ?>

<!-- <i class="<?php echo $value['class']; ?>"></i> <a href="#"><?php echo $value['name']; ?></a> -->
        
    </table>
</body>
</html>
