(function($) {

  $('input').blur(function() {
    var $this = $(this);
    $this.toggleClass('used', $this.val() !== '');
  });

  var $ripples = $('.ripples');

  $ripples.on('click', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');
  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
    $(this).removeClass('is-active');
  });
})(jQuery);
