<?php

/**
 *
 */
class auth extends CI_Controller{

  function __construct(){
    parent::__construct();

    $this->load->model('model_operator');
  }

  function login(){
    if(isset($_POST['submit'])){
      //login process
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $result = $this->model_operator->login($username, $password);

      if($result == 1){
        $this->session->set_userdata(array('status_login'=>'Loged In'));
        redirect('dashboard');
      }else{
        redirect('auth/login');
      }
    }else{
      $this->load->view('form_login');
    }
  }

  function logout(){
    $this->session->sess_destroy();
    redirect('auth/login');
  }
}

?>
