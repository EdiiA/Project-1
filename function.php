<?php
    class Contact{
        private $host="localhost";
        private $user="root";
        private $pass="";
        private $db="register";
        public $mysqli;

        public function __construct(){
             $this->mysqli = new mysqli($this->host , $this->user,$this->pass, $this->db);
        }
        public function contact_us($data){
             $fname=$data['name'];
             $lname=$data['surname'];
             $email=$data['email'];
             $message=$data['messa'];
             $q="insert into contact_us set first_name='$fname', last_name='$lname',email='$email', mess='$message' ";

             return $this->mysqli->query($q);

            
        }
        public function getAllComments()
      {
          $conn = $this->mysqli;
  
          $sql = "SELECT * FROM contact_us";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          $messages = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
          $stmt->close();
  
          return $messages;
      }
      
    }
?>
