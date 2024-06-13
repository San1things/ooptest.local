<?php

    class UsersContr extends Users {

        public function createUser($firstname, $lastname, $bday){
            $this->setUser($firstname, $lastname, $bday);
        }

    }
