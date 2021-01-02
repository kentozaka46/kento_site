<?php
session_start();
$error = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $post = filter_input_array(INPUT_POST, $_POST);

  // フォームの送信時にエラーをチェックする
  if ($post['name'] === '') {
    $error['name'] = 'blank';
  }

  if ($post['email'] === '') {
    $error['email'] = 'blank';
  } elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
    $error['email'] = 'email';
  }

  if ($post['message'] === '') {
    $error['message'] = 'blank';
  }

  if (count($error) === 0) {
    // エラーがないので確認画面へ移動
    $_SESSION['form'] = $post;
    header('Location: confirm.php');
    exit();
  }
} else {
  if (isset($_SESSION['form'])) {
    $post = $_SESSION['form'];
  }
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>お問い合わせ</title>
  <link rel="stylesheet" href="https://tomap.co/ZP_reset.css" />
  <link rel="stylesheet" href="./stylesheet.css" />
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
  <header class="header2">
    <h2 class="header-ttl2">KENTO KANAI<br><span class="header-span2">OFFICIAL WEBSITE</span></h2>
    <span class="nav-menu none">
      <i class="nav-menu-i"></i>
      <i class="nav-menu-i"></i>
      <i class="nav-menu-i"></i>
    </span>
    <nav class="nav2">
      <ul class="header-nav2">
        <li class="header-nav-list2 btn"><a href="index.html">HOME</a></li>
        <li class="header-nav-list2 btn"><a href="">MY WORKS</a></li>
        <li class="header-nav-list2 btn"><a href="about.html">ABOUT ME</a></li>
        <li class="header-nav-list2 btn"><a href="">SERVICE</a></li>
        <li class="header-nav-list2 btn"><a href="">MY SKILL</a></li>
        <li class="header-nav-list2 btn"><a href="contact.html">CONTACT</a></li>
        <p class="header-nav-list2"><a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a></p>
      </ul>
    </nav>
  </header>

  <main>
    <section>
      <div class="contact body">
        <div class="contact-body">
          <!-- actionの中身は空にしてこのページに返ってくるようにする -->
          <form action="" method="post" novalidate>
            <h2 class="ttl">Contact</h2>
            <p>制作の依頼・ご相談などお気軽にお問い合わせください。
              下記フォームよりわかる範囲でご記入ください。</p>

            <div class="form-body">
              <p class="form-ttl">貴社名</p>
              <input type="text" name="company" class="form" value="<?php echo htmlspecialchars($post['company']); ?>">

              <p class="form-ttl">お名前</p>
              <input type="text" name="name" class="form" value="<?php echo htmlspecialchars($post['name']); ?>">
              <?php if ($error['name'] === 'blank') : ?>
                <p class="error">※お名前を記入してください</p>
              <?php endif; ?>

              <p class="form-ttl">メールアドレス</p>
              <input type="email" name="email" class="form" value="<?php echo htmlspecialchars($post['email']); ?>">
              <?php if ($error['email'] === 'blank') : ?>
                <p class="error">※メールアドレスを記入してください</p>
              <?php endif; ?>
              <?php if ($error['email'] === 'email') : ?>
                <p class="error">※メールアドレスを正しく記入してください</p>
              <?php endif; ?>

              <p class="form-ttl">電話番号</p>
              <input type="text" name="tel" class="form" value="<?php echo htmlspecialchars($post['tel']); ?>">

              <p class="form-ttl">お問い合わせ内容</p>
              <textarea name="message" id="" cols="30" rows="10" class="form"><?php echo htmlspecialchars($post['message']); ?></textarea>
              <?php if ($error['message'] === 'blank') : ?>
                <p class="error">※お問い合わせ内容を記入してください</p>
              <?php endif; ?>
            </div>
            <input type="submit" value="内容を送信する" class="submit" name="confirm">
          </form>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <nav>
      <ul class="footer-nav">
        <li class="footer-nav-list"><a class="btn" href="index.html">HOME</a></li>
        <li class="footer-nav-list"><a class="btn" href="">MY WORKS</a></li>
        <li class="footer-nav-list"><a class="btn" href="about.html">ABOUT ME</a></li>
        <li class="footer-nav-list"><a class="btn" href="">SERVICE</a></li>
        <li class="footer-nav-list"><a class="btn" href="">MY SKILL</a></li>
        <li class="footer-nav-list"><a class="btn" href="contact.html">CONTACT</a></li>
      </ul>
    </nav>
    <p class="footer-copy">©️ Kanai Kento</p>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="jquery.inview-master/jquery.inview.min.js"></script>
  <script src="main.js"></script>
</body>
