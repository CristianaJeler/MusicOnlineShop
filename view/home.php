<html lang="en">
<head>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="../../utils/js/recentlyVisitedProducts.js"></script>
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
        <?php include("sidebarMenu.php") ?>
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
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php
                        $data = '';
                        $data .= '<div class="carousel-item active">
                                  <img class="d-block w-100" src="' . '../../../music/utils/images/' . $carouselImages[0] . '" alt="First slide" style="height: 400px;">
                                </div>';
                        foreach (array_slice($carouselImages, 1) as $img => $file) {
                            $data .= '<div class="carousel-item">
                                  <img class="d-block w-100" src="' . '../../../music/utils/images/' . $file . '" alt="First slide" style="height: 400px;">
                                </div>';
                        }
                        echo $data;
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"
                       style="width: 100px;height: 100%;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"
                       style="width: 100px;height: 100%;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div>
                <h3>Products</h3>
                <?php
                $data = '<div class="imgRow">';
                foreach ($products as $img) {
                    $data .= '<a href="http://localhost/music/index.php/SpecificProduct/run?product='.$img["id"].'">
                                <figure class="column">
                                  <img src="' . '../../../music/utils/images/' . $img["file"] . '" alt="First slide" style="height: 200px;width: 200px">
                                  <figcaption>' . $img["brand"].", ".$img["product"] . '</figcaption>
                                </figure>
                               </a>';
                }
                echo $data.'</div>';
                ?>
            </div>
        </main>
        <hr>
        <div>
            <br><br>
            <h3>Recently viewed products</h3><br>
            <div id="lastVisited" class="imgRow">
            </div>
        </div>
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