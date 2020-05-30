<html>
    <head>
        <title>
            Data Masuk
        </title>
    </head>
    <body>
        
    <?php 
    include "koneksi.php";
    $query=mysql_query("select * from bento");
    $jumlah=mysql_num_rows($query);
    echo "Jumlah Pesan : ".$jumlah;
    echo "<hr>";
    ?>

    <?php
    while($row=mysql_fetch_array($query))
    {
        echo "pesan ke-"; echo $a=$a+1; echo "br";
        echo "Nama :$row[nama]<br>";
        echo "Email :$row[email]<br>";
        echo "No_telp :$row[no_telp}<br>";
        echo "Pesan :$row[pesan]<br>"
    }
    ?>
    <br/>
    <a href="/index.html">
    Isi buku tamu 
</a>


    </body>

    </html>