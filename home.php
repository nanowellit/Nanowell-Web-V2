<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/home.css">
  <title>Nanowell</title>
  <link rel="icon" type="image/x-icon" href="images/favIcon.png">
</head>

<body id="body">
  <div id="overlay" style="position: fixed; 
      width: 100%; 
      height: 100%; 
      top: 0;
      display: hi;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0,0,0,0.7); 
      z-index: 2; 
      cursor: pointer; ">
  </div>
  <div id='body-wrapper'>
    
    <!--header-->
    <?php
    include "./common/header.php";
    ?>
    <!--carousel-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" style="height:10px; width: 10px; border-radius:50px; z-index: 1;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" style="height:10px; width: 10px; border-radius:50px; z-index: 1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" style="height:10px; width: 10px; border-radius:50px; z-index: 1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div id="mainBanner" class="carousel-inner"> </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--promotionbar-->
    <div id="promotion-bar-div" class="row">
      <div id="promotion-bar" class="col-lg-12 "><label id="promotionData">FOR FREE ONLY</label></div>
    </div>
    <!--Item-tickers-->
    <div class="container-fluid" id="container-fluid">
      <div id="ItemTicker" class="row">
      </div>
      <!--card banners-->
      <div id="cardBanner" class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 banner-row">
          <div class="banner-div">
            <div class="row">
              <p class="banner-title"><b>Newsletter</b></p>
            </div>
            <img src="images/banner1.jpg" class="img-thumbnail banner-image" alt="...">
            <div class="row">
              <p class="banner-text"><b><a id="banner-a" href="#">Join now</a></b></p>
            </div>
          </div>
        </div>
      </div>
      <br>
    </div>
    <?php
    include "./common/footer.php";
    ?>
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/common.js"></script>
  <script type="text/javascript" src="js/home.js"></script>
</body>

</html>