<?php
    class SignCtrl extends Sign{

        private $username;
        private $password;
        private $rpassword;
        private $email;

        function __construct($username, $password, $rpassword, $email){
            $this->username = $username;
            $this->password = $password;
            $this->rpassword = $rpassword;
            $this->email = $email;
        }

        /*  Error handlers functions
            Check if input are correct*/
        
        private function if_not_empty(){
            return (!empty($this->username) && !empty($this->password) && !empty($this->email));
        }

        private function password_match(){
            return $this->password === $this->rpassword;
        }

        private function if_not_email_exist(){
            return $this->check_email($this->email);
        }

        private function if_not_username_exist(){
            return $this->check_username($this->username);
        }

        private function check_all_input(){
            try{
                if($this->if_not_empty() && $this->if_not_username_exist() && $this->if_not_email_exist() && $this->password_match()){
                    return true;
                }
                elseif(!$this->if_not_empty()){
                    header("Location: index.php?error=Fill out the missing field/s!");
                    exit();
                }elseif(!$this->if_not_username_exist()){
                    header("Location: index.php?error=That username is already taken!");
                    exit();
                }elseif(!$this->if_not_email_exist()){
                    header("Location: index.php?error=That email is already in use!");
                    exit();
                }
                elseif(!$this->password_match()){
                    header("Location: index.php?error=Password don't match!");
                    exit();
                }
            }catch (Exception) {
                header("Location: index.php?error=Something went wrong");
                exit();
            }
        }

        // If the function returned true then user will be added to the database
        public function sign_user(){
            try{
                if($this->check_all_input()){
                    $this->add_user($this->username, $this->password, $this->email);
                    header("Location: index.php?message=User successfully created!");
                    exit();
                }
            }catch (Exception) {
                header("Location: index.php?error=Something went wrong");
                exit();
            }
        }
    }
?>