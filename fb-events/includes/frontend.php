<div class="fb-events fb-events--layout-<?php echo $settings->layout; ?>">
  <?php

    global $post;

    $instance['timeframe'] = $settings->which_events;
    $instance['limit'] = $settings->number_of_events;
    $instance['show_image'] = $settings->show_image;
    $instance['show_date'] = $settings->show_date;
    $instance['show_time'] = $settings->show_time;
    $instance['show_excerpt'] = $settings->show_excerpt;

    if ($settings->title) { ?>
      <h1 class="fb-events-title"><?php echo $settings->title; ?></h1>
    <?php }

    // Get posts
    $posts = ctc_get_events( $instance ); // get events based on options - upcoming/past, limit, etc.

    // Loop posts
    $i = 0;
    foreach ( $posts as $post ) : setup_postdata( $post ); $i++;

      // Get event meta data
      // $date (localized range), $start_date, $end_date, $time, $venue, $address, $show_directions_link, $directions_url, $map_lat, $map_lng, $map_type, $map_zoom
      extract( ctc_event_data() );

    ?>

    <div class="fb-events--event">

      <?php if ( $instance['show_image'] == 'yes' && has_post_thumbnail() ) : ?>
        <a class="fb-events--event-image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail( 'ctc-thumb-small' ); ?>
        </a>
      <?php endif; ?>

      <h2 class="fb-events--event-title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </h2>

      <div class="fb-events--event-meta">

        <?php if ( $instance['show_date'] == 'yes' && $date ) : ?>
          <span class="fb-events--event-date">
            <i class="genericon genericon-month"></i>
            <?php echo esc_html( $date ); ?>
          </span>
        <?php endif; ?>

        <?php if ( $instance['show_time'] == 'yes' && $time ) : ?>
          <span class="fb-events--event-time">
            <i class="genericon genericon-time"></i>
            <?php echo esc_html( $time ); ?>
          </span>
        <?php endif; ?>

      </div>

      <?php if ( get_the_excerpt() && $instance['show_excerpt'] == 'yes' ): ?>
        <div class="fb-events--event-excerpt">
          <?php the_excerpt(); ?>
        </div>
      <?php endif; ?>

    </div>

    <?php

    // End Loop
    endforeach;

    // No items found
    if ( empty( $posts ) ) {

      ?>
      <div>
        <?php __( 'There are no events to show.', 'fl-builder' ); ?>
      </div>
      <?php

    }
  ?>
</div>
