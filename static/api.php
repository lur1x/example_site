<?php
include '../data/fetchData.php';

$dataAsJson = file_get_contents("php://input");
$dataAsArray = json_decode($dataAsJson, true);

if ($dataAsArray['author_url'] && $dataAsArray['main_img_url']) {
  $author_iamge = splitToImgName($dataAsArray['author_url']);
  $main_img = splitToImgName($dataAsArray['main_img_url']);

  saveImage($dataAsArray['author_iamge'], $author_iamge);
  saveImage($dataAsArray['image'], $main_img);
} else {
  error_log('Err >>> Нет значения author_url и/или main_img_url');
  echo 'Err >>> Нет значения author_url и/или main_img_url';
}

function splitToImgName(string $img_str) {
  return explode('.', explode('/' ,$img_str)[3])[0];
}

function saveImage(string $imageBase64, $name) {
  $imageBase64Array = explode(';base64,', $imageBase64);
  $imgExtention = str_replace('data:image/', '', $imageBase64Array[0]);
  $imageDecoded = base64_decode($imageBase64Array[1]);
  saveFile("./imgs/{$name}.{$imgExtention}", $imageDecoded);
}

function saveFile(string $file, string $data): void {
  $myFile = fopen($file, 'w');
  if ($myFile) {
    $result = fwrite($myFile, $data);
    if (!$result) {
      echo 'Произошла ошибка при сохранении данных в файл';
    }
    fclose($myFile);
  } else {
    echo 'Произошла ошибка при открытии файла!';
  }
}

function insertDataIntoDB($conn, $dataAsArray):void {
  if ($dataAsArray['main_img_url'] && $dataAsArray['author_url'] && $dataAsArray['author_iamge'] && $dataAsArray['image'] && $dataAsArray['content']) {
    $sql = "INSERT INTO post (title, subtitle, publish_date, author, author_url, main_img_url, content) VALUES ('{$dataAsArray['title']}', '{$dataAsArray['subtitle']}', '{$dataAsArray['date']}', '{$dataAsArray['author']}', '{$dataAsArray['author_url']}', '{$dataAsArray['main_img_url']}', '{$dataAsArray['content']}');";
    if(mysqli_query($conn, $sql)){
      echo "Данные успешно добавлены";
    } else {
      echo "что-то пошло не так";
    }
  } else {
    error_log('Err >>> Нет каких-то значений');
    echo "какие-то данные не пришли!";
  }
}

$conn = createDBConnection();
insertDataIntoDB($conn, $dataAsArray);
closeDBConnection($conn);
