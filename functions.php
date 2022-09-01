<?php

function check_login($conn)
{

    if (isset($_SESSION['user_id'])) {

        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1 ";
        $res = mysqli_query($conn, $query);

        if ($res && mysqli_num_rows($res) > 0) {
            $user_data = mysqli_fetch_assoc($res);
            return $user_data;
        }
    }

    header("Location: login.php");
    die;
}
function check_coach_login($conn)
{

    if (isset($_SESSION['coach_id'])) {

        $id = $_SESSION['coach_id'];
        $query = "select * from coaches where coach_id = '$id' limit 1 ";
        $res = mysqli_query($conn, $query);

        if ($res && mysqli_num_rows($res) > 0) {
            $coach_data = mysqli_fetch_assoc($res);
            return $coach_data;
        }
    }

    header("Location: coach_login.php");
    die;
}

function check_admin_login($conn)
{

    if (isset($_SESSION['admin_id'])) {

        $id = $_SESSION['admin_id'];
        $query = "select * from admins where admin_id = '$id' limit 1 ";
        $res = mysqli_query($conn, $query);

        if ($res && mysqli_num_rows($res) > 0) {
            $admin_data = mysqli_fetch_assoc($res);
            return $admin_data;
        }
    }

    header("Location: admin_login.php");
    die;
}



function random_num($len)
{
    $text = "";
    if ($len < 8) {
        $len = 8;
    }

    $len = rand(4, $len);

    for ($i = 0; $i < $len; $i++) {
        $text .= rand(0, 5);
    }
    return $text;
}
