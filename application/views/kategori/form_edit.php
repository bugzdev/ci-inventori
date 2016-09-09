<h3>Edit Data Kategori</h3>

<?php
echo form_open('kategori/edit');
?>

<input type="hidden" value="<?php $record['kategori_id'] ?>" name="id">

<table border="1">
  <tr>
    <td>Nama Kategori</td>
    <td><input type="text" name="kategori" placeholder="Kategori" value="<?php echo $record['nama_kategori']?>"></td>
  </tr>

  <tr>
    <td colspan="2">
      <button type="submit" name="submit">Edit</button>
    </td>
  </tr>
</table>

</form>
