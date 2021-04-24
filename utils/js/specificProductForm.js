function addClicked() {
    const quantity = parseInt(document.getElementsByName("quantity").item(0).value || 0);
    const id = window.location.href.split("product=")[1]
    if (localStorage.getItem("cartItems") === null)
        localStorage.setItem("cartItems", JSON.stringify({}));
    var products = JSON.parse(localStorage.getItem("cartItems"));
    if (quantity > 0) {
        if (products[id] == null) products[id] = quantity;
        else products[id] += quantity;
        localStorage.setItem("cartItems", JSON.stringify(products));
        if (confirm("Product added successfully!\nGo to cart?"))
            window.location.replace("http://localhost/music/index.php/Cart/run");
        else window.history.back();
    } else alert("Selecte the quantity!");
}