<html>

<head> 
    <title>Menteri Page</title>
</head>

<body>
    <h2>Daftar Program Kerja BEM</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td>No</td>
            <td>Nama Program Kerja</td>
            <td>Surat Keterangan</td>
        </tr>
        <?php
        include "koneksiMVC.php";
        $respon = $mysqli->query("SELECT * FROM proker");
        while ($proker = mysqli_fetch_array($respon)) {
            echo "<tr>
<td>$proker[nomorProgram]</td>
<td>$proker[namaProgram]</td>
<td>$proker[suratKeterangan]</td>
</tr>";
        }
        ?>
    </table> <br>
    <form action="logout.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>

</html>