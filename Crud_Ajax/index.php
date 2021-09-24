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
         
        <h1 class="text-warning text-center">Crud In Ajax</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Class</button>
        <br><br>
        <div id="table"></div>
    </div>

    <!---- Modal -->
     <div class="modal fade" id="myModal" data-backdrop="static">
        <div class="modal-dialog">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Add New Class</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
              <form method="POST">
                  <div class="form-group">
                      <label>Class</label>
                      <input type="text" name="cname" id="class" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Course Name</label>
                      <input type="text" name="cname" id="cname" class="form-control">
                  </div>
                  <div class="form-group">
                      <input type="submit" name="submit" class="btn btn-primary addData">
                  </div>
              </form>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
      </div>
      

    <!---- Modal -->


<script type="text/javascript">
    
    $(document).ready(function() {
        getAllData()

        $(document).on("click",".addData", function() {
            var cname = $("#class").val();
            var courseName = $("#cname").val(); 

            if (cname=='') {
                $("#class").addClass("is-invalid");
            } else {
                $("#class").removeClass("is-invalid");
            }

            if (courseName=='') {
                $("#cname").addClass("is-invalid");
            } else {
                $("#cname").removeClass("is-invalid");
            }


            if ((cname && courseName) != '') {

                var formData = {"class" : cname, "courseName": courseName};

                $.ajax({
                    type: 'POST',
                    url: "post.php",
                    data: formData,
                    success:function(data){ 
                        if (data=='true') {
                            $("#class").val('');
                            $("#cname").val(''); 
                            $("#myModal").modal('hide');
                            getAllData()
                        }
                    }
                });

            }
            

            //$("#myModal").modal('hide');

            return false;
        });

        function getAllData() {
            $.ajax({
                type: 'GET',
                url: "fetch.php",
                success:function(data){
                    var finalData = JSON.parse(data)
                    console.log(finalData.length);
                    var html = '';
                    html += '<table class="table table-bordered">';
                    html +=    '<thead>';
                    html +=      '<tr>';
                    html +=        '<th>Sr.No</th>';
                    html +=        '<th>Class</th>';
                    html +=        '<th>Name</th>';
                    html +=        '<th>Created At</th>';
                    html +=        '<th>Action</th>';
                    html +=      '</tr>';
                    html +=    '</thead>';
                    html +=    '<tbody>';
                    if(finalData.length==0) {
                        html +=      '<tr>';
                        html +=        '<td colspan="5" class="text-danger text-center">No Record Found</td>';
                        html +=      '</tr>';
                    } else {
                        for(let i = 0; i<finalData.length; i++) {
                            html +=      '<tr>';
                            html +=        '<td>'+(i+1)+'</td>';
                            html +=        '<td>'+finalData[i]['class']+'</td>';
                            html +=        '<td>'+finalData[i]['name']+'</td>';
                            html +=        '<td>'+finalData[i]['Datecreated']+'</td>';
                            html +=        '<td><button class="btn btn-primary">Show</button> <button class="btn btn-secondary">Edit</button> <button class="btn btn-danger">Delete</button></td>';
                            html +=      '</tr>';
                        }
                    }
                    html +=    '</tbody>';
                    html +=  '</table>';

                    //console.log(html);

                    $("#table").html(html);
                }

            });
        }

    });

</script>
</body>
</html>
