<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
 <?php include 'class.php';?> 
</head>
   <body>
    <div class="container">
      <form action="index.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="file[]" multiple="multiple" />
         <input type="submit" name="submit" class="button"/>
      </form>
      </div>
   </body>
</html> 

<!-- php code below -->
<?php 
        $Uplaod = new FileManager;
        $Size = $Uplaod->setMaxSize(1);
        $accepted = $Uplaod->setExtension(array("txt", "pdf", "png", "jpg"));
        $dir = $Uplaod->setDir('files/');
      
      if(isset($_FILES['file'])){  
      
     

      for($i = 0; $i < count($_FILES['file']['name']); $i++){
        $file_name = $_FILES['file']['name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp = $_FILES['file']['tmp_name'][$i];
        $file_type= $_FILES['file']['type'][$i];




        if($file_size > $Size){
         echo "$file_name is too large";
        }elseif(! in_array(pathinfo($file_name, PATHINFO_EXTENSION), $accepted)){
         echo "Please choose a file :accepted formate(txt, pdf, png, jpg)";
        }else{
         move_uploaded_file($file_tmp, $dir.$file_name);
         echo "$file_name uploaded sucessfully";
        }
   }


       

       }


?>
<!-- php code above -->