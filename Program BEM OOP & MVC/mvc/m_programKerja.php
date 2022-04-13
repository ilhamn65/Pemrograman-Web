<?php
class m_programKerja {
    private $nomorProgram;
    private $namaProgram;
    private $suratKeterangan;
    public $hasil = array();

    public function setProgramKerja($nomorProgram, $namaProgram, $suratKeterangan) {
        require "koneksiMVC.php";
        $respon = $mysqli->query("INSERT INTO proker VALUES ('$nomorProgram', '$namaProgram', '$suratKeterangan')");
        return $respon;
    }
    public function getAll() {
        require "koneksiMVC.php";
        $respon = $mysqli->query("SELECT * FROM proker");
        $rows = array();
        while ($row = $respon->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;
    }
    public function updateProgramKerja($nomorProgram, $namaProgram, $suratKeterangan) {
        require "koneksiMVC.php";
        $respon = $mysqli->query("UPDATE proker SET NOMORPROGRAM = '$nomorProgram', NAMAPROGRAM = '$namaProgram', SURATKETERANGAN = '$suratKeterangan' WHERE NOMORPROGRAM = '$nomorProgram'");
        return $respon;
    }
    public function deleteProgramKerja($nomorProgram) {
        require "koneksiMVC.php";
        $respon = $mysqli->query("DELETE FROM proker WHERE NOMORPROGRAM = '$nomorProgram'");
        return $respon;
    }
}
