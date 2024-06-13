<?php

class Users extends Dbh {
    protected function getUser($name){
        $sql = "SELECT * FROM tbl_users WHERE users_firstname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $result = $stmt->fetchAll();
        return $result;
    }

    protected function setUser($firstname, $lastname, $bday){
        $sql = "INSERT INTO tbl_users(users_firstname, users_lastname, users_bday) VALUE(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $bday]);
    }

}