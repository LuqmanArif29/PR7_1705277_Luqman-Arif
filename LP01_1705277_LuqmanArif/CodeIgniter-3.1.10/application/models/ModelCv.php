<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelCv extends CI_Model {



      function getTransaksi(){
          $this->db->select('lokomotif.kd_kereta,lokomotif.nama, kursi.kd_kursi'); //memeilih semua field
          $this->db->from('lokomotif'); //memeilih tabel
          $this->db->join('kursi', 'kursi.kd_kereta = lokomotif.kd_kereta', 'left'); //join tabel transaksi field id_pemilik dengan tabel pemilik field yang punya isi sama

          $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
              if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
                  foreach ($query->result() as $data) {
                      # code...
                      $lokomotif[] = $data;
                  }
              return $lokomotif; //hasil dari semua proses ada dimari
              }
      }

      function getTransaksi1(){
          $this->db->select('kursi.kd_kursi,kursi.kd_gerbong,kursi.kd_kereta, gerbong.nama'); //memeilih semua field
          $this->db->from('kursi'); //memeilih tabel
          $this->db->join('gerbong', 'kursi.kd_gerbong = gerbong.kd_gerbong', 'right'); //join tabel transaksi field id_pemilik dengan tabel pemilik field yang punya isi sama

          $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
              if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
                  foreach ($query->result() as $data) {
                      # code...
                      $kursi[] = $data;
                  }
              return $kursi; //hasil dari semua proses ada dimari
              }
      }

      function getTransaksi2(){
        $this->db->select('*');
        $this->db->from('lokomotif');
        $this->db->join('kursi','lokomotif.kd_kereta=kursi.kd_kereta');
        $this->db->join('gerbong','lokomotif.kd_kereta=gerbong.kd_kereta');
        $query = $this->db->get();
        return $query->result();
      }




}
