<?php
    session_start();

    require __DIR__. '/functions.php';
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
        <form action="index.php" method="GET">
            <input type="number" name="length" id="length">
            <br>
            <button type="submit">
                Genera
            </button>
            <br>
            <?php
                print_r($_GET);
                if(isset($_GET['length']) && !empty($_GET['length'])) {
                    $password = randomPassword($_GET['length']);

                    $_SESSION['password'] = $password;

                    header('location: /password.php');
                }
            ?>
        </form>
    </div>
    
</body>
</html>