<?php
  class Barang extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model(array('model_barang'));
    }

    function index(){
      echo "barang";
    }

    function elektronik(){
      $data['title'] = "Daftar Barang";
      $data['list_barang'] = $this->model_barang->tampilkan_data();
      $this->load->view('barang/daftarbarang', $data);
    }

    function pakaian(){
      $data['title'] = "Daftar Pakaian";
      $this->load->view('daftarbarang', $data);
    }
  }

?>
