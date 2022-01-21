<?php

  $icons = array(
    'like'      =>  array(
			'icon'  => '',
			'title' => 'Upvote on YKA',
			'url'   => "#"
    ),
    'facebook'  =>  array(
      'icon'  => 'fa fa-facebook fa-2x',
      'title' => 'Share on Facebook',
      'url'   => "#"
    ),
    'twitter' =>  array(
			'icon'  => 'fa fa-twitter fa-2x',
			'title' => 'Share on Twitter',
			'url'   => "#",
		),
    'whatsapp' => array(
			'icon'  => 'fa fa-whatsapp fa-2x',
			'title' => 'Share on Whatsapp',
			'url'   => "#"
		)
  );
?>

<div class="yka-social-share">
  <ul class="social-share-inner list-unstyled">
    <?php foreach( $icons as $key => $icon ):?>
      <li class="social-<?php _e( $key );?>">
        <a href="<?php _e( $icon['url'] );?>" title="<?php _e( $icon['title'] );?>" rel="nofollow" >
          <?php if( $key == 'like' ):?>
            <span>
              <?php _e( $icon['title'] );?>
            </span>
          <?php else:?>
            <i class="<?php _e( $icon['icon'] );?>"></i>
          <?php endif;?>
        </a>
      </li>
    <?php endforeach;?>
  </ul>
</div>
