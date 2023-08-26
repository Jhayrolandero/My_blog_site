<?php
class Sign extends Database{

    protected function check_email($email){
        try{
        $sql = "SELECT * 
                FROM users
                WHERE email = ? ";
        
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->rowCount() == 0 ? true : false; // if 0 email not exist

        }catch(PDOException){
            header("Location: index.php?error=Something went wrong");
            exit();
        }
    }

    protected function check_username($username){
        try{
        $sql = "SELECT username 
                FROM users
                WHERE username = ? ";
        
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);
        return $stmt->rowCount() == 0 ? true : false;
        }catch(PDOException){
            header("Location: index.php?error=Something went wrong");
            exit();
        }
        
    }

    protected function add_user($username, $password, $email){
        try{
        $sql = "INSERT INTO users (username, password, email)
                VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $password, $email]);
        }catch(PDOException){
            header("Location: index.php?error=Something went wrong");
            exit();
        }
    }
}