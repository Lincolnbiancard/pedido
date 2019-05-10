$(document).ready(function (){
	$('.select2').select2();

	$('#products').change(function (){
		buildTable();
	});

	
});

$('#send').click(function () {
	let form = $('#orders-form');

	let data = {
		'products': [],
		'customer': $('#customers option:selected').val(),
		'total': $('#total').val()
	};

	let list = $('#productsTable tr');

	$.each(list, function (index, item) {
		data.products[item.id] = {
			'price': $(item).data('price'),
			'quantity': $('.quantity', item).val()
		};
	});

	let url = 'http://pedido/formorder';

	$.ajax({
		type: 'POST',
		url: url,
		headers: {
			'X-CSRF-Token': $('input[name="csrf-token"]').val()
		},
		data: data,
		function (result) {
			console.log(result);
		},
		dataType: 'JSON'
	});
});

function buildTable() {	
	$('#productsTable').empty();
	$('#total').val(null)

	$.each($('option:selected', $('#products')), function (index, product) {
		row = `
			<tr data-price="` + $(product).data('price') + `" id="` + $(product).val() + `">
				<td>` + $(product).text() + `</td>
				<td>` + $(product).data('price') + `</td>
				<td><input onKeyUp="calculatePrice(this)" min="0" class="quantity" type="text"></input></td>
			</tr>
		`;
		
		$('#productsTable').append(row);
	});
}

function calculatePrice() {
	let list = $('#productsTable tr');
	let price = 0;

	$.each(list, function (index, item) {
		price += $(item).data('price') * $('.quantity', item).val();
	});

	$('#total').val(price);
}

