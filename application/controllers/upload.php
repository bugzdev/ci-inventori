<?php
  /**
   *
   */
  class upload extends CI_Controller{

    function index(){
      $this->load->view('upload/form_upload');
    }

    public function do_upload(){
      $config['upload_path'] = './uploads';
      $config['allowed_types'] = 'gif|jpg|png';
      // $config['max_size'] = '100';
      // $config['max_width'] = '1024';
      // $config['max_height'] = '768';

      $this->load->library('upload', $config);
      $this->upload->do_upload();
      $hasil = $this->upload->data();

      print_r($hasil);
    }
  }

?>
