<?php

class Siswa extends Dbh{
   
    protected function getAllSiswa() {
       $sql = "SELECT * FROM siswa";
       $result = $this->connect()->query($sql);
       $numRows = $result->num_rows;
        if ($numRows){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }
}