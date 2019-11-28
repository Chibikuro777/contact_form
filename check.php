<?php
    $nickname = $_POST['nickname'];
    // $_POST['nickname']
    // ユーザーが入力したニックネームが入ってる
    // POSTで送信されたデータは
    // $_POSTっていうスーパーグローバル変数に連想配列形式で保存されます。

    // スーパーグローバル変数とは↓
    // 自分で定義する必要がない変数
    // PHPで元々用意されている変数
    // 複数ある
    // それぞれ役割がある
    // $_POSTの役割
    // POSTされたデータを連想配列形式で保存
    // key： name属性の値
    // value： ユーザーが入力した内容

    // ['okinawa' => 'FC琉球'] //key / value

    // メールアドレス
        $email = $_POST['email'];
    // お問い合わせ
        $content = $_POST['content'];
        // 入力内容のチェック
        if ($nickname == '') {
            $nickname_result = 'ニックネームが入力されていません。';
        } else {
            $nickname_result = 'ようこそ、' . $nickname .'様';
        }
        
        if ($email == '') {
            $email_result = 'メールアドレスが入力されていません。';
        } else {
            $email_result = 'メールアドレス：' . $email;
        }
    
        if ($content == '') {
            $content_result =  'お問い合わせ内容が入力されていません。';
        } else {
            $content_result = 'お問い合わせ内容：' . $content;
        }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>入力内容確認</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>入力内容確認</h1>
    <p><?php echo $nickname_result; ?></p>
    <p><?php echo $email_result; ?></p>
    <p><?php echo $content_result; ?></p>
</body>
</html>