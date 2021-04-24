<html lang="en">
<head>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/music/utils/css/homepage.css">
    <meta charset="UTF-8">
    <title>Music</title>
</head>

<body>
<?php include 'header.php'; ?>
<div class="container-fluid">
    <div class="row">
        <main role="main" style="width: 96%;">
        <form id="checkoutForm">
            <h3>Order details:</h3><hr>
            <label for="firstname">First name:</label>
            <input type="text" id="firstname" name="firstname"/>
            <label for="lastname">Last name</label>
            <input type="text" id="lastname" name="lastname"/>
            <hr>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </form>
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