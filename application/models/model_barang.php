<?php
  /**
   *
   */
  class Model_barang extends CI_Model{
    function tampilkan_data(){
      return $this->db->get('barang');
    }
  }

?>
