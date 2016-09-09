<?php

/**
 * Belajarphp.net
 */
class kategori extends CI_Controller{

  function __construct(){
    parent::__construct();

    $this->load->model('Model_kategori');
  }

  function index(){
    $data['record'] = $this->Model_kategori->show_data();
    $this->load->view('kategori/list_data',$data);
  }

  function post(){
    if(isset($_POST['submit'])){
      //process kategori
      $this->Model_kategori->post();
      redirect('kategori');
    }else {
      $this->load->view('kategori/form_input');
    }
  }

  function edit(){
    if(isset($_POST['submit'])){
      // proses kategori
      $this->Model_kategori->edit();
      redirect('kategori');
    }else{
      $id=  $this->uri->segment(3);
      $data['record']=  $this->Model_kategori->get_one($id)->row_array();
      $this->load->view('kategori/form_edit',$data);
      //$this->template->load('template','kategori/form_edit',$data);
    }
  }

  function delete(){
    $id = $this->uri->segment(3);
    $this->Model_kategori->delete($id);
    redirect('kategori');
  }
}
