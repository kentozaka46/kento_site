<?php
 
/*
Template Name: contact-page
*/

?>

<?php get_header(1); ?>
  
    <main>
      <section>
        <div class="contact body">
          <div class="contact-body">
            <h2 class="ttl">Contact</h2>
            <p>制作の依頼・ご相談などお気軽にお問い合わせくださいませ。
            下記フォームよりわかる範囲でご記入ください。</p>
            <div class="form-body">
              <p class="form-ttl">貴社名</p>
              <input type="text" class="form">
              <p class="form-ttl">お名前</p>
              <input type="text" class="form">
              <p class="form-ttl">メールアドレス</p>
              <input type="text" class="form">
              <p class="form-ttl">電話番号</p>
              <input type="text" class="form">
              <p class="form-ttl">お問い合わせ内容</p>
              <textarea name="" id="" cols="30" rows="10" class="form"></textarea>
            </div>
            <input type="submit" value="内容を送信する" class="submit">
          </div>
        </div>
      </section>
    </main>
  
    <?php get_footer(1); ?>