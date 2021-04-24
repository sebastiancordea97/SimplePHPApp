<?php


class UserModel extends Model{
   

    public function register(){
      
        $postValues = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        if(isset($postValues['submit'])){
           
           
            $passwordHash = sha1($postValues['pwd']);

             $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
            
             $this->bind(':name', $postValues['uname'], PDO::PARAM_STR);
             $this->bind(':email', $postValues['email'], PDO::PARAM_STR);
             $this->bind(':password', $passwordHash, PDO::PARAM_STR);

            $this->execQuery();
            if($this->databaseHandler->lastInsertId()){ header('Location: '.ROOT_URL);}
           
        }

        return false;

      
    }

   
}