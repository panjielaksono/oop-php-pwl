<?php
class Mahasiswa {
    // properties
    public $nim;
    public $nama;
    public $programStudi;

    // methods
    function setData($nim, $nama, $programStudi){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->programStudi = $programStudi;
    }
    function getData(){
        return [
            'nim' => $this->nim,
            'nama' => $this->nama,
            'programStudi' => $this->programStudi
        ];
    }

    function dataMhs(){
        echo "<br>Data Mahasiswa : <br>";
    }
    function cetak(){
        echo "NIM : " . $this->getData()['nim'] . "<br>";
        echo "Nama : " . $this->getData()['nama'] . "<br>";
        echo "Program Studi : " . $this->getData()['programStudi'] . "<br>";
    }
}
?>