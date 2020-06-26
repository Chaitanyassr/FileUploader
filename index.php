
<!--  <?php include 'class.php';?> -->
<?php
   if(isset($_FILES['file'])){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $Upload_True = 1;
      $Target_File= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$Target_File)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"files/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">

</head>
   <body>
    <div class="container">
      <form action="index.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="file" />
         <input type="submit" class="button"/>
      </form>
      </div>
   </body>
</html> 