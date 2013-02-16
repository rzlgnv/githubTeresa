var $tooltip = $('<div class="tooltip" />');


  $('a').mouseenter(showTooltip)
  .mouseleave(hideTooltip);

  function hideTooltip() {
  $tooltip.detach();

  }


function showTooltip() {
  
  var $this = $( this );
  var title = $this.attr('title');
  var offset = $this.offset();

  $tooltip.text( title );  
  $tooltip.css({
     top : offset.top - 50,
     left : offset.left

  });

 $('body').append($tooltip);

}