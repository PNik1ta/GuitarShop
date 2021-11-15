var buttons = document.getElementsByClassName('basket_btn');
var titles = document.getElementsByClassName('product__title');
var descriptions = document.getElementsByClassName('product__description');
var prices = document.getElementsByClassName('product__price');
for (let i = 0; i < buttons.length; i++) {
	buttons[i].onclick = function () {
		var title = titles[i].innerHTML;
		var description = descriptions[i].innerHTML;
		var price = prices[i].innerHTML;
		var productData = { 'Title': title, 'Description': description, 'Price': price };
		$.ajax({
			method: "POST",
			url: "php/move_to_basket.php",
			data: productData,
			success: function (data) {
				console.log(data);
			},
			error: function () {
				console.log("error");
			}
		})
		alert("Moved to basket");
	}
}
