<h3>Daftar Username</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">NIM</th>
      <th scope="col">Alamat</th> 
      <th scope="col"><a href="datamahasiswa.php?aksi=new" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
    </tr>
  </thead>
  <tbody>
<?php
$sql = "SELECT * FROM tbmhs tu ORDER BY tu.nama;";
$hasil = mysqli_query($cnn, $sql);
$cx = 0;
while($h = mysqli_fetch_assoc($hasil)){
    $cx++;
?>    
    <tr>
      <th scope="row"><?=$cx?></th>
      <td><?=$h["nama"]?></td>
      <td><?=$h["nim"]?></td>
      <td><?=$h["alamat"]?></td>
      <td><a href="datamahasiswa.php?aksi=edit&p1=<?=$h["idmhs"]?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a> 
      <a href="datamahasiswa.php?aksi=del&p1=<?=$h["idmhs"]?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Del</a></td>
    </tr>
<?php
}
?>
  </tbody>
</table>