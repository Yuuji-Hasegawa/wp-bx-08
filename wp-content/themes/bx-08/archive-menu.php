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
      <span class="c-display-l u-text-weight-b u-font-en-con">Menu</span>
      <span class="c-display-xs">メニュー</span>
    </h1>
  </div>
</div>
<div class="o-box o-box--transparent o-center u-pt-2xl u-pb-2xl js-pull-view">
  <?php if (have_posts()):?>
  <ul class="o-grid o-grid--tri u-mb-2xl js-pull-view" id="photos">
    <?php while (have_posts()): the_post();
        if(has_post_thumbnail()) {
            $url = get_the_post_thumbnail_url($post->ID, 'full');
        } else {
            $url = get_template_directory_uri() . '/img/thumb.png?' . date("YmdHis");
        }
        ?>
    <li class="o-stack o-stack--l">
      <a href="<?php echo $url;?>" class="c-lightbox-photo"
        target="_blank" rel="noopener">
        <?php echo get_thumb();?>
      </a>
      <div class="o-stack o-stack--s">
        <h3 class="c-display-2xs u-text-weight-b">
          <?php the_title();?>
        </h3>
        <div class="u-text-right u-text-weight-m">
          <span class="c-content-l u-text-weight-b">
            <span class="c-display-s u-font-en-con">
              <?php
                  $price = get_post_meta($post->ID, 'product_price', true);
        if ($price) {
            echo number_format(intval($price));
        } else {
            echo '0';
        }
        ?>
            </span>円
          </span>
          <span class="c-suppl-l">（税込）</span>
        </div>
      </div>
    </li>
    <?php endwhile;?>
  </ul>
  <ul class="o-stack u-content-wrap u-block-center">
    <li class="c-notes c-suppl-l u-text-secondary js-fade-up">
      仕入れ状況や情勢により、品切れの場合もあります。<br />大変お手数ですが、別途お問い合わせください。
    </li>
    <li class="c-notes c-suppl-l u-text-secondary js-fade-up">
      HPに掲載のない季節限定、期間限定メニューについては、直接店頭でご確認ください。
    </li>
  </ul>
  <?php else:?>
  <p class="c-content-l js-fade-up">メニューはまだありません。</p>
  <?php endif;?>
</div>
<div class="o-box o-box--transparent u-bg-primary u-pb-2xl js-pull-view">
  <div class="o-center o-center--content">
    <h2 class="c-sec-heading u-text-center u-text-weight-b u-font-en-con js-fade-up">Topping</h2>
    <dl class="o-sidebar o-sidebar--table js-fade-up">
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">トッピング</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">トッピング</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">トッピング</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">トッピング</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">トッピング</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">トッピング</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
    </dl>
  </div>
</div>
<div class="o-box o-box--transparent u-bg-invert u-pb-2xl js-pull-view">
  <div class="o-center o-center--content">
    <h2 class="c-sec-heading u-text-center u-text-weight-b u-font-en-con js-fade-up">Night Menu</h2>
    <h3 class="c-ter-heading u-text-weight-b u-font-en-con js-fade-up">Drink</h3>
    <dl class="o-sidebar o-sidebar--table js-fade-up">
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">ドリンク</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">ドリンク</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">ドリンク</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">ドリンク</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">ドリンク</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">ドリンク</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
    </dl>
    <h3 class="c-ter-heading u-text-weight-b u-font-en-con js-fade-up">Food</h3>
    <dl class="o-sidebar o-sidebar--table js-fade-up">
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">料理</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">料理</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">料理</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">料理</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">料理</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">料理</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
    </dl>
    <h3 class="c-ter-heading u-text-weight-b u-font-en-con js-fade-up">Dessert</h3>
    <dl class="o-sidebar o-sidebar--table js-fade-up">
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">デザート</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">デザート</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">デザート</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">デザート</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">デザート</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">デザート</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l u-text-right">
        <span class="u-text-weight-b"> <span class="c-display-s u-font-en-con">000</span>円 </span>
        <span class="c-suppl-l">（税込）</span>
      </dd>
    </dl>
  </div>
</div>
<?php get_footer();?>