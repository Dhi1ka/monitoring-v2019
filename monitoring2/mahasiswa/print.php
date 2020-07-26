<!DOCTYPE html>
<html lang="en">

<head>


    <title>Catatan Jurnal Harian Kerja Praktek Mahasiswa Teknik Informatika UNIPMA</title>

</head>
<body>


<center>
    <h2>Catatan Jurnal Harian Kerja Praktek Mahasiswa Teknik Informatika UNIPMA</h2>
    <h3><?php echo date('d-m-Y'); ?></h3>
</center>

<br/>

    <?php 
    include 'koneksi.php';
    ?>

        <table border="1" style="width: 100%">
                <tr>
                    <th width="1"><center>No</center></th>
                    <th><center>Hari, Tanggal</center></th>
                    <th><center>Kegiatan</center></th>
                </tr>
            
            <?php 
                $no = 1;
                $sql = mysql_query("select * from laporan");
                while ($data = mysql_fetch_array($sql)) {
                    # code...
                    ?>
            <tr>
                <td><center><?php echo $no++; ?></center></td>
                <td><center><?php echo $data['hari_tanggal']; ?></center></td>
                <td><center><?php echo $data['kegiatan']; ?></center></td>
            </tr>
                <?php  
                }
             ?>

        </table>

    <script>
        window.print();
    </script>

</body>
</html>
