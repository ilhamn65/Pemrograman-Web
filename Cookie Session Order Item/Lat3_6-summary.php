<html>

<head>
    <?php session_start();
    if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
        header('location:Lat3_6-login.php');
    }
    ?>
    <title>Order Summary Page</title>
</head>

<body>
    <p><u>Order Summary</u></p>
    <?php
    $num_cd_order = $_COOKIE['cd_order'];
    $num_dvd_order = $_COOKIE['dvd_order'];
    echo "Ordered CD : " . $num_cd_order . " pieces<br/>";
    echo "Ordered DVD : " . $num_dvd_order . " pieces<br/>";
    ?>
    <form action="Lat3_6-order.php" method="post">
        <input type="submit" name="edit" value="Edit to Cart">
    </form>
    <form action="Lat3_6-end.php" method="post">
        <input type="submit" name="end" value="Logout">
    </form>
</body>

</html>