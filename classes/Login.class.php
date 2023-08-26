<?php

class Login extends Database{
    protected function get_user_id($username){
        $sql = "SELECT id FROM users 
                WHERE username = ?";
                
        $stmt = $this->connect()->prepare($sql);
        
        $stmt->execute([$username]);

        $result = $stmt->fetchAll();

        return $result[0]['id'];
    }

    protected function check_user_password($username, $password){
        $sql = "SELECT * FROM users 
                WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$username]);
        
        $result = $stmt->fetchAll();

        return $result[0]["password"] == $password; // Return true if the password is correct
    }

    protected function check_user_username($username){
        $sql = "SELECT * FROM users 
                WHERE username =?";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$username]);

        return $stmt->rowCount() > 0 ? true : false; // Greater than zero means username is valid

    }
}