<?php
include_once("m_programKerja.php");
class c_programKerja {
    public $model;
    public function __construct() {
        $this->model = new m_programKerja();
    }
    public function invoke() {
        $proker = $this->model->getAll();
        include 'v_programKerja.php';
    }
    public function set($nomor, $nama, $surat) {
        $proker = $this->model->setProgramKerja($nomor, $nama, $surat);
    }
    public function delete($nomor) {
        $proker = $this->model->deleteProgramKerja($nomor);
    }
    public function update($nomor, $nama, $surat) {
        $proker = $this->model->updateProgramKerja($nomor, $nama, $surat);
    }
}
