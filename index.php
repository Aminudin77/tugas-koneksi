<html>
   <head>
      <title>Menampilkan Data Tabel MySQL</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
         
      </style>
   </head>
   <body>
      <img src="" alt="">
      <center><h1>Klinik sehat</h1></center>
      <h3>Tabel Dokter </h3>
      <table>
         <thead>
            <tr>
               <th>ID Dokter</th>
               <th>Nama</th>
               <th>Spesialisasi</th>
               <th>Nomor_Telepon</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM dokter';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['ID_Dokter'] ?></td>
               <td><?php echo $row['Nama'] ?></td>
               <td><?php echo $row['Spesialisasi'] ?></td>
               <td><?php echo $row['Nomor_Telepon'] ?></td>

            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel obat </h3>
      <table>
         <thead>
            <tr>
               <th>ID_Obat</th>
               <th>Nama_Obat</th>
               <th>Harga</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM obat';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
            <td><?php echo $row['ID_Obat'] ?></td>
               <td><?php echo $row['Nama_Obat'] ?></td>
               <td><?php echo $row['Harga'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel pasien </h3>
      <table>
         <thead>
            <tr>
               <th>ID pasien</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>Tanggal_lahir</th>
               <th>Nomor_Telepon</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM pasien';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['ID_Pasien'] ?></td>
               <td><?php echo $row['Nama'] ?></td>
               <td><?php echo $row['Alamat'] ?></td>
               <td><?php echo $row['Tanggal_lahir'] ?></td>
               <td><?php echo $row['Nomor_Telepon'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel resep_obat </h3>
      <table>
         <thead>
            <tr>
               <th>ID_Resep</th>
               <th>ID_kunjungan</th>
               <th>ID_Obat</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM resep_obat';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['ID_Resep'] ?></td>
               <td><?php echo $row['ID_Obat'] ?></td>
               <td><?php echo $row['Jumlah'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel kunjungan </h3>
      <table>
         <thead>
            <tr>
               <th>ID_kunjungan</th>
               <th>ID_Pasien</th>
               <th>ID_Dokter</th>
               <th>Tanggal_Kunjungan</th>
               <th>Diagnosa</th>
               <th>Resep</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM kunjungan';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['ID_kunjungan'] ?></td>
               <td><?php echo $row['ID_Pasien'] ?></td>
               <td><?php echo $row['ID_Dokter'] ?></td>
               <td><?php echo $row['Tanggal_Kunjungan'] ?></td>
               <td><?php echo $row['Diagnosa'] ?></td>
               <td><?php echo $row['Resep'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      </table>
    
   </body>
</html>