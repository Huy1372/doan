<?php
    $action= Utilities::get("action");
    switch ($action) {
        case 'index':
            include './models/NhaXB.php';
            include './views/nhaxb/index.php';
            break;
        case "add":
            include "./views/nhaxb/add.php";
            break;
        case "insert";
            $manxb= Utilities::post("manhaxb");
            $tennxb= Utilities::post("tennhaxb");
            include "./models/NhaXB.php";
            insertNxb([$manxb,$tennxb]);
            $dataNxb= getAll();
            include "./views/nhaxb/index.php";
            break;
        default:
            break;
    }
?>