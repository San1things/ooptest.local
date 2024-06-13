<?php

    class UsersView extends Users {

        public function showUser($name){
            $result = $this->getUser($name);
            echo "Full Name: " . $result[0]['users_firstname'] . " " . $result[0]['users_lastname'] . "<br>";
            echo "Date of Birth: " . $result[0]['users_bday'];
        }
    }

