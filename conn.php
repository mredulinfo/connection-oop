<?php
//connection properties
class dbh{
    private $servername;
    private $username;
    private $password;
    private $db_name;

    protected function connect(){
        $this->servername="localhost";
        $this->username="root";
        $this->password="fgf";
        $this->db_name="oop_test";

        $conn = new mysqli($this ->servername, $this ->username, $this ->password, $this ->db_name);
        if ($conn -> connect_error){
            echo "something failed";
        }else{
            echo "nothing wrong";
        }

 }
}
?>