<?php

include "Mahasiswa.php";

// inisialisasi
$mahasiswaTI = new Mahasiswa();
$baskara = new Mahasiswa();
$kendrick = new Mahasiswa();

// set data
$mahasiswaTI->setData('A11.2000.00001', "Fulan", "Teknik");
$baskara->setData('A11.2023.15237', "Baskara", "Coumputer Science");
$kendrick->setData('A11.2023.15238', "Kendrick", "Musical");

// get data
print_r($mahasiswaTI->getData()); 
print_r($baskara->getData()); 
print_r($kendrick->getData()); 

// cetak data
$mahasiswaTI->dataMhs();
$mahasiswaTI->cetak();
$baskara->cetak();
$kendrick->cetak();

?>