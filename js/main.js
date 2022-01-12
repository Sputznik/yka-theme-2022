jQuery(document).ready(function(){
  jQuery(".navbar-toggler").on('click', function() {
      var $this = jQuery(this);
      if($this.children().hasClass('fa-bars')){
  			$this.children().removeClass('fa-bars').addClass('fa-times');
  		}
  		else{
  			$this.children().removeClass('fa-times').addClass('fa-bars');
  		}

      // TOGGLE SIDEBAR MENU
      jQuery('.yka-sidebar-collapse').toggleClass('open');

  });

});
