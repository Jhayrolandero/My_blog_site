<?php

# Handle user interaction
    class BlogCtrl extends Blog{

        protected $user_id;
        private $author;
        private $title;
        private $content;
        
        public function get_details($user_id, $author, $title, $content){
            $this->user_id = $user_id;
            $this->author = $author;
            $this->title = $title;
            $this->content = $content;
        }

        public function get_id($user_id){
            $this->user_id = $user_id;
        }

        private function title_not_empty(){
            return (!empty($this->title));
        }

        private function content_not_empty(){
            return (!empty($this->content));
        }

        private function no_empty_fields(){
            if(!empty($this->title) && !empty($this->content)){
                return true;
            }elseif(!$this->title_not_empty()){
                header("Location: create_blog.php?error=Please enter a title");
                exit();
            }elseif(!$this->content_not_empty()){
                header("Location: create_blog.php?error=Please enter a content");
                exit();
            }else{
                header("Location: create_blog.php?error=Something went wrong");
                exit();
            }
        }

        public function create_blog(){
            if($this->no_empty_fields()){
                $this->add_blog($this->user_id, $this->author, $this->title, $this->content);
                header("Location: homepage.php?message=Successfully Published!");
                exit();
            }else{
                header("Location: create_blog.php?error=Something went wrong");
                exit();
            }
        }

        protected function get_contents(){
            return $this->get_blog($this->user_id);
        }

        public function render_blog(){
            $view_obj = new BlogView();
            $view_obj->preview_blog($this->get_contents());
        }

    }

?>