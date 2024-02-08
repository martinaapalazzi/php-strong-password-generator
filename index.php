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
        <form action="password.php" method="GET">
            <label for="">
                Choose how long you want your password:
            </label>
            <div>
            <br>
            <input type="number" name="length" id="length" placeholder="Type a number">
            </div>
            <br>
            <button type="submit">
                Generate
            </button>
            <br>
            <?php
                // print_r($_GET);
                if(isset($_GET['length']) && !empty($_GET['length'])) {
                    $password = randomPassword($_GET['length']);

                    $_SESSION['password'] = $password;

                    header('Location: ./password.php');
                }
            ?>
        </form>
    </div>
    
</body>
</html>