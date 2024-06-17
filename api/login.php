<?php

if($_POST['Email'] && $_POST['Password']) {
  include '../data/fetchData.php';
  $conn = createDBConnection();
  $dataAsArray = [
    "Email" => $_POST['Email'],
    "Password" => $_POST['Password'],
  ];
  $isAdmin = joinInAdminPanel($conn, $dataAsArray);
  if (!$isAdmin) $notValid = TRUE;
  closeDBConnection($conn);
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?= $isAdmin
      ? "<div style='display: none;' class='get-elems' data-email='{$dataAsArray['Email'][0]}'></div>" 
      : "<div style='display: none;' class='get-elems' data-error='{$notValid}'></div>" 
    ?>
</body>
</html>