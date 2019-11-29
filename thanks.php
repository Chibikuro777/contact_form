<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
}
    // 入力内容の取得
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    // 表示
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>送信完了</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>お問い合わせありがとうございました！</h1>
    <p><?php echo $nickname; ?></p>
    <p><?php echo $email; ?></p>
    <p><?php echo $content; ?></p>
</body>
</html>