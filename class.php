<?php

// testing code below
echo "load_test";
// tesing code above

class FileManager{
	function Upload(){

// main code below for file uplaod
      if(isset($_FILES['file'])){
      for($i = 0; $i < count($_FILES['file']['name']); $i++){
        $file_name = $_FILES['file']['name'][$i];
        $file_size =$_FILES['file']['size'][$i];
        $file_tmp =$_FILES['file']['tmp_name'][$i];
        $file_type=$_FILES['file']['type'][$i];
        $maxSize = 1024 * 200;
        $accepted = array("txt", "pdf", "png", "jpg");
        $dir = "files/";

        if($file_size > $maxSize){
         echo "$file_name is too large";
        }elseif(! in_array(pathinfo($file_name, PATHINFO_EXTENSION), $accepted)){
         echo "$file_name is not an accepted file type";
        }else{
         move_uploaded_file($file_tmp, $dir.$file_name);
         echo "files uploaded sucessfully";
        }
   }
   }
//  main code above for file upload

	}
}
?>