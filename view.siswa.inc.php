<?php

class ViewSiswa extends Siswa{
   
    public function showAllSiswa() {

        $datas = $this->getAllSiswa();
      

    echo    $data=  '
        <!DOCTYPE html>
         <html lang="en">
         <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        </head>
         <body>
         <table border="1">
        <thead>
         <tr> 
                    
        <th>No.</th>
         <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
                    
                    </tr>';
                    
        
        
        

        foreach ($datas as $data){
            
        echo        $data =' <tr>
                            <td>'.$data["id"].'</td>
                            <td>'.$data["nama"].'</td>
                            <td>'.$data["kelas"].'</td>
                            <td>'.$data["jurusan"].'</td>
                            </tr>';
        }

echo $data=' </table>    
        </body>
        </html>';

    

     
        
    }
}