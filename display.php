<?php
include 'connect.php';?>



<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">

<title>Crud Operation</title>

<link rel="stylesheet" href="https://maxcdn.
bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

<body>

<div class="container">
    <button class="btn btn-primary my-5"><a href="user.php"
    class="text-light">Add user</a>
    </button>

    <table class="table">
        <thread>
            <tr>
                <th scope="col">name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Password</th>
                <th scope="col">Operations</th>
            </tr>
        </thread>
        <tbody>
            <?php
        $sql="Select * from `crud`";
        $result=mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $mobile=$row['mobile'];
                $password=$row['password'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$password.'</td>
                <td>
                <button class="btm btn-primary"><a href="update.php"class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php"class="text-light">Delete</a></button>

                </td>
               </tr>';
            }
        }

        ?>
            

</body>
</html>


<!--$row=mysqli_fetch_assoc($result);
            echo $row['name'];
            $row=mysqli_fetch_assoc($result);
            echo $row['name'];