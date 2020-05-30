<?php

include "koneksi.php";
$nama=$_['nama'];
$email=$_POST['email'];
$no_telp=$_POST['no_telp'];
$pesan=$_POST['pesan'];
$query=mysql_query("insert into bento(nama,email,no_telp,pesan)
value($nama,$email,$no_telp,$pesan)");
if($query){
    echo "Data Berhasil Ditambah";
}

?>

<a href="/pesan.php">&nbsp;&nbsp;Lihat Data Masuk</a>

<?php

}else{
    echo "Gagal input data";
    echo mysql_error();
}

?>