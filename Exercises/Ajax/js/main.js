Modernizr.load(); ([
   {

    test: Modernizr.history,
    nope : 'js.history.js',
    complete: function() {
    	init()
    }
   }
	]);

function init() {

	$('page2').click(getPage2); 
}

function getPage2( event ) {

	event.preventDefault();
	console.log('your not going anywhere');
	$.get('page2.html', updateContent);
}

function updateContent(repsonse ) {
	var $html = $(response).find('#container');
  console.log ( $html)

  var $content = $html.find('#container').html()
  $('#container').html($content);

}