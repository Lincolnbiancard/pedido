$(document).ready(function (){
	$('.select2').select2();

	$('#quantity').keyup(function (){
		calculatePrice();
	});

	$('#products').change(function (){
		calculatePrice();
	});

	function calculatePrice() {
		let price = 0;
	
		$.each($('option:selected', $('#products')), function (index, product) {
			price += $(product).data('price');
		});
	
		let total = price * $('#quantity').val();
	
		$('#total').val(total);
	}
});

