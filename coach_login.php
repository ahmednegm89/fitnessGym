<?php
session_start();
include("connection.php");
include("functions.php");
if (isset($_SESSION['coach_id'])) {

    header("location: coach_profile.php");
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $coachemail =  $_POST['coachemail'];
    $coachpass =  $_POST['coachpass'];
    $query = "select * from coaches where coachemail = '$coachemail' limit 1 ";
    $res =  mysqli_query($conn, $query);

    if ($res) {
        if ($res && mysqli_num_rows($res) > 0) {
            $coach_data = mysqli_fetch_assoc($res);
            if ($coach_data['coachpass'] === $coachpass) {
                $_SESSION['coach_id'] = $coach_data['coach_id'];
                header("Location: coach_profile.php");
                die;
            }
        }
        echo "please enter vaild email or password";
    } else {
        echo "please enter vaild email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fitness Gym_Coach</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="icon" href="https://i.pinimg.com/originals/f6/21/81/f62181c448fb37f2f57da69efac19d5d.png" />
</head>
<style>
    body {
        height: 100vh;
        background-image: url(images/1231.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        font-family: "Poppins", sans-serif;
    }

    form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 60%;
        background-color: #000;
        border: 3px solid #faba22;
        padding: 20px;
        border-radius: 20px;
    }

    form h1 {
        color: rgb(255, 255, 255);
        margin-bottom: 30px;
    }

    form input {
        width: 100%;
        margin-bottom: 30px;
        padding: 10px;
        border-radius: 10px;
        border: none;
        outline: none;
        font-size: 18px;
        transition: 0.3s linear;
        font-weight: bold;
    }

    form input[type="submit"] {
        width: 50%;
    }

    form a {
        padding: 10px;
        text-decoration: none;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        transition: 0.3s linear;
    }

    form a:hover {
        color: #faba22;
    }

    form input[type="submit"]:hover {
        background-color: #faba22;
        color: #000;
    }
</style>

<body>
    <form method="post">
        <h1><i class="fa fas fa-user"></i> Coach Login</h1>
        <input type="email" name="coachemail" placeholder="Email" />
        <input type="password" name="coachpass" placeholder="Password" />
        <input type="submit" name="login" value="Log in" />
        <a href="coach.php">Sign Up</a>
    </form>
</body>
</body>

</html>