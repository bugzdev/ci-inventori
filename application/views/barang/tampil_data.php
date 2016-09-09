<h3>Data Barang</h3>

<table border="1">
  <tr>
    <th>No</th>
    <th>Nama Barang</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th colspan="2">Action</th>
  </tr>

  <?php
  $no = 1;
    foreach ($record as $r) {
      echo "<tr>
        <td>$no</td>
        <td>$r->nama_barang</td>
        <td>$r->nama_kategori</td>
        <td>$r->harga</td>
        <td>".anchor('barang/edit/'.$r->barang_id,'Edit')."</td>
        <td>".anchor('barang/delete/'.$r->barang_id,'Delete')."</td>
      <tr>";
    $no++;
    }
  ?>
</table>
