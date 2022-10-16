<?php

//  $connection = mysqli_connect('localhost', 'root', '', 'cms');

//  if($connection) {
//     echo "we are connectrd";
//  }




class database{
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $db_name= "cms";

    public $link;
    public $error;

    public function __construct()
    {
        $this->connect();
    }

    private function connect(){

        $this->link = new mysqli($this->host, $this-> user, $this-> pass, $this-> db_name);

        if (!$this->link) {
            $this->error = "Connection failed" . $this->link->connect_error;
        }
 
    }

    public function select($query)
    {
        $result = $this->link->query($query);

        if ($result -> num_rows>0) {
            return $result;
        } else {
            return false;
        }
        
    }


     public function insert($query)
    {
        $insert =$this->link->query($query);
        if ($insert) {
          header("Location: index.php?msg= Post Inserted....");
        } else {
               echo "Did not insert";
        }
        
        
    }
     public function update($query)
    {
        $insert =$this->link->query($query);
        if ($insert) {
          header("Location: index.php?msg= Post Updated....");
        } else {
               echo "Did not update";
        }
        
        
    }
     public function delete($query)
    {
        $insert =$this->link->query($query);
        if ($insert) {
          header("Location: index.php?msg= Post deleted....");
        } else {
               echo "Did not delete";
        }
        
        
    }
}

$database = new Database();

?>