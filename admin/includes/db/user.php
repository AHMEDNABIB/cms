<?php

class User{


    public function select($query)
    {    
        global $database;
        $result = $database->link->query($query);

        if ($result -> num_rows>0) {
            return $result;
        } else {
            return false;
        }
        
    }


     public function insert($query)
    {   
         global $database;
        $insert =$database->link->query($query);
        if ($insert) {
          header("Location: users.php?msg= New User Inserted....");
        } else {
               echo "Did not insert";
        }
        
        
    }
     public function update($query)
    {   
         global $database;
        $update =$database->link->query($query);
        if ($update) {
          header("Location: users.php?msg= User Updated....");
        } else {
               echo "Did not update";
        }
        
        
    }
     public function delete($query)
    {   
         global $database;
        $insert =$database->link->query($query);
        if ($insert) {
          header("Location: users.php?msg= User deleted....");
        } else {
               echo "Did not delete";
        }
        
        
    }
}


?>