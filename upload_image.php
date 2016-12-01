<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>JS Drag & Drop</title>
  <link rel="stylesheet" href="stylesheets/screen.css" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

<?php
foreach ($_FILES["userImage"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["userImage"]["tmp_name"][$key];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["userImage"]["name"][$key]);
        //move_uploaded_file($tmp_name, "data/$name");
		echo '<div class="success">Plik <b>' .$name.'</b> został przesłany</div></br>';
    }
}
?>

</body>
</html>
