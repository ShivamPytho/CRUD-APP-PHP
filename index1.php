<?php
include 'connection.php';

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

    <title>Register Date</title>
  </head>
  <body>


   <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" style="color: white;">PHP Crud applications</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>


     <div class="container my-3" >
    

    <div class="d-flex justify-content-end"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Register Data</button>
  </div>
    <h2  class="text-danger">All Recordes</h2>
    <div id="recordes_contant">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <?php 
            
                  $select = $conn->query("SELECT * FROM crudtable ORDER BY ID DESC")->fetchAll();
            ?>
            <tr>
                <th>Sr. No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Edit </th>
                <th>Delete</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
          <?php 
           if(!empty($select)){
            $i=0;
                   foreach($select as $row){
            $i=$i+1;   
          ?>
            <tr id="row_<?=$row['id'];?>">
                <td><?= $i; ?></td>
                <td><?=$row['firstname'];?></td>
                <td><?=$row['lastname'];?></td>
                <td><?=$row['email'];?></td>
                <td><?=$row['number'];?></td>
                <td><a href="edit.php?id=<?=$row['id'];?>"
                  style="color: white; font-family: bold;"><button type="button" class="btn btn-success" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a></td>
                <td><button type="button" class="btn btn-danger" onclick="detetedata(<?=$row['id'];?>);"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></td>
                <td><?=$row['date'];?></td>
            </tr>
            <?php }}?>
        </tbody>
    </table>

    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: Red;">Register Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="FormId">
      <div class="modal-body">
        <div class="form-group">
          <label>First Name:</label>
          <input type="text" name="" id="firstname" class="form-control" value="<?php if(!empty($selecteditdata) ){ echo $selecteditdata[0]['firstname']; } ?>" placeholder="Enter First Name ">
        </div>

        <div class="form-group">
          <label>Last  Name:</label>
          <input type="text" name="" id="lastname" class="form-control" placeholder="Enter Last Name ">
        </div>

        <div class="form-group">
          <label>E-Mail:</label>
          <input type="email" name="" id="email" class="form-control" placeholder="Enter Email Address ">
        </div>

        <div class="form-group">
          <label>Mobile Number :</label>
          <input type="number" name="" id="number" class="form-control" placeholder="Enter Mobile Number ">
        </div>

      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        <button type="button" class="btn btn-primary" onclick="addRecord()">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>   



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable();
} );
      function addRecord(){
        
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var email = $('#email').val();
        var number = $('#number').val();
       // alert(firstname);
        $.ajax({
          url:"codeindex1.php",
          type:"post",
          data:{ firstname : firstname,
                lastname : lastname,
                email : email,
                number:number,
          },
          success:function(data){
          if (data==1) {  
            setInterval(Swal.fire({
            icon: 'success',
            title: 'Record Added Sucessfully.',
            showConfirmButton: false,
            timer: 1500
          }), 2000);
            $('#exampleModal').modal('hide');
             
            //alert("Register Success");
          }
          else{
            Swal.fire({
            icon: 'error',
            title: 'Something Went Wrong',
            showConfirmButton: false,
            timer: 1500
          })
          }
          }

        });
      }
        function detetedata(id){
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
        $.ajax({
          url:"deletedata.php",
          type:"post",
          data:{id:id},
          success:function(data){
              if (data==1) {
                setInterval(Swal.fire({
            icon: 'success',
            title: 'Record Deleted Sucessfully.',
            showConfirmButton: false,
            timer: 1500
          }), 2000);
                  $('#row_'+id).hide();
              }
              else{

              }
          }
      })
    }
 })
}
    </script>
  </body>
</html>