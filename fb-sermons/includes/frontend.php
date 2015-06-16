<div class="fb-sermons">
  <?php

    $instance['title'] = $settings->title;
    $instance['topic'] = $settings->topic;
    $instance['book'] = $settings->book;
    $instance['series'] = $settings->series;
    $instance['speaker'] = $settings->speaker;
    $instance['orderby'] = $settings->orderby;
    $instance['order'] = $settings->order;
    $instance['limit'] = $settings->limit;
    $instance['show_image'] = $settings->show_image;
    $instance['show_date'] = $settings->show_date;
    $instance['show_topic'] = $settings->show_topic;
    $instance['show_book'] = $settings->show_book;
    $instance['show_series'] = $settings->show_series;
    $instance['show_speaker'] = $settings->show_speaker;
    $instance['show_media_types'] = $settings->show_media_types;
    $instance['show_excerpt'] = $settings->show_excerpt;

    global $post;

    if ($settings->title) { ?>
      <h1 class="fb-sermons-title"><?php echo $settings->title; ?></h1>
    <?php }

    // Get posts
    $posts = ctc_get_sermons( $instance );

    // Loop Posts
    $i = 0;
    foreach ( $posts as $post ) : setup_postdata( $post ); $i++;

      extract( ctc_sermon_data() );

      $ctc_sermon_topic    = get_the_term_list( $post->ID, 'ctc_sermon_topic', '', __( ', ', 'rock' ) );
      $ctc_sermon_book     = get_the_term_list( $post->ID, 'ctc_sermon_book', '', __( ', ', 'rock' ) );
      $ctc_sermon_series   = get_the_term_list( $post->ID, 'ctc_sermon_series', '', __( ', ', 'rock' ) );
      $ctc_sermon_speaker  = get_the_term_list( $post->ID, 'ctc_sermon_speaker', '', __( ', ', 'rock' ) );
      $ctc_sermon_tag      = get_the_term_list( $post->ID, 'ctc_sermon_tag', '', __( ', ', 'rock' ) );

      ?>

      <div class="fb-sermons--sermon">

        <?php if ( $instance['show_image'] && has_post_thumbnail() ) : ?>
          <a class="fb-events--event-image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail( 'ctc-thumb-small' ); ?>
          </a>
        <?php endif; ?>

        <h2 class="fb-sermons--sermon-title">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h2>

        <div class="fb-sermons--sermon-meta">
          <?php if ( $instance['show_topic'] && $ctc_sermon_topic ) : ?>
          <span>
            <i class="genericon genericon-category"></i>
            <?php echo $ctc_sermon_topic; ?>
          </span>
          <?php endif; ?>

          <?php if ( $instance['show_book'] && $ctc_sermon_book ) : ?>
          <span>
            <i class="genericon genericon-book"></i>
            <?php echo $ctc_sermon_book; ?>
          </span>
          <?php endif; ?>

          <?php if ( $instance['show_series'] && $ctc_sermon_series ) : ?>
          <span>
            <i class="genericon genericon-category"></i>
            <?php echo $ctc_sermon_series; ?>
          </span>
          <?php endif; ?>

          <?php if ( $instance['show_speaker'] && $ctc_sermon_speaker ) : ?>
          <span>
            <i class="genericon genericon-user"></i>
            <?php echo $ctc_sermon_speaker; ?>
          </span>
          <?php endif; ?>
        </div>

        <?php if ( $instance['show_excerpt'] ) : ?>
          <div class="fb-sermons--sermon-excerpt">
            <?php the_excerpt(); ?>
          </div>
        <?php endif; ?>

      </div>

      <?php

    endforeach;

  ?>
</div>
