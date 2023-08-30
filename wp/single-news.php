<?php
$post_id = get_the_ID();
$post_terms = get_the_terms($post_id, 'news_category');
$title = get_the_title();
$lead = get_post_meta($post_id, "lead", true);
$comment = get_post_meta($post_id, "comment", true);
?>
<?php get_header(); ?>

<main class="">
  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>news/">ニュース</a></li>
        <li><?php echo $title; ?></li>
      </ul>
    </div>
  </section>
  <section class="news-single">
    <div class="containers flex">

      <!-- 投稿記事詳細メイン -->
      <article class="main-conts">

        <div class="flex gap20 fS aiC inherit news-single__date">
          <time class="time"><?php echo get_the_modified_date('Y.m.d', $post_id); ?></time>
          <?php if ($post_terms) : ?>
            <?php foreach ($post_terms as $post_term) : ?>
              <div class="cat"><?php echo esc_html($post_term->name); ?></div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>

        <h1 class="news-single__h1"><?php echo $title; ?></h1>

        <div class=" news-single__lead"><?php echo $lead; ?></div>

        <div class=" news-single__conts">
          <?php echo $comment; ?>
        </div>

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