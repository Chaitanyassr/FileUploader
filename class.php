<?php
echo "load_test";
class FileUpload{
	function Upload(){
		  if(isset($_FILES['file'])){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
      $Upload_True = 1;
      $Target_File= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$Target_File)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

       if($file_size > 500000) {
         $errors[]='File size must be excately 2 MB';
      }
      
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }

   
	}
}
?>