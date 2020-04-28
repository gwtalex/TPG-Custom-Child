

$(document).ready(function(){
	$('.expandable-side').click(function(event){
		event.stopPropagation();

			$(this).toggleClass('expanded-side')
		$(this).find('i').toggleClass('fa fa-plus-square-o fa fa-minus-square-o');
	});
});
