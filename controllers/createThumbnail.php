<?php
 // Include the database config file 
 include("../connection/db_connect.php");
const IMAGE_HANDLERS = [
    IMAGETYPE_JPEG => [
        'load' => 'imagecreatefromjpeg',
        'save' => 'imagejpeg',
        'quality' => 100
    ],
    IMAGETYPE_PNG => [
        'load' => 'imagecreatefrompng',
        'save' => 'imagepng',
        'quality' => 0
    ],
    IMAGETYPE_GIF => [
        'load' => 'imagecreatefromgif',
        'save' => 'imagegif'
    ]
];


function createThumbnail($src, $dest, $targetWidth, $targetHeight = null) {
    $type = exif_imagetype($src);

    if (!$type || !IMAGE_HANDLERS[$type]) {
        return null;
    }

    $image = call_user_func(IMAGE_HANDLERS[$type]['load'], $src);

    // no image found at supplied location -> exit
    if (!$image) {
        return null;
    }


   
    $width = imagesx($image);
    $height = imagesy($image);

    // maintain aspect ratio when no height set
    if ($targetHeight == null) {

        // get width to height ratio
        $ratio = $width / $height;

        if ($width > $height) {
            $targetHeight = floor($targetWidth / $ratio);
        }
        
        else {
            $targetHeight = $targetWidth;
            $targetWidth = floor($targetWidth * $ratio);
        }
    }

    $thumbnail = imagecreatetruecolor($targetWidth, $targetHeight);

    if ($type == IMAGETYPE_GIF || $type == IMAGETYPE_PNG) {

        imagecolortransparent(
            $thumbnail,
            imagecolorallocate($thumbnail, 0, 0, 0)
        );

        if ($type == IMAGETYPE_PNG) {
            imagealphablending($thumbnail, false);
            imagesavealpha($thumbnail, true);
        }
    }

    imagecopyresampled(
        $thumbnail,
        $image,
        0, 0, 0, 0,
        $targetWidth, $targetHeight,
        $width, $height
    );


    return call_user_func(
        IMAGE_HANDLERS[$type]['save'],
        $thumbnail,
        $dest,
        IMAGE_HANDLERS[$type]['quality']
    );
}

// createThumbnail('../uploadImage/image1.png', '../thumbnailImage/image1_thumb.png', 256);

// include("sendEmail.php");

   


	$query = "SELECT * FROM pathlocalstorage";
  $result = $conn->query($query);

	if ($result->num_rows > 0) {
 	   while ($row = $result->fetch_assoc()) {
        createThumbnail($row["localpath"], '../thumbnailImage/image'.$row["id"].'_thumb.png', 256);

 	  
 	    }
	}else{
    
        echo "<script type=\"text/javascript\">
       console.log(\"not createThumbnail\") 
        </script>"; 
    }

include("sendEmail.php");

function saveThumToDb(){


$dir = "../thumbnailImage/";

$i = 0;
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      $i = $i+1;
      // echo "filename:" . $file . "<br>";
      
      $fpath = "C:@\xampp@\htdocs@\Concierge India@\thumbnailImage".$file;

      $sql = "INSERT INTO `pathlocalstorage`(`id`, `imageData`) 
      VALUES ('$i','$fpath')";
    $result = mysqli_query($conn, $sql);
    
    if(!isset($result)){
          echo "<script type=\"text/javascript\">
          saveThumToDb
          </script>"; 
        
        } else{
          echo "<script type=\"text/javascript\">
          not saveThumToDb
          </script>"; 
        }




    }
    closedir($dh);
  }
}
}

?>

