<html>

<head>
    <title>Kepala Departemen Page</title>
</head>

<body>
    <h2>Daftar Program Kerja BEM</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td style="text-align: center; vertical-align: middle;">No</td>
            <td style="text-align: center; vertical-align: middle;">Nama Program Kerja</td>
            <td style="text-align: center; vertical-align: middle;">Surat Keterangan</td>
            <td style="text-align: center; vertical-align: middle;" colspan="2">Edit</td>
        </tr>
        <?php
        include "koneksiMVC.php";
        $respon = $mysqli->query("SELECT * FROM proker");
        while ($proker = mysqli_fetch_array($respon)) {
            echo "<tr>
            <td>$proker[nomorProgram]</td>
            <td>$proker[namaProgram]</td>
            <td>$proker[suratKeterangan]</td>
            <td><a href='proses.php?nomorProgram=$proker[nomorProgram]&no=2'>Perbarui</a></td>
            <td><a href='index.php?nomorProgram=$proker[nomorProgram]&no=1'>Hapus</a></td>
            </tr>";
        }
        ?>
    </table> <br> <br>
    <form action="proses.php" method="post">
        <input type="submit" name="submit" value="Tambah Program Kerja Baru">
    </form>
    <form action="logout.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>

</html>