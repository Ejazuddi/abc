

<?php

if (isset($_POST['submit'])){
        include 'config.php';
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_Image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $img_des = "Uploadimage/".$image_name;
    // move_uploaded_file($image_loc,"Uploadimage/".$image_name);

     $product_category = $_POST['pages'];

     //insert product

mysqli_query($con,"INSERT INTO `tblproduct`( `ID` , `Pname`, `Pprice`, `Pimage`, `PCategory`) 
    VALUES  ('$product_name','$product_price','$product_name','$img_des','$product_category')");
    
}

?>

        