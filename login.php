
<?php 
include "connection.php";
if(isset($_POST['login'])){

$email= $_POST["email"];
$password= $_POST["password"];


$query = "SELECT * FROM user WHERE email = '{$email}'";
$res= mysqli_query($connection,$query);
if(!$res){
    echo "somethng went wrong". mysqli_error($connection);
}else{
    
    if(mysqli_num_rows($res)===0){
        echo "User not Found";
    }else{
    while($row=mysqli_fetch_assoc($res)){

        $u_name= $row['name'];
        $u_password =$row['password'];
        $u_email=$row['email'];

    }

    if($u_email===$email & $u_password=== $password){
        session_start();
        $_SESSION["email"]=$u_email;
        $_SESSION["name"]=$u_name;
        header("Location:view.php");
    }else{
        echo "<pstyle='background-color:White'>user email and password didn't match</p>";
    }
}
}

}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Form</title>
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="./assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="text-align:center">Login</h4>
            <p class="card-description" style="text-align:center"> Sign In to Continue</p>
            <form class="forms-sample" method="POST" action="">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
               
               
               
                <button type="submit" name="login" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
            </form>
        </div>
    </div>
</body>
<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./assets/vendors/select2/select2.min.js"></script>
    <script src="./assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./assets/js/off-canvas.js"></script>
    <script src="./assets/js/hoverable-collapse.js"></script>
    <script src="./assets/js/misc.js"></script>
    <script src="./assets/js/settings.js"></script>
    <script src="./assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./assets/js/file-upload.js"></script>
    <script src="./assets/js/typeahead.js"></script>
    <script src="./assets/js/select2.js"></script>
</html>