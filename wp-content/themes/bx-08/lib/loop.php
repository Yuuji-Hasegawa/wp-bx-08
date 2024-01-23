<?php

function get_front_news()
{
    $output = '';
    $args = array(
        'post_type' => 'news',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'no_found_rows' => true
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $output = '<ul class="o-stack o-stack--m u-mb-l">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $output .= '<li class="o-sidebar u-fade-up">
            <time class="c-content-l u-font-en-con u-text-weight-b" datetime="' . get_the_time('Y-m-d') . '">' . get_the_time('Y.m.d') . '</time>
            <a href="' . get_the_permalink() . '" class="o-sidebar__grow o-sidebar__grow--news c-content-l c-text-link u-text-weight-b">
            ' . get_the_title() . '
            </a>
          </li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
        $output .= '<div class="u-text-center js-fade-up">
        <a class="o-box o-box--button o-box--rect-button o-box--ghost-button u-font-en-con"
          href="' . home_url('/news/') . '">
          MORE
        </a>
      </div>';
    }
    if ($output) {
        return $output;
    } else {
        return '<p class="c-content-l js-fade-up">ニュースはまだありません。</p>';
    }
}
function get_front_menu()
{
    global $post;
    $output = '';
    $args = array(
        'post_type' => 'menu',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'no_found_rows' => true
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $output = '<ul class="o-grid o-grid--tri u-mb-xl js-pull-view" id="photos">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            if(has_post_thumbnail()) {
                $url = get_the_post_thumbnail_url($post->ID, 'full');
            } else {
                $url = get_template_directory_uri() . '/img/thumb.png?' . date("YmdHis");
            }
            $price = '';
            if(get_post_meta($post->ID, 'product_price', true)) {
                $price = number_format(intval(get_post_meta($post->ID, 'product_price', true)));
            } else {
                $price = 0;
            }
            $output .= '<li class="o-stack o-stack--l">
            <a href="' . $url . '" class="c-lightbox-photo">
              ' . get_thumb() . '
            </a>
            <div class="o-stack o-stack--s">
              <h3 class="c-display-2xs u-text-weight-b">' . get_the_title() . '</h3>
              <div class="u-text-right u-text-weight-m">
                <span class="c-content-l u-text-weight-b">
                  <span class="c-display-s u-font-en-con">' . $price . '</span>円
                </span>
                <span class="c-suppl-l">（税込）</span>
              </div>
            </div>
          </li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
        $output .= '<div class="u-text-center js-fade-up">
        <a class="o-box o-box--button o-box--rect-button u-bg-invert u-font-en-con"
          href="' . home_url('/menu/') . '">
          MORE
        </a>
      </div>';
    }
    if ($output) {
        return $output;
    } else {
        return '<p class="c-content-l js-fade-up">メニューはまだありません。</p>';
    }
}
function get_loop_cat()
{
    global $post;
    $output = "";
    $cat = get_the_category($post->ID);
    if ($cat && !is_wp_error($cat)) {
        $output = '<span class="o-box o-box--round-label c-label-m u-bg-primary">' . $cat[0]->cat_name . '</span>';
    }
    if ($output) {
        return $output;
    }
}
function get_related_loop()
{
    global $post;
    $output = '';
    $notarray = [];
    $recommend_id = '';
    $recommend = get_post_meta($post->ID, 'recommend_url', true);
    if($recommend) {
        $recommend_id = url_to_postid($recommend);
    }
    if ($recommend_id) {
        $notarray[] = $recommend_id;
    }
    $notarray[] = $post->ID;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'no_found_rows' => true,
        'orderby' => 'rand',
        'post__not_in' => $notarray,
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $output = '<h2 class="c-sec-heading u-text-weight-b js-fade-up">関連記事</h2>
        <ul class="o-grid o-grid--tri js-pull-view">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $output .= '<li>
            <a href="' . get_the_permalink() . '" class="o-box o-stack u-bg-qua c-link-card">
            ' . get_thumb() .
            '<span class="o-stack o-stack--s u-pt-l u-pb-l u-pr-m u-pl-m">
          <span class="o-cluster o-cluster--middle">
            <time class="c-content-l u-font-en-con u-text-weight-m" datetime="' . get_the_time('Y-m-d') . '">' . get_the_time('Y.m.d') . '</time>
            '. get_loop_cat() .'
          </span>
          <span class="c-content-l text-trim text-trim--two-line u-text-weight-b">' . get_the_title() . '</span>
          <span class="c-content-m u-text-secondary">
            <span
              class="u-font-en-con u-text-weight-m">' . get_views_count() . '</span>回表示・読了見込
            <span
              class="u-font-en-con u-text-weight-m">' . get_readtime() . '</span>分
          </span>
        </span>
      </a>
      </li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
    }
    if($output) {
        return $output;
    }
}
function get_last_loop()
{
    $output = '';
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'no_found_rows' => true
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $output = '<h2 class="c-sec-heading u-text-weight-b js-fade-up">最新記事</h2>
        <ul class="o-grid o-grid--tri js-pull-view">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $output .= '<li>
            <a href="' . get_the_permalink() . '" class="o-box o-stack u-bg-qua c-link-card">
            ' . get_thumb() .
            '<span class="o-stack o-stack--s u-pt-l u-pb-l u-pr-m u-pl-m">
          <span class="o-cluster o-cluster--middle">
            <time class="c-content-l u-font-en-con u-text-weight-m" datetime="' . get_the_time('Y-m-d') . '">' . get_the_time('Y.m.d') . '</time>
            '. get_loop_cat() .'
          </span>
          <span class="c-content-l text-trim text-trim--two-line u-text-weight-b">' . get_the_title() . '</span>
          <span class="c-content-m u-text-secondary">
            <span
              class="u-font-en-con u-text-weight-m">' . get_views_count() . '</span>回表示・読了見込
            <span
              class="u-font-en-con u-text-weight-m">' . get_readtime() . '</span>分
          </span>
        </span>
      </a>
      </li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
    }
    if ($output) {
        return $output;
    }
}
function get_popular_loop()
{
    $output = '';
    $args = array(
      'post_type'      => 'post',
      'posts_per_page' => 4,
      'meta_key'       => 'post_views_count',
      'orderby'        => 'meta_value_num',
      'order'          => 'DESC',
      'no_found_rows' => true
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $output = '<h2 class="c-sec-heading u-text-weight-b js-fade-up">人気記事</h2>
        <ul class="o-grid o-grid--quart js-pull-view">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $output .= '<li>
            <a href="' . get_the_permalink() . '" class="o-box o-stack u-bg-qua c-link-card">
            ' . get_thumb() .
            '<span class="o-stack o-stack--s u-pt-l u-pb-l u-pr-m u-pl-m">
          <span class="o-cluster o-cluster--middle">
            <time class="c-content-l u-font-en-con u-text-weight-m" datetime="' . get_the_time('Y-m-d') . '">' . get_the_time('Y.m.d') . '</time>
            '. get_loop_cat() .'
          </span>
          <span class="c-content-l text-trim text-trim--two-line u-text-weight-b">' . get_the_title() . '</span>
          <span class="c-content-m u-text-secondary">
            <span
              class="u-font-en-con u-text-weight-m">' . get_views_count() . '</span>回表示・読了見込
            <span
              class="u-font-en-con u-text-weight-m">' . get_readtime() . '</span>分
          </span>
        </span>
      </a>
      </li>';
        }
        $output .= '</ul>';
        wp_reset_postdata();
    }
    if ($output) {
        return $output;
    }
}
