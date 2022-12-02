<?php
include "../config/connector.php";

    $email = $_POST["email"];
    $password = $_POST["passwordi"];

    $querygetakun = "SELECT * FROM user_daniel WHERE email = '$email' AND password = '$password'";
    $getakun = mysqli_query($db, $querygetakun);
    $row = mysqli_fetch_assoc($getakun);

    if ( $password == $row["password"]){
        $_SESSION["newlogin"] = true;
        if (isset($_POST["remember"])){
            setcookie('id', $row["id"], strtotime('+7 days'), '/');
            header('Location:../pages/Homemobil.php');
            exit;
        }else{
            $_SESSION["sementara"] = $row["id"];
            header('Location:../pages/Homemobil.php');
            exit;
        }
    }else{
        echo "<script>alert('Password Salah')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../menu/login.php'>";
    }
?>
