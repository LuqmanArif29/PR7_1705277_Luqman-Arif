<?php
class nasabah{
     private $connection;

     public function __construct (){
          $this->connection =  mysqli_connect("localhost", "root","", "db_coba");
     }

     public function getByNorek($norek){
          $sql="select * from nasabah where norek='$norek' limit 1";
          $result = mysqli_query($this->connection,$sql);

          if (mysqli_num_rows($result)>0) {
             $data = mysqli_fetch_object($result);
          } else {
             $data = null;
          }
          return $data;
     }

     public function kurangiSaldo($id,$jumlah){
       $sql="update nasabah set saldo=saldo - $jumlah  limit 1";
       $result = mysqli_query($this->connection,$sql);

       if (mysqli_num_rows($result)>0) {
          $data = mysqli_fetch_object($result);
       } else {
          $data = null;
       }
       return $data;


     }
}
 ?>
