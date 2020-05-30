<?php

$host="localhost";
$user="root";
$password="";
$database="latihan";
$koneksi=mysql_connect($host,$user,$password);
mysql_select_db($database,$koneksi);
//cek koneksi
if($koneksi){
    echo "Berhasil Terhubung";
}
else{
    echo "Gagal Terhubung";
}

?>