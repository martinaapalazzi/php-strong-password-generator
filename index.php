<?php

    function randomPassword() {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-=~!@#$%^&*()_+,./<>?;:[]{}\|';
        $password = []; //remember to declare $password as an array
        $charactersLength = strlen($characters) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $charactersLength);
            $password[] = $characters[$n];
        }
        return implode($password); //turn the array into a string
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>

    <div>
        <form action="password" method="GET">
            <?php echo randomPassword() ?>
        </form>
    </div>
    
</body>
</html>