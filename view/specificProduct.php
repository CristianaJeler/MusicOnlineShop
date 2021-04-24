<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../utils/css/specificProductPage.css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="../../utils/js/visitedProduct.js"></script>
    <script src="../../utils/js/recentlyVisitedProducts.js"></script>
    <script src="../../utils/js/specificProductForm.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
</head>

<body>
<?php include 'header.php'; ?>
<div class="container-fluid">
    <div class="row">
        <?php include 'sidebarMenu.php'; ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="chartjs-size-monitor"
                 style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                <div class="chartjs-size-monitor-expand"
                     style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                </div>
                <div class="chartjs-size-monitor-shrink"
                     style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                </div>
            </div>
            <div>
                <div id="productName"
                     class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2>
                        <?php
                        echo $productDetails["brand"] . ", " . $productDetails["product"];
                        ?>
                    </h2>
                </div>
                <div class="product">
                    <?php
                    $location = "../../utils/images/";
                    $location .= $productDetails["file"];
                    echo '<img src="' . $location . '" style="height:300px;width:300px;display:inline-block;"/>';
                    ?>
                    <form style="display:inline-block;margin-left:10%;">
                        <label for="price" style="display:inline-block;">Price:</label>
                        <h3 id="price" name="price" readonly
                            style="display:inline-block;color:crimson;"><?php echo '$' . $productDetails["price"] ?></h3>
                        <br><br>
                        <label for="quantity">Quantity</label>
                        <input type="number" name="quantity" id="quantity" min="1" max="100" style="width:50px"/><br>
                        <input type="button" value="Add to cart" id="addBtn" onclick="addClicked()"
                               style="margin-left:auto;margin-left:auto;bottom:0;margin-top:35%;"/>
                    </form>
                </div>
            </div>

            <br>
            <div>
                <h3>Description</h3>
                <p><?php echo $productDetails["description"] ?></p>
            </div>

            <div>
                <br>
                <h3>Specifications</h3>
                <table id="specificationsTable">
                    <tr>
                        <th>Dimensions</th>
                        <td><?php echo $productDetails["dimensions"] . " (cm)" ?></td>
                    </tr>
                    <tr>
                        <th>Weight</th>
                        <td><?php echo $productDetails["weight"] . " kg" ?></td>
                    </tr>
                </table>
            </div>
        </main>
        <hr>
        <div>
            <br><br>
            <h3>Recently viewed products</h3><br>
            <div class="imgRow" id="lastVisited">

            </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>