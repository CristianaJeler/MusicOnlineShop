$(document).ready(function () {
    $.ajax({
        url: "http://localhost/music/index.php/Home/get_visited_products",
        dataType: 'json',
        method: 'post',
        data: {visitedProducts: JSON.parse(localStorage.getItem("visitedProducts"))},
        success: function (result) {
            var div = document.getElementById("lastVisited");
            for (let i = 0; i < result.length; i++) {
                var link = document.createElement("a");
                link.setAttribute("href", "http://localhost/music/index.php/SpecificProduct/run?product=" + result[i].id)

                var figure = document.createElement("figure");
                figure.setAttribute("style", "float:left; margin-left:20px;");

                var img = document.createElement("img")
                img.setAttribute("src", "../../../music/utils/images/" + result[i].file)
                img.setAttribute("style", "height: 200px;width: 200px")

                var caption = document.createElement("figcaption");
                caption.innerHTML = result[i].brand + ", " + result[i].product

                figure.append(img)
                figure.append(caption)
                link.append(figure)
                div.append(link)
            }
        }
    });
});