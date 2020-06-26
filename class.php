<?php
// testing code below
echo "load_test";
// tesing code above

class FileManager{

 protected $maxSize;
 protected $extension;
 protected $destination;

 function setMaxSize($sizeMB){
   return $this->maxSize = $sizeMB * (1024 * 1024);
 }

 function setExtension($option){
  return $this->extension = $option;
 }

function setDir($path){
   return $this->destination = $path;
}

}
?>