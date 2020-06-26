<?php
// testing code below
echo "load_test";
// tesing code above

class FileManager{

 protected $maxSize;
 protected $extension;
 protected $destination;
 protected $file_size;
 protected $file_name;
 protected $file_tmp;


 function setMaxSize($sizeMB){
   return $this->maxSize = $sizeMB * (1024 * 1024);
 }

 function setExtension($option){
  return $this->extension = $option;
 }

function setDir($path){
   return $this->destination = $path;
}

function action($size, $name, $tmp){
   $this->file_size = $size;
   $this->file_name = $name;
   $this->file_tmp = $tmp;
           if($this->file_size > $this->maxSize){
         echo "$this->file_name is too large";
        }elseif(! in_array(pathinfo($this->file_name, PATHINFO_EXTENSION), $this->extension)){
         echo "Please choose a file :accepted formate(txt, pdf, png, jpg)";
        }else{
         move_uploaded_file($this->file_tmp, $this->destination.$this->file_name);
         echo "$this->file_name uploaded sucessfully";
        }
}

}
?>