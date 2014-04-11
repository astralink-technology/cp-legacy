<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Libraries/password_compat/lib/password.php';

/*
 * Copyright Chilli Panda
 * Created on 03-05-2013
 * Created by Shi Wei Eamon
 */

/*
 * A helper on encryption
 */
class cp_encryption_helper{
    public function verify(){
        if (isset($_POST['json'])){
            $jsonPost = $_POST['json'];
            $credentials = json_decode($jsonPost, true);

            $password = $credentials['InputPassword'];
            $hash = $credentials['HashedPassword'];
            return password_verify($password, $hash);
        }else{
            return false;
        }
    }
}
 
?>

