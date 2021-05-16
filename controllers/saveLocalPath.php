<?php
include("../connection/db_connect.php");

$dir = "../uploadImage/";

$i = 0;
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      $i = $i+1;
      // echo "filename:" . $file . "<br>";
      
      $fpath = "C:@\xampp@\htdocs@\Concierge India@\uploadImage".$file;

      $sql = "INSERT INTO `pathlocalstorage`(`id`, `localpath`) 
      VALUES ('$i','$fpath')";
    $result = mysqli_query($conn, $sql);
    
    if(!isset($result)){
          echo "<script type=\"text/javascript\">
          saveFilePath
          </script>"; 
        
        } else{
          echo "<script type=\"text/javascript\">
          not saveFilePath
          </script>"; 
        }




    }
    closedir($dh);
  }
}

include("createThumbnail.php");

  
		

  
?>






  




  
  


