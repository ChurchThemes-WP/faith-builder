<div class="fb-giving">
  <?php

    if ($settings->title) { ?>
      <h1 class="fb-giving-title"><?php echo $settings->title; ?></h1>
    <?php }

    if ($settings->title) { ?>
      <p class="fb-giving-message"><?php echo $settings->message ?></p>
    <?php }

    if ($settings->button_text) { ?>
      <a href="<?php echo $settings->button_url ?>" class="button"><?php echo $settings->button_text ?></a>
    <?php }

  ?>
</div>
