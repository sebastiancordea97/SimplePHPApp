<?php

class Message{


    public static function setMessage($text, $type)
    {
        if($type == 'error')
        {
            $_SESSION['errorMessage'] = $text;
        } else {
            $_SESSION['successMessage'] = $text;
        }
        
    }

    public static function displayMessage()
    {
        if(isset($_SESSION['errorMessage'])){
            echo '<div class="alert alert-danger w-25">' .$_SESSION['errorMessage'] . '</div>';
            unset($_SESSION['errorMessage']);
        }

        if(isset($_SESSION['successMessage'])){
            echo '<div class="alert alert-success ">' .$_SESSION['successMessage'] . '</div>';
            unset($_SESSION['errorMessage']);
        }

    }


}