<?php

include "../config/connector.php";

error_reporting(0);

session_start();

 

        $name= $_POST['nama'];
        $mail = $_POST['email'];
        $password = $_POST['passwordi'];
        $no = $_POST['no_hp'];

        $query = "INSERT INTO user_daniel (nama, email, password, no_hp) 
                    VALUE ('$name','$mail','$password','$no')";
        $insert = mysqli_query ($db,$query);

        if ($query) {
            echo "<script>alert('Data telah ditambahkan')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../menu/login.php'>";
            // header('Location: ../ListCarmobil.php?status=sukses');
        } else {
            echo "<script>alert('Data gagal ditambahkan')</script>";
            header('Location:../menu/login.php?status=gagal');
        }

?>
