<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
</head>

<body>
  <form action="file_get.php" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        写真:<input type="file" name="picture">
      </li>
      <li>
        <input type="submit" value="送信する">
      </li>
    </ul>
  </form>
</body>

</html>