<?php

include("connector.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM showroom_daniel_table WHERE id_mobil=$id";
    $query = mysqli_query($db, $sql);

    if($delete) {
        session_start();
        $_SESSION['msg'] = 'dsuccess';
        redirect('ListCarmobil.php');
    } else {
        session_start();
        $_SESSION['msg'] = 'dfailed';
        return redirect('ListCarmobil.php');
    }
}
?>