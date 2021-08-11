<?php

session_start();

// connect to the database
include("db.php");

if (isset($_SESSION['email'])){
    
    $email = $_SESSION['email'];
    $user_query = "SELECT * FROM users WHERE email = '$email'";
    $user_result = mysqli_query($conn, $user_query);
    $user = mysqli_fetch_assoc($user_result);
    $user_email = $user['email'];
    $total_uc = $user['total_uc'];
    $spent_uc = $user['spent_uc'];
    $requested_uc = 0;
    $paid_uc = 0;

    if ($_GET['card'] == 1){
        $requested_uc = 60;
        $updated_uc = $total_uc + $requested_uc;
        $query = "UPDATE users SET total_uc = '$updated_uc' WHERE email = '$user_email'";
        $result = mysqli_query($conn, $query);
        header('location: thankYou.php');
    }else if ($_GET['card'] == 2){
        $requested_uc = 400;
        $updated_uc = $total_uc + $requested_uc;
        $query = "UPDATE users SET total_uc = '$updated_uc' WHERE email = '$user_email'";
        $result = mysqli_query($conn, $query);
        header('location: thankYou.php');
    }else if ($_GET['card'] == 3){
        $requested_uc = 1500;
        $updated_uc = $total_uc + $requested_uc;
        $query = "UPDATE users SET total_uc = '$updated_uc' WHERE email = '$user_email'";
        $result = mysqli_query($conn, $query);
        header('location: thankYou.php');
    }else if ($_GET['card'] == 4){
        $requested_uc = 6000;
        $updated_uc = $total_uc + $requested_uc;
        $query = "UPDATE users SET total_uc = '$updated_uc' WHERE email = '$user_email'";
        $result = mysqli_query($conn, $query);
        header('location: thankYou.php');
    }

    if ($_GET['product'] == 1){
        $paid_uc = 100;
        if ($total_uc >= $paid_uc){
            $updated_uc = $total_uc - $paid_uc;
            $s_updated_uc = $spent_uc + $paid_uc;
            $query = "UPDATE users SET total_uc = '$updated_uc', spent_uc = '$s_updated_uc' WHERE email = '$user_email'";
            $result = mysqli_query($conn, $query);
            header('location: thankYou.php');
        }else {
            echo ("
                <script>
                    window.alert('Insufficient UC Balance! Purchase some UC');
                    window.location.href='plans.php';
                </script>
                ");
        }
    }else if ($_GET['product'] == 2){
        $paid_uc = 500;
        if ($total_uc >= $paid_uc){
            $updated_uc = $total_uc - $paid_uc;
            $s_updated_uc = $spent_uc + $paid_uc;
            $query = "UPDATE users SET total_uc = '$updated_uc', spent_uc = '$s_updated_uc' WHERE email = '$user_email'";
            $result = mysqli_query($conn, $query);
            header('location: thankYou.php');
        }else {
            echo ("
                <script>
                    window.alert('Insufficient UC Balance! Purchase some UC');
                    window.location.href='plans.php';
                </script>
                ");
        }
    }else if ($_GET['product'] == 3){
        $paid_uc = 700;
        if ($total_uc >= $paid_uc){
            $updated_uc = $total_uc - $paid_uc;
            $s_updated_uc = $spent_uc + $paid_uc;
            $query = "UPDATE users SET total_uc = '$updated_uc', spent_uc = '$s_updated_uc' WHERE email = '$user_email'";
            $result = mysqli_query($conn, $query);
            header('location: thankYou.php');
        }else {
            echo ("
                <script>
                    window.alert('Insufficient UC Balance! Purchase some UC');
                    window.location.href='plans.php';
                </script>
                ");
        }
    }
}else {
    header('location: home.php');
}

?>