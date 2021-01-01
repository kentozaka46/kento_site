<?php get_header(); ?>

    <main>
      <!-- work -->
      <section class="work body slide-trigger">
        <div class="body">
          <h2 class="ttl slide">MY WORKS</h2>
          <p>「昨日の自分を超える」をモットーに、日々精進しています。私が実際に作ったものを掲載していきます。</p>
          <div class="work-body">
            <div class="work-parts">
              <img class="work-img" src="<?php echo get_template_directory_uri(); ?>/img/baseball-field-1149153_1280.jpg" alt="">
              <h3>タイトル</h3>
            </div>
  
            <div class="work-parts">
              <img class="work-img" src="<?php echo get_template_directory_uri(); ?>/img/baseball-field-1149153_1280.jpg" alt="">
              <h3>タイトル</h3>
            </div>
            
            <div class="work-parts">
              <img class="work-img" src="<?php echo get_template_directory_uri(); ?>/img/baseball-field-1149153_1280.jpg" alt="">
              <h3>タイトル</h3>
            </div>
          </div>
        </div>
      </section>

      <!-- about -->
      <section class="about slide-trigger">
        <div class="about-body">
          <img class="about-img" src="<?php echo get_template_directory_uri(); ?>/img/IMG_0994.JPG" alt="">
          <div class="about-parts">
            <h2 class="ttl slide">ABOUT ME</h2>
            <p class="name">金井建斗<span class="name-txt">/かないけんと</span></p>
            <p>生年月日：1998/2/25</p>
            <p>出身：兵庫県</p>
            <p>学歴：兵庫県立大学 経済学部応用経済学科</p>
            <div class="view">
              <a href="./about.html" class="btn">VIEW ALL</a>
            </div>
          </div>
        </div>
      </section>

      <!-- service -->
      <section id="service" class="service body slide-trigger">
          <h2 class="ttl slide">SERVICE</h2>
          <p>お客様の「欲しい」を実現します。強みの「傾聴力」を活かして、お客様の要望に沿ったものをお作りいたします。</p>
        <div class="service-body">
          <div class="service-parts">
            <h3 class="service-body-ttl">ディレクション</h3>
            <h4>DIRECTION</h4>
            <p class="service-icon"><i class="fas fa-directions fa-5x"></i></p>
            <p class="service-txt">お客様の要望をヒアリングし、現状の問題点を洗い出し、効果的なプランを作成いたします。制作ではデザインに入る前の事前の準備が特に重要になります。何が必要で何が必要でないのかを判断し、費用対効果の高いWebサイトを作るための土台を作ります。</p>
          </div>
          <div class="service-parts">
            <h3 class="service-body-ttl">デザイン</h3>
            <h4>DESIGN</h4>
            <p class="service-icon"><i class="fas fa-paint-brush fa-5x"></i></p>
            <p class="service-txt">ヒアリングに基づいたプランに沿って、デザインを作成いたします。人の使うものであることを常に意識して、使う人が迷わない、目的を達成できるデザインを心がけています。インターフェースの重要性が増す中でデザインの役割を理解し、そのプランに最適な提案をさせていただきます。</p>
          </div>
          <div class="service-parts">
            <h3 class="service-body-ttl">コーディング</h3>
            <h4>CODING</h4>
            <p class="service-icon"><i class="fas fa-code fa-5x"></i></p>
            <p class="service-txt">デザインの意図を理解し、動きや効果を適切に使用することでWebサイトの仕上がりは大きく変わります。スマートフォンサイト、ワードプレスを使用した更新性の高いサイト、Javascriptを使用した動きのあるサイトなど、様々なサイトのコーディングを行っております。</p>
          </div>
        </div>
      </section>

      <!-- skill -->
      <section id="skill" class="skill body slide-trigger">
        <h2 class="ttl slide">MY SKILL</h2>
        <p>Web制作に必要な基本的なスキルを揃えております。html, cssをはじめとし、日々技術力の向上に努めております。</p>
        <div class="skill-content">
          <div class="skill-parts">
            <h3 class="skill-ttl">HTML</h3>
            <p><i class="fab fa-html5 fa-3x"></i></p>
            <p>★★★★☆</p>
          </div>
          <div class="skill-parts">
            <h3 class="skill-ttl">CSS</h3>
            <p><i class="fab fa-css3-alt fa-3x"></i></p>
            <p>★★★★☆</p>
          </div>
          <div class="skill-parts">
            <h3 class="skill-ttl">JavaScript</h3>
            <p><i class="fab fa-js fa-3x"></i></p>
            <p>★★★★☆</p>
          </div>
          <div class="skill-parts">
            <h3 class="skill-ttl">jQuery</h3>
            <p><i class="fas fa-file-code fa-3x"></i></p>
            <p>★★★★☆</p>
          </div>
          <div class="skill-parts">
            <h3 class="skill-ttl">WordPress</h3>
            <p><i class="fab fa-wordpress fa-3x"></i></p>
            <p>★★★★☆</p>
          </div>
          <div class="skill-parts">
            <h3 class="skill-ttl">Design</h3>
            <p><i class="fas fa-palette fa-3x"></i></p>
            <p>★★★☆☆</p>
          </div>
        </div>
      </section>

    </main>

    <?php get_footer(); ?>