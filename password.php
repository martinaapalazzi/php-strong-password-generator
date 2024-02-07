<?php
session_start();

if(isset($_SESSION['password'])) {
    echo $_SESSION['password'];
} else {
    echo "Error, password not generated. Go back to index.php";
}

// $_GET -> https://url?parm1=val1&param2=val2 -> [ 'param1' => 'val1', 'param2' => 'val2']
// $_POST -> // uguale a get come funzionamento ma i parametri stanno nel body della richiesta e non nell'url
// $_SESSION -> // array visibile solo sul server, session_start genera un id che è visible dal browser nei cookie PHPSESSID
