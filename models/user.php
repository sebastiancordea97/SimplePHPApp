<?php


class UserModel extends Model
{
    public function register()
    {
        $postValues = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($postValues['submit'])) {
            $passwordHash = sha1($postValues['pwd']);
            $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
            $this->bind(':name', $postValues['uname'], PDO::PARAM_STR);
            $this->bind(':email', $postValues['email'], PDO::PARAM_STR);
            $this->bind(':password', $passwordHash, PDO::PARAM_STR);
            $this->execQuery();
            if ($this->databaseHandler->lastInsertId()) { header('Location: '.ROOT_URL);}
        }
    }

    public function login(){
        $postValues = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($postValues['submit'])) {
            $entry = $this->checkCredentials($postValues);
            if ($entry) {
                $this->createSession($entry);
                header('location: ' . ROOT_URL);
            } else {
                die('is no ok');
            }
        }
    }

    public function createSession($entry)
    {
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['userData'] = array(
            "id" => $entry['id'],
            "name" => $entry['name'],
            "email" => $entry['email']
        );
    }

    public function checkCredentials($creds)
    {
        $passwordHash = sha1($creds['pwd']);
        $this->query('SELECT * FROM users WHERE email = :email AND password = :pwd');
        $this->bind(':email', $creds['email']);
        $this->bind(':pwd', $passwordHash);
        $result = $this->singleEntry();
        return $result;
    }
}