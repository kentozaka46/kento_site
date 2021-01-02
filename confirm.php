<?php
session_start();

// 入力画面からのアクセスでなければ戻す
if (!isset($_SESSION['form'])) {
    header('Location: contact.php');
    exit();
} else {
    $post = $_SESSION['form'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // メールを送信する
    $to = 'kentoball52@gmail.com';
    $from = $post['email'];
    $subject = 'お問い合わせが届きました';
    $pfrom   = "-f $from";
    $body = <<<EOT
    貴社名： {$post['company']}
    名前： {$post['name']}
    メールアドレス： {$post['email']}
    電話番号： {$post['tel']}
    内容： {$post['message']}
EOT;
    // var_dump($body);
    // exit();
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");
    mb_send_mail($to, $subject, $body, "From: {$from}", $pfrom);

    // セッションを消してお礼画面へ
    unset($_SESSION['form']);
    header('Location: thanks.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ内容確認フォーム</title>
</head>

<body>
    <form action="" method="POST">
        <h2>お問い合わせ内容確認</h2>
        <p>貴社名：<?php echo htmlspecialchars($post['company']); ?></p>
        <p>名前：<?php echo htmlspecialchars($post['name']); ?></p>
        <p>メールアドレス：<?php echo htmlspecialchars($post['email']); ?></p>
        <p>電話番号：<?php echo htmlspecialchars($post['tel']); ?></p>
        <p>内容：<?php echo nl2br(htmlspecialchars($post['message'])); ?></p>
        <button><a href="contact.php">戻る</a></button>
        <button type="submit">送信する</button>
    </form>
</body>

</html>
