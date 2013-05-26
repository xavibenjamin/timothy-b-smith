<div class="video-pusher"><?php echo get_post_meta($post->ID, 'video-embed', true); ?></div>

<article class="entry">
  <p class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time></p>
  
  <h2><?php the_title(); ?></h2>

  <?php the_content('Read More') ?>

  <div class="post-footer">
    <small class="rcmd-btn"><?php if( function_exists('dot_irecommendthis') ) dot_irecommendthis(); ?></small>
  </div>

</article> <!-- end .entry -->