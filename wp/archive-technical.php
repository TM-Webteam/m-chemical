<?php get_header(); ?>
<main class="arc-technical">

  <section class="hero-d core">
    <div class="containers">
      <div class="hero-d__box">
        <h1 class="ttl-primary">技術情報</h1>
        <div class="hero-d__box--lead">ゴーセノール™・ゴーセネックス™・ニチゴーGポリマー™の技術情報をお届けします。</div>
      </div>
    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li>技術情報</li>
      </ul>
    </div>
  </section>

  <!-- <section class="">
    <div class="containers">
      <div class="search">
        <form action="" class="search__form">
          <input class="search__input" type="search" placeholder="キーワードから探す">
          <button class="search__btn" type="submit"><img src="<?php echo assets_path() ?>img/common/icon-search-g.svg"></button>
        </form>
      </div>
    </div>
  </section> -->

  <section class="bg-LB">
    <div class="containers">
      <?php
      $termsparent = array();
      $termchildrens = array();
      $tax_name = 'technical_category'; //タクソノミー指定
      $term_slug = 'gohsenol'; //親タームslug指定
      $termsparent = get_terms($tax_name, array('slug' => $term_slug)); //親ターム情報取得
      if (!empty($termsparent)) {
        $termchildrens = get_terms($tax_name, array('parent' => $termsparent[0]->term_id)); //子ターム情報取得
      }
      ?>
      <?php if (!empty($termchildrens)) : ?>
        <div class="group">
          <h2 class="group__ttl">ゴーセノール™の技術情報</h2>
          <ul class="flex jcC gap30 group__btn">
            <?php foreach ($termchildrens as $termchildren) :
              // print_r($termchildren); 
            ?>
              <li><a href="<?php echo esc_url(home_url('/')); ?>technical/category/gohsenol/#<?php echo $termchildren->slug; ?>"><?php echo $termchildren->name; ?></a></li>

            <?php endforeach; ?>
          </ul>
          <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'posts_per_page'   => 6,
            'post_type'    => 'technical',
            'paged' => $paged,
            'post_status' => 'publish',
            'tax_query' => array(
              array(
                'taxonomy' => 'technical_category',
                'field' => 'slug',
                'terms' => array('gohsenol'),
                'operator' => 'IN'
              )
            ),
          );
          $latest_query = new WP_Query($args);
          $exclude_ids = array();
          if ($latest_query->have_posts()) :
          ?>
            <div class="flex gap30 card">
              <?php while ($latest_query->have_posts()) : $latest_query->the_post();
                $exclude_ids[] = get_the_ID();
                $post_id = get_the_ID();
                $post_terms = get_the_terms(get_the_ID(), 'column_category');
              ?>
                <a href="<?php the_permalink(); ?>" class="card__box">
                  <div class="card__box--img"><?php the_post_thumbnail(); ?></div>
                  <h3 class="card__box--ttl"><?php the_title(); ?></h3>
                </a>
              <?php endwhile; ?>
            </div>
            <div class="taC"><a href="<?php echo esc_url(home_url('/')); ?>technical/category/gohsenol/" class="txt-link"><span>一覧を見る</span><img src="<?php echo assets_path() ?>img/common/bg-more.svg" alt="一覧を見る"></a></div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <?php
      $termsparent = array();
      $termchildrens = array();
      $tax_name = 'technical_category'; //タクソノミー指定
      $term_slug = 'gohsenex'; //親タームslug指定
      $termsparent = get_terms($tax_name, array('slug' => $term_slug)); //親ターム情報取得if()
      if (!empty($termsparent)) {
        $termchildrens = get_terms($tax_name, array('parent' => $termsparent[0]->term_id)); //子ターム情報取得
      }
      ?>
      <?php if (!empty($termchildrens)) : ?>
        <div class="group">
          <h2 class="group__ttl v2">ゴーセネックス™の技術情報</h2>


          <ul class="flex jcC gap30 group__btn">
            <?php foreach ((array)$termchildrens as $termchildren) :
              // print_r($termchildren); 
            ?>
              <li><a href="<?php echo esc_url(home_url('/')); ?>technical/category/gohsenex/#<?php echo $termchildren->slug; ?>"><?php echo $termchildren->name; ?></a></li>

            <?php endforeach; ?>
          </ul>
          <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'posts_per_page'   => 6,
            'post_type'    => 'technical',
            'paged' => $paged,
            'post_status' => 'publish',
            'tax_query' => array(
              array(
                'taxonomy' => 'technical_category',
                'field' => 'slug',
                'terms' => array('gohsenex'),
                'operator' => 'IN'
              )
            ),
          );
          $latest_query = new WP_Query($args);
          $exclude_ids = array();
          if ($latest_query->have_posts()) :
          ?>
            <div class="flex gap30 card">
              <?php while ($latest_query->have_posts()) : $latest_query->the_post();
                $exclude_ids[] = get_the_ID();
                $post_id = get_the_ID();
                $post_terms = get_the_terms(get_the_ID(), 'column_category');
              ?>
                <a href="<?php the_permalink(); ?>" class="card__box">
                  <div class="card__box--img"><?php the_post_thumbnail(); ?></div>
                  <h3 class="card__box--ttl"><?php the_title(); ?></h3>
                </a>
              <?php endwhile; ?>
            </div>
            <div class="taC"><a href="<?php echo esc_url(home_url('/')); ?>technical/category/gohsenex/" class="txt-link"><span>一覧を見る</span><img src="<?php echo assets_path() ?>img/common/bg-more.svg" alt="一覧を見る"></a></div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <?php
      $termsparent = array();
      $termchildrens = array();
      $tax_name = 'technical_category'; //タクソノミー指定
      $term_slug = 'g-polymer'; //親タームslug指定
      $termsparent = get_terms($tax_name, array('slug' => $term_slug)); //親ターム情報取得if()
      if (!empty($termsparent)) {
        $termchildrens = get_terms($tax_name, array('parent' => $termsparent[0]->term_id)); //子ターム情報取得
      }
      ?>
      <?php if (!empty($termchildrens)) : ?>
        <div class="group">
          <h2 class="group__ttl v3">ニチゴーGポリマー™の技術情報</h2>


          <ul class="flex jcC gap30 group__btn">
            <?php foreach ((array)$termchildrens as $termchildren) :
              // print_r($termchildren); 
            ?>
              <li><a href="<?php echo esc_url(home_url('/')); ?>technical/category/g-polymer/#<?php echo $termchildren->slug; ?>"><?php echo $termchildren->name; ?></a></li>

            <?php endforeach; ?>
          </ul>
          <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'posts_per_page'   => 6,
            'post_type'    => 'technical',
            'paged' => $paged,
            'post_status' => 'publish',
            'tax_query' => array(
              array(
                'taxonomy' => 'technical_category',
                'field' => 'slug',
                'terms' => array('g-polymer'),
                'operator' => 'IN'
              )
            ),
          );
          $latest_query = new WP_Query($args);
          $exclude_ids = array();
          if ($latest_query->have_posts()) :
          ?>
            <div class="flex gap30 card">
              <?php while ($latest_query->have_posts()) : $latest_query->the_post();
                $exclude_ids[] = get_the_ID();
                $post_id = get_the_ID();
                $post_terms = get_the_terms(get_the_ID(), 'column_category');
              ?>
                <a href="<?php the_permalink(); ?>" class="card__box">
                  <div class="card__box--img"><?php the_post_thumbnail(); ?></div>
                  <h3 class="card__box--ttl"><?php the_title(); ?></h3>
                </a>
              <?php endwhile; ?>
            </div>
            <div class="taC"><a href="<?php echo esc_url(home_url('/')); ?>technical/category/g-polymer/" class="txt-link"><span>一覧を見る</span><img src="<?php echo assets_path() ?>img/common/bg-more.svg" alt="一覧を見る"></a></div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>