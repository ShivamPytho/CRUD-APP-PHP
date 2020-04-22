
<!doctype html>
<?php
include 'connection.php';



if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  //$image = $_FILES['fileToUpload']['name'];
  //print_r($image);die();
  //$tmp_name = $_FILES['fileToUpload']['tmp_name'];
  $password = $_POST['password'];
  $location = 'image/';
  $query =  "INSERT INTO 'register'  ('firstname', 'lastname', 'email', 'image', 'password') VALUES('$fname','$lname','$email','hny','$password')";
  //print_r($query);die();
  $insert = $conn->query($query); 
if ($insert) {
  echo 1;
}
else{
  echo 0;
}
}
 ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Register Data</title>
  </head>
  <body>
     <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" style="color: white;">PHP Crud applications</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
    <div class="container  my-3">
    <form id="FormId"  method="POST" >
       <div class="modal-body">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name:-</label>
    <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter  First Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last  Name:-</label>
    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control"   id="email"  name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

 <!--  <div class="form-group">
    <label for="image">Select image to upload:</label><br>
     
    <input type="file" name="fileToUpload" id="fileToUpload">
  </div> -->

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit" onclick="adddata()">Submit</button>
  </div>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('#FormId').bind('submit', function () {
    $.ajax({
    type: "post",
    url: "register.php",
    data: new FormData(this),
    success: function (data) {
      alert(data);
    }
});
});

</script>
  </body>
</html>