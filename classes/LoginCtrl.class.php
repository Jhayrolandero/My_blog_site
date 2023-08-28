<?php
    class LoginCtrl extends Login{
        private $username;
        private $password;

        public function get_credentials($username, $password){
            $this->username = $username;
            $this->password = $password;
        }

        // Check for empty inputs
        private function if_empty(){
            return (!empty($this->username) && !empty($this->password));
        }

        private function if_password_valid(){
            return $this->check_user_password($this->username, $this->password);
        }

        private function if_username_valid(){
            return $this->check_user_username($this->username);
        }

        private function validate_user(){
            if($this->if_empty() && $this->if_username_valid() && $this->if_password_valid()){
                return true;
            }elseif(!$this->if_empty()){
                header("Location: index.php?error=Fill out the missing field/s!");
                exit();
            }elseif(!$this->if_username_valid()){
                header("Location: index.php?error=User does not exist!");
                exit();
            }elseif(!$this->if_password_valid()){
                header("Location: index.php?error=Incorrect password!");
                exit();
            }
        }
        public function login_user(){
            if($this->validate_user()){
                $_SESSION["user"] = $this->username;
                $_SESSION["id"] = $this->get_user_id($this->username);
                header("Location: homepage.php");
                exit();
            }else{
                header("Location: index.php?error=Something went wrong");
                exit();
            }
        }

    }
?>