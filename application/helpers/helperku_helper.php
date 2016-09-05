<?php  if( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('form_open')){



  function hello($nama){
    echo "hello <b>$nama</> serukan belajar codeigniter";


    function penjumlahan($nilai1,$nilai2){
      return $nilai1 + $nilai2;
    }

    function nama_barang($id){
      $ci = & get_instance();
      $cek = $ci->db->get_where('barang',array('id_barang'=>$id));
        if($cek->num_rows()>0){
          $record = $cek->row_array();
          return $record['nama_barang'];
        }else {
          return "salah cok!!!";
        }
    }
  }
}
