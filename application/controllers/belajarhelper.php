<?php
  /**
   *
   */
  class belajarhelper extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->helper('helperku');
      $this->load->library('mylib');
    }

    function index(){
      //contoh load library
      echo $this->mylib->sayHello();
      echo "<br>";
      //contoh load helper
      echo hello('Hakam');
    }
  }

?>
