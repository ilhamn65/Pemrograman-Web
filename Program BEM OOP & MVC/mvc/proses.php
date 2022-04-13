<html>

<head></head>

<body>
    <form action="index.php" method="post">
        <?php
        if (isset($_GET['no'])) {
            include "koneksiMVC.php";
            $respon = $mysqli->query("SELECT * FROM proker WHERE nomorProgram='$_GET[nomorProgram]'");
            $data = mysqli_fetch_array($respon);
            echo '<h2>Perbarui Program Kerja</h2>
                <input type="hidden" name="tambah" value="1"';
        } else {
            echo '<h2>Tambah Program Kerja Baru</h2>
                <input type="hidden" name="tambah" value="2"';
        }
        ?>
        <p>Nomor Program Kerja </p>
        <input type="number" name="nomor" value="<?php if (isset($data['nomorProgram'])) echo $data['nomorProgram']; ?>"><br><br>
        <p>Nama Program Kerja</p>
        <input type="text" name="nama" value="<?php if (isset($data['namaProgram'])) echo $data['namaProgram']; ?>"><br><br>
        <p>Surat Keterangan</p>
        <input type="text" name="surat" value="<?php if (
                                                    isset($data['suratKeterangan'])
                                                ) echo $data['suratKeterangan']; ?>"><br><br>
        <input type="submit" name="simpan" value="Simpan">
    </form>
</body>

</html>