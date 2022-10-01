<?php
    include 'koneksi.php';

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $image = $_POST['image'];
        $image_text = $_POST['image_text'];


        $sql = "UPDATE kawasaki SET id='$id', image='$image', image_text='$image_text'";
        $query = mysqli_query($connect, $sql);
 
        if ($query){
            header('Location: landingpage2.php');
        }else{
            header('Location: edit.php?status=gagal');
        }
    }
?>