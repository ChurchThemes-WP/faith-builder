<div class="fb-locations fb-locations--layout-<?php echo $settings->layout; ?>">
  <?php

    $instance['title'] = $settings->title;
    $instance['orderby'] = $settings->orderby;
    $instance['order'] = $settings->order;
    $instance['limit'] = $settings->limit;
    $instance['show_image'] = $settings->show_image;
    $instance['show_address'] = $settings->show_address;
    $instance['show_phone'] = $settings->show_phone;
    $instance['show_times'] = $settings->show_times;
    $instance['show_map'] = $settings->show_map;
    $instance['show_excerpt'] = $settings->show_excerpt;

    global $post;

    if ($settings->title) { ?>
      <h1 class="fb-locations-title"><?php echo $settings->title; ?></h1>
    <?php }

    // Get posts
    $posts = ctc_get_locations( $instance );

    // Loop Posts
    $i = 0;
    foreach ( $posts as $post ) : setup_postdata( $post ); $i++;

      $ctc_location_address = ctc_location_data()['address'];
      $ctc_location_show_directions_link = ctc_location_data()['show_directions_link'];
      $ctc_location_phone = ctc_location_data()['phone'];
      $ctc_location_times = ctc_location_data()['times'];
      $ctc_location_directions_url = ctc_location_data()['directions_url'];

      ?>

      <div class="fb-locations--location">
        <?php if ( $instance['show_map'] ) : ?>
          <div class="fb-locations--location-map">
            <iframe class="fb-locations--location-map-embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo urlencode( $ctc_location_address ); ?>&output=embed"></iframe>
            <?php if ( $instance['show_address'] && $ctc_location_directions_url ) : ?>
              <a href="<?php echo $ctc_location_directions_url; ?>" class="button">Get Directions</a>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <?php if ( $instance['show_image'] && has_post_thumbnail() ) : ?>
          <a class="fb-locations--location-image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail( 'ctc-thumb-small' ); ?>
          </a>
        <?php endif; ?>

        <h2 class="fb-locations--location-name">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h2>

        <div class="fb-locations--location-meta">
          <?php if ( $instance['show_address'] && $ctc_location_address ) : ?>
          <div class="fb-locations--location-address">
            <i class="genericon genericon-location"></i>
            <?php echo $ctc_location_address; ?>
          </div>
          <?php endif; ?>

          <?php if ( $instance['show_phone'] && $ctc_location_phone ) : ?>
          <div class="fb-locations--location-phone">
            <i class="genericon genericon-phone"></i>
            <?php echo $ctc_location_phone; ?>
          </div>
          <?php endif; ?>

          <?php if ( $instance['show_times'] && $ctc_location_times ) : ?>
          <div class="fb-locations--location-times">
            <i class="genericon genericon-time"></i>
            <?php echo $ctc_location_times; ?>
          </div>
          <?php endif; ?>
        </div>

        <?php if ( $instance['show_excerpt'] ): ?>
          <div class="fb-locations--location-excerpt">
            <?php the_excerpt(); ?>
          </div>
        <?php endif; ?>

      </div>

      <?php

    endforeach;

  ?>
</div>
