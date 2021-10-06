<?php 
    
    // echo "<pre>";

    // print_r($data);
    
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
  <h2 class="text-center text-primary">Crud In CI</h2>
  <a href="<?php echo base_url('Crud/add_employee'); ?>" class="btn btn-primary mb-2">Add New Employee</a>    
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        foreach ($data as $key => $value) {
          ?>
        <tr>
          <td><?php echo ++$key; ?></td>
          <td><?php echo $value->name; ?></td>
          <td><?php echo $value->email; ?></td>
          <td><?php echo date("Y-m-d", strtotime($value->created_at)); ?></td>
          <td>
            <a href="" class="btn btn-secondary">Show</a>
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
          </td>
      </tr>
          <?php
        }
      ?>
      
     
    </tbody>
  </table>
</div>

</body>
</html>
