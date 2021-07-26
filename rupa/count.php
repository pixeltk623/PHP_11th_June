<?php
  $listofcollege=array(
    array("cllge_name"=>"NeoTech",
          "estd"=>"2000",
          "branch"=>"30",
          "blocks"=>20),
    array("cllge_name"=>"Msu",
          "estd"=>"2010",
          "branch"=>"30",
          "blocks"=>20),
    array("cllge_name"=>"Navrachna",
          "estd"=>"2010",
          "branch"=>"30",
          "blocks"=>20),
    array("cllge_name"=>"IBM",
          "estd"=>"2010",
          "branch"=>"30",
          "blocks"=>20),
    array("cllge_name"=>"ITM",
          "estd"=>"2010",
          "branch"=>"30",
          "blocks"=>20)
  )
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>SR.No</th>
        <th>College Name</th>
        <th>ESTD</th>
        <th>Branch</th>
        <th>Blocks</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        foreach ($listofcollege as $key => $value) {
      ?>
      <tr>
      <td><?php echo ++$key; ?></td>
      <td><?php echo $value['cllge_name']; ?></td>
      <td><?php echo $value['estd']; ?></td>
      <td><?php echo $value['branch']; ?></td>
      <td><?php echo $value['blocks']; ?></td>
    </tr>
    <?php }?>
    </tbody>
  </table>
</div>

</body>
</html>