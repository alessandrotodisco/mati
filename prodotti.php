<?php require('header.php') ?>

<div class="container">
    <div class="container-fluid">
<style>
    .photo-gallery {
        color: #313437;
        background-color: #fff;
    }

    .photo-gallery p {
        color: #7d8285;
    }

    .photo-gallery h2 {
        font-weight: bold;
        margin-bottom: 40px;
        padding-top: 40px;
        color: inherit;
    }

    @media (max-width:767px) {
        .photo-gallery h2 {
            margin-bottom: 25px;
            padding-top: 25px;
            font-size: 24px;
        }
    }

    .photo-gallery .intro {
        font-size: 16px;
        max-width: 500px;
        margin: 0 auto 40px;
    }

    .photo-gallery .intro p {
        margin-bottom: 0;
    }

    .photo-gallery .photos {
        padding-bottom: 20px;
    }

    .photo-gallery .item {
        padding-bottom: 30px;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
</head>

<body>
    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Alcuni nostri prodotti</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://source.unsplash.com/400x400?trees" data-lightbox="photos"><img class="img-fluid" src="https://source.unsplash.com/400x400?trees"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://source.unsplash.com/400x400?water" data-lightbox="photos"><img class="img-fluid" src="https://source.unsplash.com/400x400?water"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://source.unsplash.com/400x400?lake" data-lightbox="photos"><img class="img-fluid" src="https://source.unsplash.com/400x400?lake"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://source.unsplash.com/400x400?mountain" data-lightbox="photos"><img class="img-fluid" src="https://source.unsplash.com/400x400?mountain"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://source.unsplash.com/400x400?beach" data-lightbox="photos"><img class="img-fluid" src="https://source.unsplash.com/400x400?beach"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://source.unsplash.com/400x400?ocean" data-lightbox="photos"><img class="img-fluid" src="https://source.unsplash.com/400x400?ocean"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://source.unsplash.com/400x400?cliff" data-lightbox="photos"><img class="img-fluid" src="https://source.unsplash.com/400x400?cliff"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://source.unsplash.com/400x400?nature" data-lightbox="photos"><img class="img-fluid" src="https://source.unsplash.com/400x400?nature"></a></div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    </div>
</div>
</body>