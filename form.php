
<?php 
include "connection.php";
if(isset($_POST['submit'])){
$name= $_POST["name"];
$email= $_POST["email"];
$position= $_POST["position"];
$password= $_POST["password"];


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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Register Today</h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" action="" method="POST">

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                <div class="valid-feedback">Username field is valid!</div>
                                <div class="invalid-feedback">Username field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                <div class="valid-feedback">Email field is valid!</div>
                                <div class="invalid-feedback">Email field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <select class="form-select mt-3" name="position" required>
                                    <option selected disabled value="">Position</option>
                                    <option value="jweb">Junior Web Developer</option>
                                    <option value="sweb">Senior Web Developer</option>
                                    <option value="pmanager">Project Manager</option>
                                </select>
                                <div class="valid-feedback">You selected a position!</div>
                                <div class="invalid-feedback">Please select a position!</div>
                            </div>


                            <div class="col-md-12">
                                <input class="form-control" type="password" name="password" placeholder="Password" required>
                                <div class="valid-feedback">Password field is valid!</div>
                                <div class="invalid-feedback">Password field cannot be blank!</div>
                            </div>

                            <div class="form-button mt-3">
                                <button id="submit" name="submit" type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>