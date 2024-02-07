<?php
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
            <?php echo randomPassword() ?>
        </form>
    </div>
    
</body>
</html>