<?php

if(isset($_POST['add_code'])){
    if (($_FILES['photo']['name']!="")){
        // Where the file is going to be stored
        $target_dir = "manufacturer/";
        $file = $_FILES['photo']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['photo']['tmp_name'];
        $path_filename_ext = $target_dir.$filename.".".$ext;

        // Check if file already exists
        if (file_exists($path_filename_ext)) {
            echo "Sorry, file already exists.";
        }else{
           move_uploaded_file($temp_name,$path_filename_ext);
           echo "Congratulations! File Uploaded Successfully.";
       }
    }

    $ititle=$_POST['image_title'];
    $c_=mysqli_query($connection,"INSERT INTO `manufacturer`(`mname`, `mimg`) VALUES ('$ititle','$path_filename_ext')");
    //$check_user_data=mysqli_fetch_array($check_user_);
    if($c=true){
        echo '1';
    }
}
?>