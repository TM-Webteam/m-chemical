<?php get_header(); ?>

<main class="">

  <section class="arc-news">
    <div class="containers flex">

      <!-- 投稿記事詳細メイン -->
      <article class="main-conts">

        <h1 class="ttl-secondary non"><span>○○○○（カテゴリ名）</span>に関するお知らせ</h1>

        <div class="item">

          <a href="#" class="item__box">
            <div class="flex gap20 fS aiC inherit item__box--date">
              <time class="time">2021.3.8</time>
              <span class="cat">お知らせ/ニュース</span>
            </div>
            <summary class="item__box--ttl"><h3>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</h3></summary>
          </a>

          <a href="#" class="item__box">
            <div class="flex gap20 fS aiC inherit item__box--date">
              <time class="time">2021.3.8</time>
              <span class="cat">お知らせ/ニュース</span>
            </div>
            <summary class="item__box--ttl"><h3>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</h3></summary>
          </a>

          <a href="#" class="item__box">
            <div class="flex gap20 fS aiC inherit item__box--date">
              <time class="time">2021.3.8</time>
              <span class="cat">お知らせ/ニュース</span>
            </div>
            <summary class="item__box--ttl"><h3>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</h3></summary>
          </a>

          <a href="#" class="item__box">
            <div class="flex gap20 fS aiC inherit item__box--date">
              <time class="time">2021.3.8</time>
              <span class="cat">お知らせ/ニュース</span>
            </div>
            <summary class="item__box--ttl"><h3>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</h3></summary>
          </a>

          <a href="#" class="item__box">
            <div class="flex gap20 fS aiC inherit item__box--date">
              <time class="time">2021.3.8</time>
              <span class="cat">お知らせ/ニュース</span>
            </div>
            <summary class="item__box--ttl"><h3>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</h3></summary>
          </a>
          
        </div>

        <nav class="pagination">
          <div class="nav-links">
            <a class="prev page-numbers" href="#"><span></span></a>
            <a class="page-numbers" href="#">1</a>
            <span class="page-numbers current">2</span>
            <a class="page-numbers" href="#">3</a>
            <a class="page-numbers" href="#">4</a>
            <a class="page-numbers" href="#">5</a>
            <a class="next page-numbers" href="#"><span></span></a>
          </div>
        </nav>

      </article>

      <!-- サイドメニュー -->
      <aside class="side-nav">

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="bnr-contact"><img src="<?php echo assets_path() ?>img/common/bnr-contact.png" alt=""></a>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/" class="bnr-catalog"><img src="<?php echo assets_path() ?>img/common/bnr-catalog.png" alt=""></a>

      </aside>
      
    </div>
  </section>

</main>

<?php get_footer(); ?>