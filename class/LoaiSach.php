<?php
class LoaiSach extends Db{
    public function getAll(){
        return $this->selectQuery("select * from loai");
    }
    public function getById($id){
        return $this->selectQuery("select * from loai where maloai=?", [$id]);
    }

    public function insert($values){
        return $this->insertQuery("insert into loai(maloai, tenloai) values(?,?)", $values);
    }
}
?>