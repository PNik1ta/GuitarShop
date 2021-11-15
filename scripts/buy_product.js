var buttons = document.getElementsByClassName('buy_btn');
var titles = document.getElementsByClassName('product__title');
var descriptions = document.getElementsByClassName('product__description');
var prices = document.getElementsByClassName('product__price');
for (let i = 0; i < buttons.length; i++) {
	buttons[i].onclick = function () {
		var title = titles[i].innerHTML;
		var description = descriptions[i].innerHTML;
		var price = prices[i].innerHTML;
		$.ajax({
			method: "POST",
			url: "php/buy_product.php",
			data: { 'Title': title, 'Description': description, 'Price': price },
			success: function (data) {
				console.log(data);

			},
			error: function () {
				console.log("Error");
			}
		})
		window.location.reload();
		alert("Successfully byed");
	}
}