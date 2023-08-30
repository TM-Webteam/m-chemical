<?php get_header(); ?>

<main class="">

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li>お知らせ</li>
      </ul>
    </div>
  </section>

  <section class="arc-news">
    <div class="containers flex">

      <!-- 投稿記事詳細メイン -->
      <article class="main-conts">

        <h1 class="ttl-secondary non">お知らせ</h1>

        <div class="item">
          <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'posts_per_page'   => 12,
            'post_type'    => 'news',
            'paged' => $paged,
            'order' => 'DESC',
            'orderby' => 'modified',
            'post_status' => 'publish',
          );
          $latest_query = new WP_Query($args);
          $exclude_ids = array();
          if ($latest_query->have_posts()) :
          ?>
            <?php while ($latest_query->have_posts()) : $latest_query->the_post();
              $exclude_ids[] = get_the_ID();
              $post_id = get_the_ID();
              $post_terms = get_the_terms($post_id, 'news_category');
            ?>
              <a href="<?php the_permalink(); ?>" class="item__box">
                <div class="flex gap20 fS aiC inherit item__box--date">
                  <time class="time"><?php echo get_the_modified_date('Y.m.d', $post_id); ?></time>
                  <?php if ($post_terms) : ?>
                    <?php foreach ($post_terms as $post_term) : ?>
                      <div class="cat"><?php echo esc_html($post_term->name); ?></div>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
                <summary class="item__box--ttl">
                  <h3><?php the_title(); ?></h3>
                </summary>
              </a>
          <?php endwhile;
          endif; ?>

        </div>
        <?php
        $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
        the_posts_pagination(array(
          'mid_size' => 1,
          'prev_text' => '<span></span>',
          'next_text' => '<span></span>'
        ));
        wp_reset_postdata();
        ?>
        <!-- <nav class="pagination">
          <div class="nav-links">
            <a class="prev page-numbers" href="#"><span></span></a>
            <a class="page-numbers" href="#">1</a>
            <span class="page-numbers current">2</span>
            <a class="page-numbers" href="#">3</a>
            <a class="page-numbers" href="#">4</a>
            <a class="page-numbers" href="#">5</a>
            <a class="next page-numbers" href="#"><span></span></a>
          </div>
        </nav> -->

      </article>

      <!-- サイドメニュー -->
      <aside class="side-nav">

        <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="bnr-contact"><img src="<?php echo assets_path() ?>img/common/bnr-contact.png" alt=""></a>

        <a href="<?php echo esc_url(home_url('/')); ?>catalog/" class="bnr-catalog"><img src="<?php echo assets_path() ?>img/common/bnr-catalog.png" alt=""></a>

      </aside>

    </div>
  </section>

</main>

<?php get_footer(); ?>