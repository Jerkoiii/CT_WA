<!DOCTYPE htmL>
<head>
    <title> Log out </title>

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