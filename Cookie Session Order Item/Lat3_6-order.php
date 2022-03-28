<html>
<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header('location:Lat3_6-login.php');
}
?>

<head>
    <title>Order Page</title>
</head>

<body>
    <form action="Lat3_6-set.php" method="post" id="contact">
        <h2><?php echo "Welcome, $_SESSION[username]!" ?></h2>
        <p>Order CD, amount:
            <input type="text" name="cd_order" value="
            <?php
            if (isset($_COOKIE['cd_order'])) {
                echo $_COOKIE['cd_order'];
            } else {
                echo 0;
            } ?>" size="2" maxlength="2" />
        </p>
        <p> Order DVD, amount:
            <input type="text" name="dvd_order" value="
            <?php
            if (isset($_COOKIE['dvd_order'])) {
                echo $_COOKIE['dvd_order'];
            } else {
                echo 0;
            } ?>" size="2" maxlength="2" />
        </p>
        <input type="submit" name="submit" value="Add to Cart"/>
    </form>
</body>

</html>