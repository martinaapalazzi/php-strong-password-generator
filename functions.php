<?php
    function randomPassword($length) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-=~!@#$%^&*()_+,./<>?;:[]{}\|';
        $password = []; //remember to declare $password as an array
        $charactersLength = strlen($characters) - 1; //put the length -1 in cache
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $charactersLength);
            $password[] = $characters[$n]; // password.append(characthers[n]) in JS
        }
        return implode($password); //turn the array into a string
    }
?>