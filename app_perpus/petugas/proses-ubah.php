<?php
if($_POST) {
    include '../config/database.php';
    include '../object/Petugas.php';

    $database = new Database();
    $db = $database->getConnection();

    $petugas = new Petugas($db);

    $petugas->Username = $_POST['username'];
    $petugas->Email = $_POST['email'];
    $petugas->Password = $_POST['password'];
    $petugas->Role = $_POST['role'];
    $petugas->ID = $_POST['id'];

    $petugas->update();
    
    if ($petugas->update() == true) {
        header("Location: http://localhost/app_perpus/petugas/index.php");
    }else {
        echo $exception->getMessage();
    }
}

?>