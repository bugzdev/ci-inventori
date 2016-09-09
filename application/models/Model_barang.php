<?php

/**
 *
 */
class Model_barang extends CI_Model{

  function tampil_data(){
    $query = 'SELECT
    barang.nama_barang,kategori_barang.nama_kategori,barang.harga
    FROM kategori_barang
    INNER JOIN barang
    ON kategori_barang.kategori_id = barang.barang_id';

    return $this->db->query($query);
  }
}
