<?php 
class NhaXB extends Db{
    public function getAll(){
        return $this->selectQuery("select * from nhaxb");
    }
    public function getById($id){
        return $this->selectQuery("select * from nhaxb where manxb=?", [$id]);
    }
    public function insert($values){
        return $this->insertQuery("insert into nhaxb(manxb, tennxb) values(?,?)", $values);
    }
}
?>