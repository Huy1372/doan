<?php
    $action = Utilities::get("action", 'index');
    switch ($action) {
        case 'index':
            include "./models/loaisach.php";
            include './views/loaisach/index.php';
            break;
        case 'add':
            include "views/loaisach/add.php";
            break;
        case "addNew":
            $maloai= Utilities::post("maloai");
            $tenloai= Utilities::post("tenloai");
            include "./models/loaisach.php";
            insertLoai([$maloai, $tenloai]);
            $dataLoai=getAllLoai();
            include "./views/loaisach/index.php";
            break;
        default:
            break;
    }
?>