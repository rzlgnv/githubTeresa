var $myform = $('#myform');
$myform.submit ( stopsubmit);

function stopsubmit( e) {
	e.preventDefault():


    var data = $( this ).serialize();
    console.log ( data);

    $.post( this.action, data, removeForm);
}

function removeForm( reponse) {
    var $html =$ ( repsonse).find("#contact").html();
   /* $myform.parent().html( $html );*/
    $popup.append ( $html ); 
    $( 'body').append( $popup);
    $popup.delay ( 2500).fadeout(); 
    $(#contact).slideUp( 1000 );


}

