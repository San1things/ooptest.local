<?php

class Test extends Dbh{
    

    public function setUserStmt($firstname, $lastname, $bday) {
        $sql = "INSERT INTO tbl_users(users_firstname, users_lastname, users_bday) VALUE(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $bday]);
    }
}