<?php
$post_id = get_the_ID();
$post_terms = get_the_terms($post_id, 'news_category');
$title = get_the_title();
$lead = get_post_meta($post_id, "lead", true);
$comment = get_post_meta($post_id, "comment", true);
$form_id = get_post_meta($post_id, "form_id", true);
$paragraph_arr = get_post_meta($post_id, "paragraph", false);
$paragraph_arr = CFS()->get('paragraph');
$material_image_arr = CFS()->get('material_image');

?>
<?php get_header(); ?>

<main>
  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>catalog/">製品カタログ</a></li>
        <li><?php echo $title; ?></li>
      </ul>
    </div>
  </section>
  <section class="">
    <div class="containers flex">

      <!-- 資料紹介 -->
      <article class="sub-conts article">

        <h1 class="article__ttl"><?php echo $title; ?></h1>

        <!-- 資料のスライダー -->
        <div class="wp-slick">
          <div id="wp-slick">
            <!-- <figure><?php the_post_thumbnail(); ?></figure> -->
            <?php foreach ($material_image_arr as $material_image) : ?>
              <figure><img src="<?php echo $material_image['image_file'] ?>" alt="<?php echo $title; ?>"></figure>
            <?php endforeach; ?>
          </div>
        </div>

        <h2 class="article__desc"><?php echo $lead; ?></h2>

        <div class="article__toc">
          <h2 class="article__toc--ttl">本資料の目次</h2>
          <div class="article__toc--list">
            <?php if ($paragraph_arr) : foreach ($paragraph_arr as $paragraph) : ?>
                <dl>
                  <dt>
                    <h3><?php echo esc_html(strip_tags($paragraph['title'])) ?></h3>
                  </dt>
                  <?php if ($paragraph['caption']) : ?>
                    <dd>
                      <ul>
                        <?php foreach ((array)$paragraph['caption'] as $caption) :
                          $i2++;
                          if (!empty($caption['caption_title'])) :
                        ?>
                            <li>
                              <h4><?php echo esc_html(strip_tags($caption['caption_title'])) ?></h4>
                            </li>
                        <?php
                          endif;
                        endforeach; ?>
                      </ul>
                    </dd>
                  <?php endif; ?>
                </dl>
            <?php endforeach;
            endif; ?>
          </div>
        </div>

      </article>

      <!-- サイドメニュー -->
      <aside class="side-form">

        <script type="text/javascript">
          var K3_acct = "mcggohsenol";
          var K3_campcode = "<?php echo $form_id; ?>";
          var K3_width = "auto";
          var K3_height = "auto";
        </script>
        <script type="text/javascript" src="https://form.k3r.jp/embed/"></script>

      </aside>

    </div>
  </section>

</main>

<?php get_footer(); ?>