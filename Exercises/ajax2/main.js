var $tooltip = $('<div class="tooltip" />');
var timer;
var $this;

$('li').mouseenter(getData )
    .mouseleave(hideTooltip);



 function getData() {
 		$this = $( this) ;
 		var movie = $this.attr('id');
 		var moviePath= 'tooltips/' + movie + '.html';

 		timer = setTimeout(function() {
	 	/*	$.get(moviePath, function(response) {
	 			console.log(response);
	 		}); */

 			$.get(moviePath, showTooltip);


	    }, 500);
 	}

    function hideTooltip() {
    	clearTimeout (timer);
    	$tooltip.detach();
    	
    }


    function showTooltip(response) {
    	var offset = $this.offset();
    		$tooltip.css ({
    			top : offset.top - 10,
    			left : offset.left - 42,
    		})

    	.html (response);
    	$this.append( $tooltip);


    }