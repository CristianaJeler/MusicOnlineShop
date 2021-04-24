$(document).ready(function () {
    var visitedId = window.location.href.split("product=")[1];
    if (localStorage.getItem("visitedProducts") === null)
        localStorage.setItem("visitedProducts", JSON.stringify([]));
    var prods = JSON.parse(localStorage.getItem("visitedProducts"));
    if (prods.length >= 3 && !prods.includes(visitedId)) prods.splice(0,1)
    if (!prods.includes(visitedId)) prods.push(visitedId);
    localStorage.setItem("visitedProducts", JSON.stringify(prods));
});