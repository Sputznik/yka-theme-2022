<?php

add_shortcode("yka-social-share", function(){
	ob_start();
	get_template_part('partials/social-share');
	return ob_get_clean();
});
