<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into `crud` (name,email,mobile,password)
    values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data inserted successfully";
        header('location:dispaly.php');
    }
    else{
        die(mysqli_error($con));
    }
}


?>



<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,
initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://maxcdn.
bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<title> Hello world! </title>
</head>

<body>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label> Name </label>
                <input type="text" class="form-control"
                placeholder="Enter your name" name="name" autocomplete="off">
            </div>

            <div class="form-group">
                <label> Email </label>
                <input type="email" class="form-control"
                placeholder="Enter your email" name="email" autocomplete="off">
            </div>

            <div class="form-group">
                <label> Mobile </label>
                <input type="text" class="form-control"
                placeholder="Enter your mobile number" name="mobile" autocomplete="off">
            </div>

            <div class="form-group">
                <label> Password </label>
                <input type="text" class="form-control"
                placeholder="Enter your password" name="password" autocomplete="off">
            </div>



        <button type="submit" class="btn btn-primary" name="submit">Submit </button>
        </form>
    </div>
</body>

</html>
