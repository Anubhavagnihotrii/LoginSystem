<?php
$showerror = false;
$showalert = false;

include 'partials/_dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['uname'];
    $email = $_POST['mail'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Check whether this user exists
    $existSql = "SELECT * FROM users WHERE email='$email';";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);

    if ($numExistRows > 0) {
        $showerror = "Email already exists";
    } else {
        if ($pass == $cpass) {
            $sql = "INSERT INTO `users` (`username`, `email`, `password`, `address`, `phone`, `date`) VALUES ('$username', '$email', '$pass', '$address', '$phone', current_timestamp());";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showalert = true;
            }
        } else {
            $showerror = "Passwords don't match";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            background-image: url('assets/one.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
</head>
<body>
    <?php require 'partials/_nav.php' ?>

    <?php
    if ($showalert) {
        echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert-success">
                <strong>Success</strong> Your account is now created.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
    if ($showerror) {
        echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert-success">
                <strong>ERROR</strong> ' . $showerror . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
    ?>

    <br>
    <h1 style="color:black; text-align:center">Fill the registration form to signup!</h1>
    <br>
    <div class="container col-md-6">
        <form action="signup.php" method="post">
            <div class="mb-3">
                <label for="uname" class="form-label">Username</label>
                <input type="text" class="form-control" id="uname" name="uname" required>
            </div>
            <div class="mb-3">
                <label for="mail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass" name="pass" required>
            </div>
            <div class="mb-3">
                <label for="cpass" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpass" name="cpass" required>
                <div id="emailHelp" class="form-text">Please type the same password as above.</div>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" required />
                <div id="emailHelp" class="form-text">Please enter the 10 digit phone number.</div>
            </div>
            <br>
            <button type="submit" class="btn btn-danger col-md-12">Signup</button>
        </form>
    </div>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
