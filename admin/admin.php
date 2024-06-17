<?php
$salt = 'someText';
if($_POST['Email'] && $_POST['Password']) {
  include '../data/fetchData.php';
  $conn = createDBConnection();
  $dataAsArray = [
    "Email" => $_POST['Email'],
    "Password" => md5(md5($_POST['Password']) . $salt),
  ];
  if (!$_COOKIE['pwd'] || !$_COOKIE['user']) {
    setcookie('user', $dataAsArray['Email']);
    setcookie('pwd', $dataAsArray['Password']);
  }
  $isAdmin = joinInAdminPanel($conn, $dataAsArray);
  if (!$isAdmin) $notValid = TRUE;
  closeDBConnection($conn);
} else if ($_COOKIE['pwd'] && $_COOKIE['user']) {
  include '../data/fetchData.php';
  $conn = createDBConnection();
  $dataAsArray = [
    "Email" => $_COOKIE['user'],
    "Password" => $_COOKIE['pwd'],
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
    <title>Escape admin</title>
    <link rel="icon" type="image/x-icon" href="/static/imgs/admin.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/static/styles/admin<?= $isAdmin ? "Panel" : "Login"?>.css">
  </head>
  <body>
    <?= $isAdmin
      ? "<div style='display: none;' class='get-elems' data-email='{$dataAsArray['Email'][0]}'></div>" 
      : "<div style='display: none;' class='get-elems' data-error='{$notValid}'></div>" 
    ?>
    <?php include $isAdmin ? './adminPanel.php' : './loginAdmin.php' ?>
  </body>
</html>