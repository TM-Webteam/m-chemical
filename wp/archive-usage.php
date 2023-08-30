<?php get_header(); ?>

<main class="arc-usage">

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li>使用用途</li>
      </ul>
    </div>
  </section>

  <section class="hero-d core">
    <div class="containers">
      <div class="hero-d__box">
        <h1 class="ttl-primary">使用用途</h1>
        <div class="hero-d__box--lead">ゴーセノール™・ゴーセネックス™・<br class="sp-only">ニチゴーGポリマー™の使用用途をご紹介します。</div>
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

  <section class="product bg-LB">
    <div class="containers">
      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page'   => 12,
        'post_type'    => 'usage',
        'paged' => $paged,
        'order' => 'DESC',
        'orderby' => 'modified',
        'post_status' => 'publish',
      );
      $latest_query = new WP_Query($args);
      $exclude_ids = array();
      if ($latest_query->have_posts()) :
      ?>
        <div class="flex item">
          <?php while ($latest_query->have_posts()) : $latest_query->the_post();
            $exclude_ids[] = get_the_ID();
            $post_id = get_the_ID();
            $post_terms = get_the_terms(get_the_ID(), 'column_category');
          ?>
            <a href="<?php the_permalink(); ?>" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="200">
              <?php the_post_thumbnail(); ?>
              <span><?php the_title(); ?></span>
            </a>
          <?php endwhile; ?>
          <!-- <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="200">
            <img src="<?php echo assets_path() ?>img/common/img-product01.jpg" alt="接着・バインダー">
            <span>接着・バインダー</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="300">
            <img src="<?php echo assets_path() ?>img/common/img-product02.jpg" alt="紙加工">
            <span>紙加工</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="400">
            <img src="<?php echo assets_path() ?>img/common/img-product03.jpg" alt="エマルジョン">
            <span>エマルジョン</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="500">
            <img src="<?php echo assets_path() ?>img/common/img-product04.jpg" alt="懸濁剤">
            <span>懸濁剤</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="600">
            <img src="<?php echo assets_path() ?>img/common/img-product05.jpg" alt="フィルム">
            <span>フィルム</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="700">
            <img src="<?php echo assets_path() ?>img/common/img-product06.jpg" alt="石油掘削">
            <span>石油掘削</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="800">
            <img src="<?php echo assets_path() ?>img/common/img-product07.jpg" alt="3Dプリンター">
            <span>3Dプリンター</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="900">
            <img src="<?php echo assets_path() ?>img/common/img-product08.jpg" alt="ガスバリア包材（溶融成型）">
            <span>ガスバリア包材<br>（溶融成型）</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="1000">
            <img src="<?php echo assets_path() ?>img/common/img-product09.jpg" alt="ガスバリア包材（コーティング）">
            <span>ガスバリア包材<br>（コーティング）</span>
          </a>
          <a href="#" class="flex aiC fS gap10 item__box" data-aos="flip-up" data-aos-delay="1100">
            <img src="<?php echo assets_path() ?>img/common/img-product10.jpg" alt="生分解性バリア包材">
            <span>生分解性<br>バリア包材</span>
          </a> -->
        </div>
      <?php endif; ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>