<?php

session_start();
include("connection.php");
include("functions.php");
$coach_data = check_coach_login($conn);
$r = mysqli_query($conn, "select * from users");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coach Dashboard</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="icon" href="https://i.pinimg.com/originals/f6/21/81/f62181c448fb37f2f57da69efac19d5d.png" />
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        block-size: border-box;
    }

    body {
        font-family: "Poppins", sans-serif;
        background-color: #000;
        height: 100vh;
    }

    div {
        width: 99;
        background-color: #000;
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        padding: 30px 5px;
    }

    div h3 {
        color: #fff;
        text-align: center;
        margin-bottom: 80px;
    }

    div h3 span {
        color: #faba22;
    }

    a {
        position: fixed;
        top: 20px;
        right: 30px;
        color: #fff;
        font-size: 18px;
        border-bottom: 2px solid #faba22;
        padding: 5px 5px;
        transition: 0.3s linear;
        text-decoration: none;
    }

    .home {
        position: fixed;
        top: 20px;
        left: 30px;
        width: fit-content;
        color: #fff;
        font-size: 18px;
        border-bottom: 2px solid #faba22;
        padding: 5px 5px;
        transition: 0.3s linear;
        text-decoration: none;
    }

    a:hover {
        background-color: #faba22;
        color: #000;
    }

    table {
        width: 90%;
        margin: auto;
        border: 2px solid #faba22;
        border-collapse: collapse;
        border-radius: 20px;
    }

    table tr td,
    th {
        color: #fff;
        text-align: center;
        padding: 10px;
        border: 2px solid #faba22;
    }

    table tr th {
        padding: 5px;
        background-color: #faba22;
        color: #000;
    }
</style>

<body>
    <div>
        <h3>Hello Coach <span><?php echo $coach_data['coachname']; ?></span></h3>
        <h3>Heres Your Avaliable Clients</h3>
        <table>
            <tr>
                <th>Client name</th>
                <th>Client email</th>
                <th>Client phone</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($r)) {
                echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['useremail'] . "</td>";
                echo "<td>" . $row['userphone'] . "</td>";
                echo "<tr>";
            }

            ?>
        </table>

    </div>
    <a href="couch_logout.php">Log out</a>
    <a class="home" href="index.php"><i class="fa fas fa-user"> HOME</a>
</body>

</html>