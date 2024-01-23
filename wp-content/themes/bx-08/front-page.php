<?php get_header();?>
<div class="c-puton c-puton--filter js-pull-view">
  <picture class="o-frame o-frame--switch-l">
    <source type="image/avif"
      srcset="<?php echo get_template_directory_uri();?>/img/hero.avif" />
    <source type="image/webp"
      srcset="<?php echo get_template_directory_uri();?>/img/hero.webp" />
    <img
      src="<?php echo get_template_directory_uri();?>/img/hero.png"
      width="100%" height="100%" decoding="async" fetchpriority="high" alt="" />
  </picture>
  <div class="c-puton__inner o-cover">
    <h1 class="c-hero-copy o-cover__middle">
      <span class="c-display-m u-text-weight-b">ビジネスをもっと青く</span>
      <span class="c-display-l u-font-logo">BLUE B NOSE</span>
    </h1>
  </div>
</div>
<div class="c-puton c-puton--filter js-pull-view">
  <picture class="o-frame o-frame--switch-l">
    <source type="image/avif"
      srcset="<?php echo get_template_directory_uri();?>/img/dummy-img01.avif" />
    <source type="image/webp"
      srcset="<?php echo get_template_directory_uri();?>/img/dummy-img01.webp" />
    <img
      src="<?php echo get_template_directory_uri();?>/img/dummy-img01.jpg"
      width="100%" height="100%" decoding="async" fetchpriority="high" alt="" />
  </picture>
  <div class="c-puton__inner o-cover u-pt-m u-pb-m u-pl-m u-pr-m">
    <div class="o-cover__middle">
      <div class="o-stack o-stack--l o-center o-center--content u-bg-brand-alpha u-pt-2xl u-pb-2xl">
        <h2 class="c-display-m u-text-center u-text-weight-b u-font-en-con js-fade-up">News</h2>
        <?php echo get_front_news();?>
      </div>
    </div>
  </div>
</div>
<div class="c-puton c-puton--filter js-pull-view">
  <picture class="o-frame o-frame--switch-l">
    <source type="image/avif"
      srcset="<?php echo get_template_directory_uri();?>/img/dummy-img02.avif" />
    <source type="image/webp"
      srcset="<?php echo get_template_directory_uri();?>/img/dummy-img02.webp" />
    <img
      src="<?php echo get_template_directory_uri();?>/img/dummy-img02.jpg"
      width="100%" height="100%" decoding="async" fetchpriority="high" alt="" />
  </picture>
  <div class="c-puton__inner o-cover u-pt-m u-pb-m u-pl-m u-pr-m">
    <div class="o-cover__middle">
      <div class="o-stack o-stack--l o-center o-center--content u-bg-brand-alpha u-pt-2xl u-pb-2xl js-fade-up">
        <h2 class="c-display-m u-text-center u-text-weight-b u-font-en-con js-fade-up">Concept</h2>
        <p class="c-content-l js-fade-up">
          あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
        </p>
        <p class="c-content-l js-fade-up">
          あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
        </p>
        <p class="c-content-l js-fade-up">
          あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
        </p>
      </div>
    </div>
  </div>
</div>
<div class="o-box o-box--transparent o-center u-bg-qua u-pb-2xl js-pull-view">
  <h2 class="c-sec-heading u-text-weight-b u-text-center u-font-en-con js-fade-up">Menu</h2>
  <?php echo get_front_menu();?>
</div>
<div class="o-box o-box--transparent o-center u-bg-primary u-pb-2xl js-pull-view">
  <h2 class="c-sec-heading u-text-weight-b u-text-center u-font-en-con js-fade-up">Store</h2>
  <div class="o-switcher">
    <div>
      <picture class="o-frame">
        <source type="image/avif"
          srcset="<?php echo get_template_directory_uri();?>/img/dummy-img01.avif" />
        <source type="image/webp"
          srcset="<?php echo get_template_directory_uri();?>/img/dummy-img01.webp" />
        <img
          src="<?php echo get_template_directory_uri();?>/img/dummy-img01.jpg"
          width="100%" height="100%" loading="lazy" decoding="async" fetchpriority="low" alt="" />
      </picture>
    </div>
    <div class="o-cover">
      <div class="o-cover__middle c-inner-box c-inner-box--max-content">
        <dl class="o-stack o-stack--s">
          <dt class="c-display-2xs u-text-weight-b js-fade-up">ダミー見出し</dt>
          <dd class="c-content-l js-fade-up">
            あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
          </dd>
        </dl>
      </div>
      <div class="u-text-center js-fade-up">
        <a class="o-box o-box--button o-box--rect-button o-box--ghost-button u-font-en-con"
          href="<?php echo home_url('/store/');?>">
          MORE </a>
      </div>
    </div>
  </div>
</div>
<div class="o-center u-pb-2xl">
  <h2 class="c-sec-heading u-text-center u-text-weight-b u-font-en-con">What's New</h2>
  <?php if (have_posts()):?>
  <ul class="o-grid o-grid--tri u-mb-xl">
    <?php while (have_posts()): the_post();?>
    <li>
      <a href="<?php the_permalink();?>"
        class="o-box o-stack c-link-card u-bg-qua">
        <?php echo get_thumb();?>
        <span class="o-stack o-stack--s u-pt-l u-pb-l u-pr-m u-pl-m">
          <span class="o-cluster o-cluster--middle">
            <time class="c-content-l u-font-en-con u-text-weight-m"
              datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y.m.d');?></time>
            <?php echo get_loop_cat();?>
          </span>
          <span
            class="c-content-l u-text-trim u-text-trim--two-line u-text-weight-b"><?php the_title();?></span>
          <span class="c-content-m u-text-secondary">
            <span
              class="u-font-en-con u-text-weight-m"><?php echo get_views_count();?></span>回表示・読了見込<span
              class="u-font-en-con u-text-weight-m"><?php echo get_readtime();?></span>分
          </span>
        </span>
      </a>
    </li>
    <?php endwhile;?>
  </ul>
  <?php else:?>
  <p class="c-content-l js-fade-up">記事はまだありません。</p>
  <?php endif;?>
  <div class="u-text-center js-fade-up">
    <a class="o-box o-box--button o-box--rect-button o-box--primary-button u-font-en-con"
      href="<?php echo home_url('/blog/');?>">
      MORE </a>
  </div>
</div>
<?php get_footer();?>