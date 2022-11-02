<?php
    include 'include/db.inc.php';
    include 'include/siswa.php';
    include 'include/view.siswa.inc.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h2 >View And Connect Database Using Obeject Oriented Programming </h2>


    <?php
    $siswa1 = new ViewSiswa();
    $siswa1->showAllSiswa();
    
    
    ?>

    
</body>
</html>







<!-- getter dan setter merupakan sebutan untuk menthod yang mengisi (set) dan mengambil (get)
    dari sebuah property 

-->