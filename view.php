<?php

include "connection.php";
ob_start();
session_start();
if(isset($_SESSION['email'])){

$query ="SELECT * FROM user";
$sql = mysqli_query($connection,$query);
if(!$sql){
    echo "Something went wrong". mysqli_connect($connection);
}

if(isset($_GET['delete'])){

    $user_id=$_GET['delete'];
    $query1 = "DELETE FROM user
    WHERE id = $user_id";

    $res=mysqli_query($connection,$query1);

    if(!$res){
        echo "something went wrong". mysqli_error($connection);

    }else{
        header("Location:view.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tableStyles.css">
    <title>Document</title>
</head>

<body>
        <table  class="container" >
            <thead>
                <th><h1>id</h1></th>
                <th><h1>name</h1></th>
                <th><h1>email</h1></th>
                <th><h1>possword</h1></th>
                <th><h1>position</th>
                <th></th>
                <th><h1><a class="btn btn-primary" href="logout.php">Logout</a></h1></th>
            </thead>
            <tbody>
                <?php 
                while($row=mysqli_fetch_assoc($sql)){
                
                ?>
                <tr>
                    <td><?php echo ($row['id'])?></td>
                    <td><?php echo ($row['name'])  ?></td>
                    <td><?php echo ($row['email']) ?></td>
                    <td><?php echo ($row['password']) ?></td>
                    <td><?php echo ($row['position'])?> </td>
                    <td><a href="edit.php?edit=<?php echo $row['id']?>">Edit</a> </td>
                    <td><a href="view.php?delete=<?php echo $row['id']?>">Delete</a> </td>
                </tr>
                <?php

            }
                 ?>

            </tbody>
        </table>
    </container>
</body>

</html>

<?php 
}else{
    header("Location:login.php");

}

?>