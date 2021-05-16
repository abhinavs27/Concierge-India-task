<?php
include("../connection/db_connect.php");

     if(isset($_POST["Import"])){
        
        $filename=$_FILES["file"]["tmp_name"];    
         if($_FILES["file"]["size"] > 0)
         {
            $file = fopen($filename, "r");
              while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
               {
               
                 $sql = "INSERT INTO `imagepath`(`id`, `filepath`) VALUES ('".$getData[0]."','".$getData[1]."')";

                $result = mysqli_query($conn, $sql);

            if(!isset($result))
            {
              echo "<script type=\"text/javascript\">
                  alert(\"Invalid File:Please Upload CSV File.\");
                 
                  </script>";    
            }
            else {
                echo "<script type=\"text/javascript\">
                alert(\"Images are being uploaded, you'll get an email when it's done\");
               
              </script>";
            }
               }
          
               fclose($file);  
         }
      }   


include("uploadImage.php");
// include("saveLocalPath.php");


?>

<!-- window.location = \"index.php\" -->