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
    <h1 class="c-hero-copy o-cover__middle js-fade-up">
      <span class="c-display-l u-text-weight-b u-font-en-con">Company</span>
      <span class="c-display-xs"><?php the_title();?></span>
    </h1>
  </div>
</div>
<div class="o-box o-box--transparent o-center u-bg-qua u-pb-2xl js-pull-view">
  <h1 class="c-heading u-text-center u-text-weight-b u-font-en-con js-fade-up">Information</h1>
  <dl class="o-sidebar o-sidebar--table js-fade-up">
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">屋号/商号</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'name');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">所在地</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      〒<span
        class="u-font-en-con"><?php echo get_vars('company', 'zip');?></span>
      <?php echo get_vars('company', 'address');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">設立</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'birth');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">代表取締役</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'owner');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">URL</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <a class="c-text-link"
        href="<?php echo get_vars('company', 'url');?>"
        target="_blank"
        rel="noopener"><?php echo get_vars('company', 'url');?></a>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">事業内容</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_service_list();?>
    </dd>
  </dl>
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
        <h2 class="c-display-m u-text-center u-text-weight-b u-font-en-con js-fade-up">Philosophy</h2>
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
<div class="o-box o-box--transparent u-bg-primary u-pb-2xl js-pull-view">
  <div class="o-center o-center--content">
    <h2 class="c-sec-heading u-text-center u-text-weight-b u-font-en-con js-fade-up">History</h2>
    <dl class="o-sidebar o-sidebar--table js-fade-up">
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">20YY年MM月</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">できごと</dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">20YY年MM月</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">できごと</dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">20YY年MM月</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">できごと</dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">20YY年MM月</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">できごと</dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">20YY年MM月</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">できごと</dd>
    </dl>
  </div>
</div>
<?php get_footer();?>