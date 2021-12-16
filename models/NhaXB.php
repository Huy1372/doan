<?php
    $objNxb= new NhaXB();
    $dataNxb= $objNxb->getAll();
    function getAll(){
        $objNxb= new NhaXB();
        return $objNxb->getAll();

    }
    function getById($id){
        $objNxb= new NhaXB();
        return $objNxb->getById($id);
    }
    function insertNxb($values){
        $objNxb= new NhaXB();
        return $objNxb->insert($values);
    }
?>