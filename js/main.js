$(document).ready(function () {
 	let modalLink = $('[data-toggle="modal"]');
 	let modal = $('.modal');
 	let modalClose = $('.modal-close');
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
 	

 	$('form').submit(function(event){
 		event.preventDefault();
 		$.ajax({
 			type: "POST",
 			url: "mail.php",
 			data: $(this).serialize()
 		}).done(function(){
 			$(this).find("input").val("");
 			alert("Сообщение успешно отправлено");
 			$("form").trigger("reset");
 		});
 		return false;
 	});


 });