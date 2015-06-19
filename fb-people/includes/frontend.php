<div class="fb-people fb-people--layout-<?php echo $settings->layout; ?>">
  <?php

    $instance['title'] = $settings->title;
    $instance['orderby'] = $settings->orderby;
    $instance['order'] = $settings->order;
    $instance['limit'] = $settings->limit;
    $instance['show_photo'] = $settings->show_photo;
    $instance['show_position'] = $settings->show_position;
    $instance['show_phone'] = $settings->show_phone;
    $instance['show_email'] = $settings->show_email;
    $instance['show_icons'] = $settings->show_icons;
    $instance['show_excerpt'] = $settings->show_excerpt;

    global $post;

    if ($settings->title) { ?>
      <h1 class="fb-people-title"><?php echo $settings->title; ?></h1>
    <?php }

    // Get posts
    $posts = ctc_get_people( $instance );

    // Loop Posts
    $i = 0;
    foreach ( $posts as $post ) : setup_postdata( $post ); $i++;

      $ctc_person_position = ctc_person_data()['position'];
      $ctc_person_phone    = ctc_person_data()['phone'];
      $ctc_person_email    = ctc_person_data()['email'];
      $ctc_person_urls     = ctc_person_data()['urls'];

      ?>

      <div class="fb-people--person">

        <?php if ( $instance['show_photo'] && has_post_thumbnail() ) : ?>
          <a class="fb-people--person-photo" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail( 'ctc-thumb-small' ); ?>
          </a>
        <?php endif; ?>

        <h2 class="fb-people--person-name">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h2>

        <div class="fb-people--person-meta">
          <?php if ( $instance['show_position'] && $ctc_person_position ) : ?>
          <span class="fb-people--person-position">
            <?php echo $ctc_person_position; ?>
          </span>
          <?php endif; ?>

          <?php if ( $instance['show_phone'] && $ctc_person_phone ) : ?>
          <span class="fb-people--person-phone">
            <?php echo $ctc_person_phone; ?>
          </span>
          <?php endif; ?>

          <?php if ( $instance['show_email'] && $ctc_person_email ) : ?>
          <a href="mailto:<?php echo $ctc_person_email; ?>" class="fb-people--person-email">
            <?php echo $ctc_person_email; ?>
          </a>
          <?php endif; ?>
        </div>

        <?php if ( $instance['show_excerpt'] ) : ?>
          <div class="fb-people--person-excerpt">
            <?php the_excerpt(); ?>
          </div>
        <?php endif; ?>

      </div>

      <?php

    endforeach;

  ?>
</div>
