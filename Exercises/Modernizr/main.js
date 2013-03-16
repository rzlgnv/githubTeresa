if (Modernizr.csstransitions) {
 
$('#myBox').css('margin-left','300px');
} else {

	$('#myBox').animate({

		marginLeft: '300px'
	},500 );
}

/*Modernizr.load({
	test : ,
	yep: 'animations.js,
	nope: 'jqueryAnim.js'
})  */