<?php
if($_GET["ID"]) {
    include '../config/database.php';
    include '../object/kategori.php';

    $database = new Database();
    $db = $database->getConnection();

    $kategori = new Kategori($db);
    $kategori->ID = $_GET['ID'];

    if($kategori->delete() == true){
        header("Location: http://localhost/app_perpus/kategori/index.php");
    }else {
        echo $exception->getMessage();
    }
}
?>