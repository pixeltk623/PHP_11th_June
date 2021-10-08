<?php 
    
   // echo "<pre>";

    // print_r(count($data));

    $toatalNumberOfPages = 3;
    

    // echo "<pre>";

    // print_r($this->session);
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

  <?php 

    if ($this->session->flashdata('message')) {
      ?>
      <div class="alert <?php echo $this->session->flashdata('className'); ?>">
        <?php echo $this->session->flashdata('message'); ?>
      </div>
      <?php
    }

  ?>

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
            <a href="<?php echo base_url('crud/edit')."/".$value->id ?>" class="btn btn-warning">Edit</a>
            <a href="<?php echo base_url('crud/delete')."/".$value->id ?>" class="btn btn-danger">Delete</a>
          </td>
      </tr>
          <?php
        }
      ?>
      
     
    </tbody>
  </table>

  <ul class="pagination justify-content-end">
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>

    <?php 

      for ($i=1; $i <= $toatalNumberOfPages; $i++) { 
        ?>
        <li class="page-item"><a class="page-link" href="<?php echo base_url('crud/pagination')."/".$i; ?>"><?php echo  $i; ?></a></li>
        <?php
      }

    ?>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</div>

</body>
</html>
