<?php
include_once("c_programKerja.php");
$controller = new c_programKerja();
if (isset($_POST['simpan'])) {
    $nomor = $_POST['nomor'];
    $nama = $_POST['nama'];
    $surat = $_POST['surat'];
    if ($_POST['tambah'] == 1) {
        $controller->update($nomor, $nama, $surat);
    } else {
        $controller->set($nomor, $nama, $surat);
    }
}
if (isset($_GET['no']) && null !== $_GET['nomorProgram']) {
    $controller->delete($_GET['nomorProgram']);
}
$controller->invoke();
