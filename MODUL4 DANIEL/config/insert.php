<?php

if(include("connector.php")) {
    $fileName = $_FILES['foto']['name'];
    $tmpName = $_FILES['foto']['tmp_name'];
    $dirTarget = "../assets/images/";
    $upload = move_uploaded_file($tmpName, $dirTarget.$fileName);

    if($upload) {
        $carr = $_POST['mobil'];
        $ownr = $_POST['pemilik'];
        $merk = $_POST['merk'];
        $date = $_POST['date'];
        $desc = $_POST['deskripsi'];
        $imgs = $fileName;
        $paym = $_POST['pembayaran'];

        $query = "INSERT INTO showroom_daniel_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) 
                    VALUE ('$carr', '$ownr', '$merk', '$date', '$desc', '$imgs', '$paym')";
        $insert = mysqli_query ($db, $query);

        if($insert) {
            session_start();
            $_SESSION['msg'] = 'success';
            header('Location: ../pages/ListCarmobil.php');
        } else {
            session_start();
            $_SESSION['msg'] = 'failed';
            return header('Location: ../pages/ListCarmobil.php');
        }
    } else {
        echo "Gagal upload gambar";
    }
} else {
    session_start();
    $_SESSION['msg'] = 'cfailed';
    return header('Location: ../pages/ListCarmobil.php');
}

?>