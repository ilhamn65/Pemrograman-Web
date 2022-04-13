<html>

<head>
    <title>Login Page</title>
</head>

<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <p>Username :</p>
        <input type="text" name="user">
        <p>Password :</p>
        <input type="password" name="pass">
        <br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>

<!-- php -->
<?php
if (isset($_POST['submit'])) {
    session_start();
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['pass'] = $_POST['pass'];
    if ($_SESSION['user'] == 'kadeppsdm' && $_SESSION['pass'] == '1234') {
        header("Location: index.php");
    } else if ($_SESSION['user'] == 'menteri' && $_SESSION['pass'] == '4321') {
        header("Location: v_menteri.php");
    } else {
        echo '<script>window.alert("Maaf, username atau password Anda salah"); window.location = "login.php"</script>;';
    }
}
?>

</html>