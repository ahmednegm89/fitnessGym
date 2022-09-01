<?php

session_start();
include("connection.php");
include("functions.php");
$admin_data = check_admin_login($conn);
$r = mysqli_query($conn, "select * from users");
$r_r = mysqli_query($conn, "select * from coaches");
$newuserid = "";
$newusername = "";
$newuseremail = "";
$newuserphone = "";
$newcoachid = "";
$newcoachname = "";
$newcoachemail = "";
$newcoachphone = "";
$userpasss = "";
$coachpasss = "";
$user_id = random_num(11);
$coach_id = random_num(11);


if (isset($_POST['user_id'])) {
    $newuserid = $_POST['user_id'];
}
if (isset($_POST['user_name'])) {
    $newusername = $_POST['user_name'];
}
if (isset($_POST['user_email'])) {
    $newuseremail = $_POST['user_email'];
}
if (isset($_POST['user_phone'])) {
    $newuserphone = $_POST['user_phone'];
}
if (isset($_POST['user_pass'])) {
    $userpasss = $_POST['user_pass'];
}
$sqlst = "";
if (isset($_POST['uadd'])) {
    $sqlst = "insert into users (user_id,username,useremail,userphone,userpass) values ('$user_id','$newusername','$newuseremail','$newuserphone','$userpasss')";
    mysqli_query($conn, $sqlst);
    header("location: dashboard.php");
}
if (isset($_POST['udelete'])) {
    $sqlst = "delete from users where  userphone =$newuserphone ";
    mysqli_query($conn, $sqlst);
    header("location: dashboard.php");
}
if (isset($_POST['uupdate'])) {
    $sqlst = "update users set username = '$newusername' ,useremail = '$newuseremail' , userphone =  '$newuserphone' where user_id =$newuserid ";

    mysqli_query($conn, $sqlst);
    header("location: dashboard.php");
}
if (isset($_POST['coach_id'])) {
    $newcoachid = $_POST['coach_id'];
}
if (isset($_POST['coach_name'])) {
    $newcoachname = $_POST['coach_name'];
}
if (isset($_POST['coach_email'])) {
    $newcoachemail = $_POST['coach_email'];
}
if (isset($_POST['coach_phone'])) {
    $newcoachphone = $_POST['coach_phone'];
}
if (isset($_POST['coach_pass'])) {
    $coachpasss = $_POST['coach_pass'];
}
$sqlst = "";
if (isset($_POST['cadd'])) {
    $sqlst = "insert into coaches (coach_id,coachname,coachemail,coachphone,coachpass) values ('$coach_id','$newcoachname','$newcoachemail','$newcoachphone','$coachpasss')";
    mysqli_query($conn, $sqlst);
    header("location: dashboard.php");
}
if (isset($_POST['cdelete'])) {
    $sqlst = "delete from coaches where  coach_id =$newcoachid ";
    mysqli_query($conn, $sqlst);
    header("location: dashboard.php");
}
if (isset($_POST['cupdate'])) {
    $sqlst = "update coaches set coachname = '$newcoachname' ,coachemail = '$newcoachemail' , coachphone =  '$newcoachphone' where coach_id =$newcoachid ";

    mysqli_query($conn, $sqlst);
    header("location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
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

    a.home-icon {
        position: fixed;
        top: 20px;
        color: #fff;
        font-size: 18px;
        border-bottom: 2px solid #faba22;
        padding: 5px 5px;
        transition: 0.3s linear;
        text-decoration: none;
        left: 30px;
        color: #faba22;
        border: none;
        font-size: 25px;
    }

    a.logout-btn {
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

    a.logout-btn:hover {
        background-color: #faba22;
    }

    .title {
        width: fit-content;
        margin: auto;
        margin-top: 50px;
        margin-bottom: 100px;
    }

    .title h3 {
        color: #fff;
    }

    .title h3 span {
        color: #faba22;
    }

    .total {
        width: 60%;
        margin: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .total div {
        width: 49%;
        border: 3px solid #faba22;
        text-align: center;
        margin-bottom: 100px;
    }

    .total div h3 {
        color: #fff;
    }

    .total div h4 {
        color: #faba22;
    }

    .table-form {
        width: 95%;
        margin: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        padding: 30px;
    }

    table {
        width: 60%;
        border: 2px solid #faba22;
        border-collapse: collapse;
        border-radius: 20px;
    }

    table tr td,
    th {
        color: #fff;
        text-align: center;
        padding: 10px;
    }

    table td {
        cursor: pointer;
    }

    table tr:hover {
        background-color: #faba22;
    }

    table tr th {
        padding: 5px;
        background-color: #faba22;
        color: #000;
    }

    form {
        width: 30%;
        padding: 10px;
        border: 3px solid #faba22;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-bottom: 50px;
    }

    form lable {
        color: #fff;
    }

    form input {
        width: 100%;
        margin-bottom: 30px;
        padding: 10px;
        font-size: 18px;
    }

    form button {
        width: 30%;
        padding: 10px;
        font-size: 18px;
        font-weight: 530;
        color: #000;
        border: none;
        outline: none;
        border-radius: 10px;
        transition: 0.3s linear;
        cursor: pointer;
    }

    form button:hover {
        background-color: #faba22;
        color: #fff;
    }

    hr {
        width: 100%;
        height: 3px;
        border: none;
        background-color: #faba22;
        margin-bottom: 50px;
    }

    .links {
        width: 100%;
        text-align: center;
        padding: 15px 0;
    }

    .links a {
        color: #faba22;
        margin: 10px;
    }
</style>

<body>
    <a href="index.php" class="home-icon"><i class="fa fas fa-house-user"></i></a>
    <a href="admin_logout.php" class="logout-btn">Log Out</a>
    <div class="title">
        <h3>Hello Admin <span><?php echo $admin_data['adminname']; ?></span></h3>
    </div>
    <div class="total">
        <div>
            <h3><?php
                $sql = "SELECT * from users";

                if ($result = mysqli_query($conn, $sql)) {
                    $rowcount = mysqli_num_rows($result);
                    printf("Total clients");
                }
                ?></h3>
            <h4><?php
                $sql = "SELECT * from users";

                if ($result = mysqli_query($conn, $sql)) {
                    $rowcount = mysqli_num_rows($result);
                    printf(" $rowcount ");
                }
                ?></h4>
        </div>
        <div>
            <h3><?php
                $sql_c = "SELECT * from coaches";
                if ($result_c = mysqli_query($conn, $sql_c)) {
                    $rowcount_c = mysqli_num_rows($result_c);
                    printf("Total coaches");
                }
                ?></h3>
            <h4><?php
                $sql_c = "SELECT * from coaches";
                if ($result_c = mysqli_query($conn, $sql_c)) {
                    $rowcount_c = mysqli_num_rows($result_c);
                    printf(" $rowcount_c ");
                }
                ?></h4>
        </div>
    </div>
    <div class="table-form">
        <table class="users_table">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($r)) {
                echo "<tr>";
                echo "<td>" . $row['user_id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['useremail'] . "</td>";
                echo "<td>" . $row['userphone'] . "</td>";
                echo "<tr>";
            }

            ?>
        </table>
        <!-- name email phone -->
        <form action="" method="POST">
            <lable>id :</lable>
            <input type="text" name="user_id" id="user_id" placeholder="id" required readonly />
            <lable>Name :</lable>
            <input type="text" name="user_name" id="user_name" placeholder="Name" required />
            <lable>Email :</lable>
            <input type="email" name="user_email" id="user_email" placeholder="Email" required />
            <lable>Phone :</lable>
            <input type="text" name="user_phone" id="user_phone" placeholder="Phone" maxlength="11" required />
            <lable>pass :</lable>
            <input type="password" name="user_pass" id="user_pass" placeholder="pass" />
            <button name="uadd">Add</button>
            <button name="udelete">Delete</button>
            <button name="uupdate">Update</button>
        </form>
        <hr />
        <table class="coaches_table">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($r_r)) {
                echo "<tr>";
                echo "<td>" . $row['coach_id'] . "</td>";
                echo "<td>" . $row['coachname'] . "</td>";
                echo "<td>" . $row['coachemail'] . "</td>";
                echo "<td>" . $row['coachphone'] . "</td>";
                echo "<tr>";
            }

            ?>
        </table>
        <!-- name email phone -->
        <form action="" method="POST">
            <lable>id :</lable>
            <input type="text" name="coach_id" id="coach_id" placeholder="id" required readonly />
            <lable>Name :</lable>
            <input type="text" name="coach_name" id="coach_name" placeholder="Name" required />
            <lable>Email :</lable>
            <input type="email" name="coach_email" id="coach_email" placeholder="Email" required />
            <lable>Phone :</lable>
            <input type="text" name="coach_phone" id="coach_phone" placeholder="Phone" maxlength="11" required />
            <lable>pass :</lable>
            <input type="password" name="coach_pass" id="coach_pass" placeholder="pass" />
            <button name="cadd">Add</button>
            <button name="cdelete">Delete</button>
            <button name="cupdate">Update</button>
        </form>
    </div>
    <div class="links">
        <a href="admin.php">Assign Admin</a>
        <a href="coach.php">Assign Coach</a>
    </div>

    <script>
        let userstable = document.querySelector(".users_table");
        let coachestable = document.querySelector(".coaches_table");
        for (let i = 1; i < userstable.rows.length; i++) {
            userstable.rows[i].onclick = function() {
                document.getElementById("user_id").value = this.cells[0].innerHTML;
                document.getElementById("user_name").value = this.cells[1].innerHTML;
                document.getElementById("user_email").value = this.cells[2].innerHTML;
                document.getElementById("user_phone").value = this.cells[3].innerHTML;
            }
        }
        for (let i = 1; i < coachestable.rows.length; i++) {
            coachestable.rows[i].onclick = function() {
                document.getElementById("coach_id").value = this.cells[0].innerHTML;
                document.getElementById("coach_name").value = this.cells[1].innerHTML;
                document.getElementById("coach_email").value = this.cells[2].innerHTML;
                document.getElementById("coach_phone").value = this.cells[3].innerHTML;
            }
        }
    </script>
</body>

</html>