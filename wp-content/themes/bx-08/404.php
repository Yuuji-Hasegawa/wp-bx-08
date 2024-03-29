<?php get_header();
$protocol = empty($_SERVER["HTTPS"]) ? "http://" : "https://";?>
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
    <div class="c-hero-copy o-cover__middle js-fade-up">
      <span class="c-display-l u-text-weight-b u-font-en-con">Not found.</span>
    </div>
  </div>
</div>
<div class="o-box o-box--transparent o-center u-bg-qua u-pb-2xl">
  <h1 class="c-heading u-text-weight-b">お探しのページは見つかりませんでした。</h1>
  <p class="c-content-l">
    大変申し訳ございませんが、お探しのページ(URL:<span
      class="u-font-en-con"><?php echo esc_url($protocol. $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]); ?></span>)は見つかりませんでした。<br />アドレスバーに直接URLを入力された場合は、アドレスが正しく入力されているか、もう一度ご確認下さい。
  </p>
  <p class="c-content-l">
    正しいアドレスを入力しても表示されない場合は、一時的にアクセスできない状況にあるか、移動もしくは削除された可能性があります。<br />その場合お手数ですがトップページからお求めのページを再度お探しください。
  </p>
  <a href="<?php echo home_url('/');?>"
    class="o-box o-box--button o-box--rect-button u-mt-l">
    <span class="o-icon-parent">
      <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
        <path
          d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5L575.8 255.5z"
          fill="currentColor"></path>
      </svg>
      トップページへ戻る
    </span>
  </a>
</div>
<?php get_footer();?>