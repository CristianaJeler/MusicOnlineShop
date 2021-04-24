function removeRow(row) {
    var id = row.closest("tr").getAttribute("id")
    row.closest("tr").remove();
    var cartProducts = JSON.parse(localStorage.getItem("cartItems"));
    delete cartProducts[id];
    localStorage.setItem("cartItems", JSON.stringify(cartProducts))

    setTotalCost()
}

function updatePrice(quantityCell) {
    var totalCell = quantityCell.closest("tr").cells.item(3);
    var priceCell = quantityCell.closest("tr").cells.item(1);
    totalCell.innerHTML = parseFloat(priceCell.innerHTML) * quantityCell.value;

    var cartProducts = JSON.parse(localStorage.getItem("cartItems"));
    cartProducts[quantityCell.closest("tr").getAttribute("id")] = quantityCell.value;
    localStorage.setItem("cartItems", JSON.stringify(cartProducts))

    setTotalCost()
}

function setTotalCost() {
    var totalPrice = document.getElementById("totalPrice");
    var sum = 0;
    var totals = document.getElementsByClassName("totalCell");
    for (let i = 0; i < totals.length; i++) {
        sum += parseFloat(totals[i].innerHTML);
    }
    totalPrice.value = sum.toString();
}


$(document).ready(function () {
    $.ajax({
        url: "http://localhost/music/index.php/Cart/get_cart_products",
        dataType: 'json',
        method: 'post',
        data: {cartProducts: JSON.parse(localStorage.getItem("cartItems"))},
        success: function (result) {
            var cartTable = document.getElementById("cartTable");
            for (let i = 0; i < result.length; i++) {
                cartTable.innerHTML += '<tr id="' + result[i].id + '"><td><a href="http://localhost/music/index.php/SpecificProduct/run?product=' + result[i].id + '">' +
                    '<figure>' +
                    '<img src="../../utils/images/' + result[i].file + '" alt="product not found">' +
                    '<figcaption>' + result[i].product + "," + result[i].brand + '</figcaption></figure></a></td>' +
                    '<td class="priceCell">' + result[i].price + '</td>' +
                    '<td><input onchange="updatePrice(this)" class="quantityCell" type="number" min="1" max="100" value="' + result[i].quantity + '"></td>' +
                    '<td class="totalCell">' + parseFloat(result[i].price) * parseFloat(result[i].quantity) + '</td>' +
                    '<td><img title="Remove item" src="../../utils/images/images/removeBtn.png" onclick="removeRow(this)" class="removeBtn" style="width: 20px;height: 20px;" alt="product image could not be loaded"/></td></tr>'
            }
            setTotalCost();
        }
    });
});

