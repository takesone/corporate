<?php get_header(); ?>

<div style="padding-top: 80px">
  <h2 class="archive-title" st><?php bloginfo('name'); ?></h2>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="entry hentry">
          <h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
          <div class="entry-box">
              <span class="entry-date">
                  公開：<time class="published" datetime="<?php the_time('c'); ?>"><?php the_time(get_option('date_format')); ?></time>
              </span>　
              <br /><?php the_category(', '); ?><?php the_tags('', ', '); ?>
          </div>
          <p class="entry-excerpt"><?php echo mb_substr(get_the_excerpt(), 0, 40); ?>...</p>
          <p class="entry-more"><a href="<?php the_permalink() ?>">続きを見る</a></p>
      </div>
    <?php endwhile; else : ?>
      <p>記事がありません</p>
    <?php endif; ?>
  <!-- 一覧表示部分ここまで -->
</div>
<?php get_footer(); ?>
