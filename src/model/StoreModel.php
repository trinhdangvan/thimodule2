<?php


namespace App\model;


class StoreModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBconnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM Hanghoa';
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }


    public function getStoreById($id){
        $sql = 'SELECT * FROM Hanghoa WHERE Id = :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }


    public function addStore($Hanghoa){
        $sql = 'INSERT INTO Hanghoa (`Name`,`Type`,`Price`,`Amount`,`Date`,`Descirbe`) VALUES (:Name,:Type,:Price,:Amount,:Date,:Descirbe)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':Name',$Hanghoa->getName());
        $stmt->bindParam(':Type',$Hanghoa->getType());
        $stmt->bindParam(":Price",$Hanghoa->getPrice());
        $stmt->bindParam(":Amount",$Hanghoa->getAmount());
        $stmt->bindParam(":Date",$Hanghoa->getDate());
        $stmt->bindParam(":Descirbe",$Hanghoa->getDescirbe());
        $stmt->execute();
    }

    public function editStore($newStore){
        $sql = 'UPDATE Hanghoa SET `Name`=:name,Type=:Type,Price=:Price,Amount=:Amount,Date=:Date,Descirbe=:Descirbe WHERE id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':Name',$newStore->getName());
        $stmt->bindParam(':Type',$newStore->getType());
        $stmt->bindParam(':Price',$newStore->getPrice());
        $stmt->bindParam(':Amount',$newStore->getAmount());
        $stmt->bindParam(':Date',$newStore->getDate());
        $stmt->bindParam(':Descirbe',$newStore->getDescirbe());
        $stmt->execute();
    }


    public function delete($id){
        $sql = 'DELETE FROM Hanghoa WHERE Id =:Id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':Id',$id);
        $stmt->execute();
    }

    public function getSearch($search)
    {
        $sql = "SELECT * FROM Hanghoa WHERE `Name` LIKE '$search'";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


}