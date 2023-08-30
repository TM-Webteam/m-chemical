<?php
$post_id = get_the_ID();
$post_terms = get_the_terms($post_id, 'news_category');
$title = get_the_title();
$lead = get_post_meta($post_id, "lead", true);
$comment = get_post_meta($post_id, "comment", true);
$paragraph_arr = get_post_meta($post_id, "paragraph", false);
$paragraph_arr = CFS()->get('paragraph');
$relation_catalog_arr = CFS()->get('relation_catalog');
?>
<?php get_header(); ?>

<main class="sng-brand">

  <section class="">
    <div class="containers flex jcC">

      <!-- 投稿記事詳細メイン -->
      <article class="main-conts single">

        <h1 class="single__h1"><?php echo $title; ?></h1>

        <div class="single__lead"><?php echo $lead; ?></div>

        <?php
        $i = 0;
        if ($paragraph_arr) : foreach ($paragraph_arr as $paragraph) :
            $i++;
            $i2 = 0;
        ?>
            <h2 id="toc<?php echo $i; ?>" class="single__h2"><?php echo $paragraph['title'] ?></h2>
            <div class="single__txt">
              <?php echo $paragraph['comment'] ?>
            </div>
            <?php foreach ((array)$paragraph['caption'] as $caption) :
              $i2++;
            ?>
              <h3 id="toc<?php echo $i; ?>-<?php echo $i2 ?>" class="single__h3"><?php echo $caption['caption_title'] ?></h3>
              <div class="single__txt">
                <?php echo wp_kses_post($caption['caption_comment']) ?>
              </div>
            <?php endforeach ?>
        <?php endforeach;
        endif; ?>



        <?php get_template_part('parts/content', 'catalog'); ?>





      </article>

    </div>
  </section>

  <section class="inquiry">
    <div class="containers">
      <h2 class="ttl-secondary cW">貴社の使用用途や開発したい性能に合わせて<br>最適な機能性ポリビニルアルコール製品をご提案します！</h2>
      <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="more"><span>ご相談・お見積り依頼はこちら</span></a>
      <summary class="flex aiC jcC gap30 inquiry__box">
        <div class="inquiry__box--ttl">製品カタログ・安全データシートをご希望の方はこちら</div>
        <a href="<?php echo esc_url(home_url('/')); ?>catalog/" class="more-square"><span data-text="製品カタログダウンロード">製品カタログダウンロード</span></a>
      </summary>
    </div>
  </section>

</main>

<?php get_footer(); ?>