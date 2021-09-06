<html>
<head>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"/>
 

</head>

<body>

<div class="containner-fluid" style="margin-left:2%">
    <div class="row">
        <div class="col-md-10 col-xs-12">
            <h3 style="margin-lef:1%">Manage Category</h3>
            
<hr style="color:soild red 1px">
            
<table id="example" class="table table-resposive table-bordered  display" style="width:130%; padding:15px;">
        <thead>
            <tr>
                <th>id</th>
                <th>category</th>
                <th>craete date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $cnt=1;
                foreach($st as $st1)
                {
                ?>
                <tr>
                    <td><?php echo $cnt;?></td>
                    <td><?php echo $st1["categories"];?></td>
                    <td><?php echo $st1["date"];?></td>
                    <td> 
                    <a href="<?php echo $mainurl;?>addcategory" class="btn btn-sm btn-info"><span class="fa fa-users"></span> Add</a> |
                    
                    <a href="<?php echo $mainurl;?>editcategory?edcat_id=<?php echo $st1["Cat_id"];?>" class="btn btn-sm btn-success"><span class="fa fa-edit"></span> Edit</a> |
                         <a href="<?php echo $mainurl;?>managecategory?del_cid=<?php echo $st1["Cat_id"];?>" onclick="return confirm('Are You sure to Delete Account ?')" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span> Delete</a></td>
                </tr>
                <?php
                $cnt++;
                }
            ?>
        </tbody>
    </table>


 
</div>
</div>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
</body>
</html>                