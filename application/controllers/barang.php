<?php

/**
 *
 */
class barang extends CI_Controller{

  function __construct(){
    parent::__construct();

    $this->load->model('Model_barang');
  }

  function index(){
    $data['record'] = $this->Model_barang->tampil_data()->result();
    $this->load->view('barang/tampil_data',$data);
  }
}
