<?php get_header(); ?>
<?php
$tax_name = 'technical_category'; //タクソノミー指定
$term_slug = $term; //親タームslug指定
// $termsparent = get_terms($tax_name, array('slug' => $term_slug)); //親ターム情報取得
// $termchildren = get_terms($tax_name, array('parent' => $termsparent[0]->term_id)); //子ターム情報取得
$shiteiID = get_queried_object_id();
$termchildren = get_term_children($shiteiID, $tax_name);
?>
<main class="tax-technical-<?php echo $term_slug; ?>">


  <section class="hero-d core">
    <div class="containers">
      <div class="hero-d__box">
        <div class="hero-d__box--had"><span>技術情報</span></div>
        <h1 class="ttl-primary"><?php esc_html(single_cat_title()); ?></h1>
        <div class="hero-d__box--lead"><?php esc_html(single_cat_title()); ?>に関する技術情報をご紹介します。</div>
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

  <section class="anc">
    <div class="containers">
      <!-- <div class="search">
        <form action="" class="search__form">
          <input class="search__input" type="search" placeholder="キーワードから探す">
          <button class="search__btn" type="submit"><img src="<?php echo assets_path() ?>img/common/icon-search-g.svg"></button>
        </form>
      </div> -->
      <ul class="flex jcC gap30 inherit anc__box">
        <?php
        foreach ($termchildren as $term_ch) :
          $term_c = get_term_by('id', $term_ch, $tax_name);
        ?>
          <li><a href="#<?php echo $term_c->slug; ?>"><?php echo $term_c->name; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <?php
  // print_r($termchildren);
  $shiteiID = get_queried_object_id();
  $termchildren = get_term_children($shiteiID, $tax_name);
  // print_r($termchildren);
  foreach ($termchildren as $term_ch) :
    $term_c = get_term_by('id', $term_ch, $tax_name);
    // print_r($term_c);
  ?>
    <section id="<?php echo $term_c->slug; ?>" class="area">
      <div class="containers">
        <h2 class="area__ttl"><?php echo $term_c->name; ?></h2>
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page'   => -1,
          'post_type'    => 'technical',
          'paged' => $paged,
          'post_status' => 'publish',
          'tax_query' => array(
            array(
              'taxonomy' => 'technical_category',
              'field' => 'slug',
              'terms' => array($term_c->slug),
              'operator' => 'IN'
            )
          ),
        );
        $latest_query = new WP_Query($args);
        $exclude_ids = array();
        if ($latest_query->have_posts()) :
        ?>
          <div class="flex fS card">
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
        <?php endif; ?>
      </div>
    </section>
  <?php endforeach; ?>



</main>

<?php get_footer(); ?>