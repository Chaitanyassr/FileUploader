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
// <!-- instantiating -->
$Uplaod = new FileManager;
$Uplaod->Upload();


?>
<!-- php code above -->