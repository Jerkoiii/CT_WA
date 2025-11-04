<html lang="en">
<head>
    <title> Log put </title>

</head>
<body>
    <?php
    $_SESSION =[];

    session_unset();
    session_destroy();
    header("location: gatdulaIndex.php");
    ?>
</body>
</html>