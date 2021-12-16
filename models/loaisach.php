<?php
    $objLoai= new LoaiSach();
    $dataLoai=$objLoai->getAll();
    function getLoaiById($id){
        
        $objLoai= new LoaiSach();
        return $objLoai->getById($id);
    }
    function getAllLoai(){
        
        $objLoai= new LoaiSach();
        return $objLoai->getAll();
    }
    function insertLoai($value){
        
        $objLoai= new LoaiSach();
        return $objLoai->insert($value);
    }
?>