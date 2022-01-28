<?php

function ykaGetAvatarURL( $user_id, $size = 128 ){
  global $yka_theme;
  return $yka_theme->getAvatarURL( $user_id, $size );
}

function ykaGetAvatar( $user_id, $size ){
  global $yka_theme;
  return $yka_theme->getAvatar( $user_id, $size );
}
