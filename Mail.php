<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mail</title>
</head>

<body>

<?php
/* first we send the email */
 $to = $_POST["email"];
 $subject = "Availability Report";
 $body = $_POST["Magazines"];
 if (mail($to, $subject, $body)) {
   echo("<p>Message successfully sent!</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }


  /* then we save the image */
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  }
 ?> 
 <button type="button" onclick="window.location.href='index.html'"">Go back to form</button>
</body>
</html>