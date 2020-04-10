<?php

class fruitModel extends Database{
    
    public function create($data){

        if($this->Query("INSERT INTO fruit (name, price, quality, userId) VALUES(?,?,?,?)", $data)){

            return true;
        }
    }

    public function showAll($userId){

        if($this->Query("SELECT * FROM fruit WHERE userId =?", [$userId])){

            $data = $this->fetchAll();
            return $data;
        }
    }

    public function editData($id, $userId){

        if($this->Query("SELECT * FROM fruit WHERE id=? && userId=?", [$id, $userId])){

            $row = $this->fetch();
            return $row;
        }

    }

    public function updateData($updateData){

        if($this->Query("UPDATE fruit SET name = ?, price = ?, quality = ? WHERE id = ? AND userId = ? ", $updateData)){

            return true;

        }

    }

    public function deleteData($id, $userId){

        if($this->Query("DELETE FROM fruit WHERE id = ? && userId = ?", [$id, $userId])){

            return true;
        }
    }
 
}

?>