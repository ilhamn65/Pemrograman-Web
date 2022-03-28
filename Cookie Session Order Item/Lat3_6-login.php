<html>

<head>
    <title>Login Page</title>
</head>
<div class="container">
    <form action="Lat3_6-login.php" method="post" id="contact">
        <h2>Login</h2>
        <table border="0">
            <tr>
                <td>Username : </td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" name="pass"></td>
            </tr>
        </table>
        <td><input type="submit" name="login" value="Login"></td>
    </form>
</div>
<?php
if (isset($_POST['login'])) {
    if ($_POST['username'] == 'ilham' && $_POST['pass'] == '6512') {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['pass'];
        header('location:Lat3_6-order.php');
    } else {
        echo "<script>alert('Sorry, your username or password is incorrect.');</script>";
    }
}
?>

</html>