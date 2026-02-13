<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>経験を登録</title>
</head>
<body>

<h1>あなたの経験を教えてください</h1>

<form action="confirm.php" method="POST">
  名前：<input type="text" name="name"><br><br>
  年齢：<input type="number" name="age"><br><br>
  元の仕事：<input type="text" name="job"><br><br>
  若手に伝えられること：<br>
  <textarea name="skill"></textarea><br><br>

  <button type="submit">登録する</button>
</form>

</body>
</html>
