<?php
include "connection.php";
ob_start();
    session_start();
    if (isset($_SESSION['email'])) {
    if (isset($_GET['edit'])) {
    

        $userid = $_GET['edit'];
        $query = "SELECT * FROM user WHERE id = $userid";

        $res = mysqli_query($connection, $query);

        if (!$res) {
            echo "something went wrong" . mysqli_error($connection);
        }


        if (isset($_POST['update'])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $position = $_POST["position"];
            $password = $_POST["password"];

            $query1 = "UPDATE user
        SET name='{$name}', email='{$email}', password ='{$password}',position = '{$position}'
        WHERE id = $userid";

            $resl = mysqli_query($connection, $query1);

            if (!$resl) {
                echo "something went wrong" . mysqli_error($connection);
            } else {
                header("Location:view.php");
            }
        }
    }

?>
    <!DOCTYPE html>
    <html lang="en">

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
        <div class="card-body">
            <h4 class="card-title" style="text-align:center">Edit</h4>
            <p class="card-description" style="text-align:center"> Update Your Details</p>

            <?php
            while ($row = mysqli_fetch_assoc($res)) {

            ?>
                <div class="card">
                    <form class="forms-sample" method="POST" action="">
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input value="<?php echo $row['name'] ?>"type="text" class="form-control" id="name" name="name"  required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" value="<?php echo $row['email'] ?>" class="form-control" id="email" name="email"  required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" value="<?php echo $row['password'] ?>" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="Position">Position</label>
                            <select class="form-control" name="position" id="position" required>
                                <option selected disabled value=""><?php echo $row['position'] ?></option>
                                <option value="jweb">Junior Web Developer</option>
                                <option value="sweb">Senior Web Developer</option>
                                <option value="pmanager">Project Manager</option>
                            </select>
                        </div>

                        <button type="submit" name="update" class="btn btn-primary mr-2">Submit</button>
                        
                    </form>
                </div>


            <?php } ?>
        </div>
    </body>
    <!-- JavaScript Bundle with Popper -->




<?php
} else {
    header("Location:login.php");
}

?>

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

    