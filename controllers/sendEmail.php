<?php
  include("baseUrl.php"); 

$to = $_POST['email'];
$subject = "concierge admin";
$txt = "Task is successful";

mail($to,$subject,$txt);

  echo "<script type=\"text/javascript\">
    alert(\"Email Successfully send.\") 
    window.location = <?php echo BASE_URL; ?>\"index.php\" 

 </script>"; 

?> 