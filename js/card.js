$(document).ready(function () {
 	let modalLink = $('[data-toggle="modal-two"]');
 	let modal = $('.modal-two');
 	let modalClose = $('.modal-close_two');
 	let form = $('form');
 	
 	modalLink.on('click', function openModal(e) {
 	e.preventDefault();
 	$('body').addClass('no-scroll');
 	modal.toggleClass('modal_visible');
 	});

 	modalClose.on('click', function closeModal(e) {
 	e.preventDefault();
 	$('body').removeClass('no-scroll');
 	modal.toggleClass('modal_visible');	
 	});
 	


	
 	

 	
 	});
$(document).ready(function (){
	$('.minBl').each(function(index, element) {
		var currentElement = $(element);
		currentElement.click(function(event){
			event.preventDefault();
			$('.price').html(currentElement.data('price'));
			$(document).on('af_complete', function(event,response){
				$('#callBack').hide();
			});
		});
	});
});