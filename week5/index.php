<?php 

$myname = "nacer kraa"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title <?php echo "NacerKraaPHP" ?>>Nacer Kraa PHP</title>
</head>
<body>
    <h1>Nacer Kraa PHP</h1>
    <p>
        <?php
            print "The SHA256 hash of \"Nacer Kraa\" is " . hash('sha256', 'Nacer Kraa');
        ?>
    </p>
    <pre>ASCII ART:

        ***    **
        ****   **
        ** **  **
        **  ** **
        **   ****
        **    ***

    </pre>
    print hash('sha256', 'Nacer Kraa');

</body>
</html>