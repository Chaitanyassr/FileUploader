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
        // instantiating
        $Size = $Uplaod->setMaxSize(1);
        $accepted = $Uplaod->setExtension(array("txt", "pdf", "png", "jpg"));
        $dir = $Uplaod->setDir('files/');
      
      if(isset($_FILES['file'])){
        
      //for multiple upload
      for($i = 0; $i < count($_FILES['file']['name']); $i++){
        $file_name = $_FILES['file']['name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp = $_FILES['file']['tmp_name'][$i];
        $file_type= $_FILES['file']['type'][$i];

       $Uplaod->action($file_size, $file_name, $file_tmp);
   }
       }
?>
<!-- php code above -->