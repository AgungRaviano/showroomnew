<?php
  

    // if (isset($_POST['edit'])) {
    //     // Get image name
    //     $image = $_FILES['image']['name'];
    //     // Get text
    //     $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
  
    //     // image file directory
    //     $target = "image/".basename($image);
  
    //     $sql = "INSERT INTO kawasaki (image, image_text) VALUES ('$image', '$image_text')";
    //     // execute query
    //     mysqli_query($db, $sql);
  
    //     if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    //         $msg = "Image uploaded successfully";
    //     }else{
    //         $msg = "Failed to upload image";
    //     }
    // }
    // $result = mysqli_query($db, "SELECT * FROM kawasaki");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="tambah">
            <h3>Tambah Data</h3>
        </div>
            <div>
            <form action="edit.php" method="post">
                <p>Image</p>
                <label><input type="file" name="image" value="<?php echo $image ['image'] ?>" required= "required"></label>
                <p>Image text</p>
                <label><input type="text" name="image_text" value="<?php echo $image_text ['image_text'] ?>" required= "required"></label>
                <input class="btn-simpan" type="submit" name="simpan" value="simpan">
            </form>
        </div>
    </div>
</div>
</body>
</html>