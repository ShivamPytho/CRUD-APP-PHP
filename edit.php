<?php
include 'connection.php';
?>
<?php 
include 'connection.php';
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $selecteditdata = $conn->query("SELECT * FROM crudtable WHERE id= $id ")->fetchAll();
  //print_r($selecteditdata);die();

}
if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	//print_r($fname);die();
	$id = $_POST['id'];
	$sql = "UPDATE crudtable SET  firstname='$fname' ,lastname='$lname', email = '$email', number = '$number' WHERE id=$id";
	$res = $conn->query($sql); 
if ($res) {
	echo " <body><script src='https://code.jquery.com/jquery-3.3.1.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
	<script>
	Swal.fire({
  icon: 'success',
  title: 'Record Updated Successfully',
  showConfirmButton: false,
  timer: 2000
	})</script><script>setTimeout(function(){window.location.href = 'index1.php';},1000);</script></body>";
	
}
else{
	echo "Something Went Wrong";
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <title>Hello, world!</title>
  </head>
  <body>
  	<div class="container"></div>
   <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" style="color: white;">PHP Curd applications</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>

  </div>  
<div class="container my-4">
	<form action="edit.php" method="POST">
      	<input type="hidden" name="id" value="<?php if(!empty($selecteditdata) ){ echo $selecteditdata[0]['id']; } ?>">
        <div class="form-group">
          <label>First Name:</label>
          <input type="text" name="fname" id="firstname" class="form-control" value="<?php if(!empty($selecteditdata) ){ echo $selecteditdata[0]['firstname']; } ?>" placeholder="Enter First Name ">
        </div>

        <div class="form-group">
          <label>Last  Name:</label>
          <input type="text" name="lname" id="lastname" value="<?php if(!empty($selecteditdata) ){ echo $selecteditdata[0]['lastname']; } ?>" class="form-control" placeholder="Enter Last Name ">
        </div>

        <div class="form-group">
          <label>E-Mail:</label>
          <input type="email" name="email" value="<?php if(!empty($selecteditdata) ){ echo $selecteditdata[0]['email']; } ?>" id="email" class="form-control" placeholder="Enter Email Address ">
        </div>

        <div class="form-group">
          <label>Mobile Number :</label>
          <input type="number" name="number" value="<?php if(!empty($selecteditdata) ){ echo $selecteditdata[0]['number']; } ?>" id="number" class="form-control" placeholder="Enter Mobile Number ">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
        
                 </div>

</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  </body>
</html>