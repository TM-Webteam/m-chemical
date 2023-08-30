<?php get_header(); ?>

<main class="arc-knowledge">

  <section class="hero-d core">
    <div class="containers">
      <div class="hero-d__box">
        <h1 class="ttl-primary">お役立ち情報</h1>
        <div class="hero-d__box--lead">機能性ポリビニルアルコールに関する用語解説や<br class="sp-only">基礎情報をお届けするコラムです。</div>
      </div>
    </div>
  </section>

  <section class="">
    <div class="containers">
      <div class="search">
        <form action="" class="search__form">
          <input class="search__input" type="search" placeholder="キーワードから探す">
          <button class="search__btn" type="submit"><img src="<?php echo assets_path() ?>img/common/icon-search-g.svg"></button>
        </form>
      </div>
    </div>
  </section>

  <section class="arc-knowledge__box">
    <div class="containers">
      <div class="flex card">

        <a href="#" class="card__box">
          <div class="card__box--img"><img src="<?php echo assets_path() ?>img/knowledge/img01.jpg" alt=""></div>
          <h3 class="card__box--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="card__box--time"><time class="time">2021.03.16</time></div>
        </a>
        <a href="#" class="card__box">
          <div class="card__box--img"><img src="<?php echo assets_path() ?>img/knowledge/img01.jpg" alt=""></div>
          <h3 class="card__box--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="card__box--time"><time class="time">2021.03.16</time></div>
        </a>
        <a href="#" class="card__box">
          <div class="card__box--img"><img src="<?php echo assets_path() ?>img/knowledge/img01.jpg" alt=""></div>
          <h3 class="card__box--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="card__box--time"><time class="time">2021.03.16</time></div>
        </a>
        <a href="#" class="card__box">
          <div class="card__box--img"><img src="<?php echo assets_path() ?>img/knowledge/img01.jpg" alt=""></div>
          <h3 class="card__box--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="card__box--time"><time class="time">2021.03.16</time></div>
        </a>
        <a href="#" class="card__box">
          <div class="card__box--img"><img src="<?php echo assets_path() ?>img/knowledge/img01.jpg" alt=""></div>
          <h3 class="card__box--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="card__box--time"><time class="time">2021.03.16</time></div>
        </a>
        <a href="#" class="card__box">
          <div class="card__box--img"><img src="<?php echo assets_path() ?>img/knowledge/img01.jpg" alt=""></div>
          <h3 class="card__box--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
          <div class="card__box--time"><time class="time">2021.03.16</time></div>
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
    </div>
  </section>

</main>

<?php get_footer(); ?>