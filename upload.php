<?php
    session_start();
    require "dbcrend.php";
    if(isset($_POST['submit'])){
    $file = $_FILES['sellers-pics'];

    $fileName =$_FILES['sellers-pics']['name'];
    $fileTmpName =$_FILES['sellers-pics']['tmp_name'];

    $newName = time().$fileName;
    // $product_id = $_SESSION['product_id'];
  
    $fileDestination = "uploads/".$newName; 
    move_uploaded_file($fileTmpName, $fileDestination);

    header("Location:dashboard.php?uploadsuccesful");
    
        

    $fileExt = explode ('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'jfif' );
    if(in_array($fileActualExt, $allowed)){
        // allow now!
    }else{
        echo "You cannot upload files of this type!";
    }

    } else{
        // nothing
    }


?>