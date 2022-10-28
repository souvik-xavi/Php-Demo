<!DOCTYPE html>
<?php 
include "connection.php";
if(isset($_POST['submit'])){
$name= $_POST["name"];
$email= $_POST["email"];
$position= $_POST["position"];
$password= $_POST["password"];
echo $name;

$query ="INSERT INTO user ( name, email, password, position) 
    VALUES ('$name', '$email', '$password', '$position')";


$sql = mysqli_query($connection,$query);

if(!$sql){
    echo "Something went Wrong" . mysqli_errno($connection);
}else{
    header("Location:view.php");
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
            <h4 class="card-title" style="text-align:center">Register</h4>
            <p class="card-description" style="text-align:center"> Sign up to Continue</p>
            <form class="forms-sample" method="POST" action="">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="ConfirmPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="ConfirmPassword" placeholder="Password" required>
                </div>
                <div class="form-group">
                <label for="Position">Position</label>
                <select class="form-control" name="position" id="position" required>
                                    <option selected disabled value="">Position</option>
                                    <option value="jweb">Junior Web Developer</option>
                                    <option value="sweb">Senior Web Developer</option>
                                    <option value="pmanager">Project Manager</option>
                                </select>
                                <div class="valid-feedback">You selected a position!</div>
                                <div class="invalid-feedback">Please select a position!</div>
                </div>
               
                <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
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