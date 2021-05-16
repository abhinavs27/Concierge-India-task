<?php
include("../connection/db_connect.php");

//all file url from db
$query = "SELECT * FROM imagepath";
$result = $conn->query($query);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
 
  //Get the file
$content = file_get_contents($row["filepath"]);
//Store in the filesystem.
$img = "../uploadImage/image".$row["id"].".png";

// saveFilePath("1","je");


$fp = fopen($img , "w");
fwrite($fp, $content);
fclose($fp);

//calling function


   }
}else{
  echo "<script type=\"text/javascript\">
  alert(\"Invalid uploadImage.php.\");
 
  </script>"; 
}
  

// 
include("saveLocalPath.php");



?>






  




  
  


