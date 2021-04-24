<html lang="en">
<head>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="../../utils/js/cart.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/music/utils/css/homepage.css">
    <link rel="stylesheet" href="/music/utils/css/cart.css">
    <meta charset="UTF-8">
    <title>Music</title>
</head>

<body>
<?php include 'header.php'; ?>
<div class="container-fluid">
    <div class="row">
        <main role="main" style="width: 96%;">
            <h3 style="margin-left:2%;">Shopping cart:</h3>
            <table id="cartTable">
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th id="remove"></th>
                </tr>
            </table>

            <div id="totalDiv">
                <form method="post" action="http://localhost/music/index.php/Checkout/run">
                    <table>
                        <tr>
                            <td>
                                <label style="display: inline-block;font-size:50px;color: lightseagreen;"
                                       for="totalPrice">TOTAL:</label>
                                <input type="text"
                                       style="font-size:50px;border: none;display: inline-block;color: lightseagreen;margin-left: 20px;"
                                       id="totalPrice" name="total"/>
                            </td>
                            <td>
                                <button type="submit" id="proceedCommand"
                                        style="float: right;background-color: lightblue;border:solid darkblue 1px;color: darkblue;">
                                    Checkout
                                </button>
                                <input type="text" hidden name="cartProducts" id="cartProducts"/>
                            </td>
                        </tr>

                    </table>
                </form>
            </div>
        </main>
        <hr>
    </div>
    <?php include('footer.php') ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>