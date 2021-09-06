<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"/>
 

</head>

<body>

<div class="container-fluid" style="float:left !important; margin-left:28%; margin-top:-40%; overflow:auto">
    <div class="row">
        <div class="col-md-12 col-xs-12" style="float:right">
            <h3 style="margin-lef:1%">Manage Product</h3>
            
<hr style="color:soild red 1px">
<table id="example" class="table table-resposive table-bordered  display" style="width:130%; padding:15px; overflow:auto">
        <thead>
            <tr>
                <th>id</th>
                <th>subcategory</th>
                <th>category</th>
                <th>image1</th>
                <th>image2</th>
                <th>image3</th>
                <th>Product Name</th>
                <th>QTY</th>
                <th>old price</th>
                <th>New price</th>
                <th>Date</th>
                <th>Description</th>
                <th style="width:250%; float:left; height:60px">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $cnt=1;
                foreach($product as $product1)
                {
                ?>
                <tr>
                    <td><?php echo $cnt;?></td>
                    <td><?php echo $product1["subcategories"];?></td>
                    <td><?php echo $product1["categories"];?></td>
                    <td><img src="<?php echo $mainurl.$product1["image1"];?>" width="50px" height="50px"></td>
                    <td><img src="<?php echo $mainurl.$product1["image2"];?>" width="50px" height="50px"></td>
                    <td><img src="<?php echo $mainurl.$product1["image3"];?>" width="50px" height="50px"></td>
                    <td><?php echo $product1["productname"];?></td>
                    <td><?php echo $product1["qty"];?></td>
                    <td><?php echo $product1["oldprice"];?></td>
                    <td><?php echo $product1["newprice"];?></td>
                    <td><?php echo $product1["date"];?></td>
                    <td><?php echo $product1["description"];?></td>
                    <td>
                    <a href="<?php echo $mainurl;?>AddProducts" class="btn btn-info btn-sm"><span class="fa fa-users"></span> Add</a>
                    <a href="<?php echo $mainurl;?>editproduct?edprodcut_id=<?php echo $product1["product_id"];?>" class="btn btn-success btn-sm"><span class="fa fa-edit"></span>Edit</a> |
                    <a href="<?php echo $mainurl;?>manageproduct?del_pro=<?php echo $product1["product_id"];?>" onclick="return confirm('Are You sure to Delete Account ?')" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a></td>
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