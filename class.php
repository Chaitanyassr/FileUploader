<?php

// testing code below
echo "load_test";
// tesing code above

class FileManager{
	function Upload(){

// main code below for file uplaod
   if(isset($_FILES['file'])){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $fileNameCmps = explode(".", $file_name);
      $file_ext = strtolower(end($fileNameCmps));
      $Upload_True = 1;
         $Target_File = array("jpeg","jpg","png", "zip", "txt", "xls", "doc", "pdf", "rar");

       if(in_array($file_ext,$Target_File)=== false){
         $errors[]="please choose a valid file";
      }


      
          if($file_size > 500000) {
         $errors[]='File size must be excately 2 MB';
              $Upload_True = 0;
      }

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"files/".$file_name);
         echo "File Got Submited";
          $Upload_True = 0;
      }else{
         print_r($errors);
      }
   }
//  main code above for file upload

	}
}
?>