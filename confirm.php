<?php
$name = $_POST['name'];
$age = $_POST['age'];
$job = $_POST['job'];
$skill = $_POST['skill'];
?>

<h1>登録ありがとうございます！</h1>

<p>名前：<?= htmlspecialchars($name) ?></p>
<p>年齢：<?= htmlspecialchars($age) ?></p>
<p>職歴：<?= htmlspecialchars($job) ?></p>
<p>伝えられること：<?= nl2br(htmlspecialchars($skill)) ?></p>

<a href="mypage.php">マイページへ</a>
