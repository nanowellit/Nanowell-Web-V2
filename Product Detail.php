<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/Product-Detail.css">
  <link rel="stylesheet" href="css/best-seller.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    cursor: pointer; "></div>
  <!--header-->
  <?php
    include "./common/header.php";
    ?>
  <!--promotionbar-->
  <div id="promotion-bar-div" class="row">
    <div id="promotion-bar" class="col-lg-12 "><label id="promotionData">FOR FREE ONLY</label></div>
  </div>
  <!--Item-tickers-->
  <div class="container-fluid">
    <div class="row mt-4">

      <div class="col-lg-5 col-md-5">
        <span id="jDatamainMpbile">
          <!--jason-->
        </span>
        <div class="issubscriptionNClassMobile">
          <div class="form-check checksave">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
              checked>
            <label class="form-check-label" for="exampleRadios1">One-time purchase:<br><span
                id="savesubPrice">$150.00</span></label>
          </div>
          <img src="images/delivery.png" class="truckSub"></span> &nbsp;
          <Span id="priceText1">FREE
            SHIPPING (US, KOREA)</Span><br>
          <img src="images/location.png" class="truckSub"></span> &nbsp;
          <Span id="priceText2">Delivered to Long Beach 90805</Span>
          <p id="stokeText">In Stoke</p>
          <div id="stockDropdown">
            <select style="border-radius: 20px;">
              <option value="0">Qty: 1</option>
              <option value="1">Qty: 2</option>
              <option value="2">Qty: 3</option>
              <option value="3">Qty: 4</option>
              <option value="4">Qty: 5</option>
              <option value="5">Qty: 6</option>
            </select>
          </div>
          <input id="addToCart" type="button" value="Add to Cart">
          <input id="buyNow" type="button" value="Buy Now"><br>
          <p class="shipFrom">Ships from &nbsp;&nbsp;&nbsp;&nbsp; Nanowell U.S.<br>Sold by &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MyNanowell.com</p>
          <hr style="margin-bottom: 0%;">
          <div id="subAndSave">
            <br>
            <div id="form2" class="form-check ">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                checked>
              <label class="form-check-label" for="exampleRadios1">One-time purchase:<br><span id="savesubPrice">$150.00
                  (Save $5.00)</span></label>
            </div>
            <img src="images/delivery.png" class="truckSub"
              style="font-size:20px; color: black !important; margin-top: 10px;"></span> &nbsp;
            <Span id="priceText1">FREE
              SHIPPING (US, KOREA)</Span><br>
            <img src="images/location.png" class="truckSub" style="font-size:20px; color: black !important;"></span>
            &nbsp;
            <Span id="priceText2">Delivered to Long Beach 90805</Span>
          </div>

        </div>


        <div style="border: 1px solid black;" class="issubscriptionNClassMobile1">
          <div class="form-check checksave">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
              checked>
            <label class="form-check-label" for="exampleRadios1">One-time purchase:<br><span
                id="savesubPrice">$150.00</span></label>
          </div>
          <img src="images/delivery.png" class="truckSub"></span> &nbsp;
          <Span id="priceText1">FREE
            SHIPPING (US, KOREA)</Span><br>
          <img src="images/location.png" class="truckSub"></span> &nbsp;
          <Span id="priceText2">Delivered to Long Beach 90805</Span>
          <div id="subAndSave2">
            <hr style="margin-bottom: 0%;">
            <br>
            <div id="form2" class="form-check ">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                checked>
              <label class="form-check-label" for="exampleRadios1">One-time purchase:<br><span id="savesubPrice">$150.00
                  (Save $5.00)</span></label>
            </div>
            <img src="images/delivery.png" class="truckSub"
              style="font-size:20px; color: black !important; margin-top: 10px;"></span> &nbsp;
            <Span id="priceText1">FREE
              SHIPPING (US, KOREA)</Span><br>
            <img src="images/location.png" class="truckSub" style="font-size:20px; color: black !important;"></span>
            &nbsp;
            <Span id="priceText2">Delivered to Long Beach 90805</Span>
            <p id="stokeText">In Stoke</p>
            <div id="stockDropdown">
              <select style="border-radius: 20px;">
                <option value="0">Qty: 1</option>
                <option value="1">Qty: 2</option>
                <option value="2">Qty: 3</option>
                <option value="3">Qty: 4</option>
                <option value="4">Qty: 5</option>
                <option value="5">Qty: 6</option>
              </select>
            </div>
            <p style="font-size: 21px; color: #2e0000; margin-left: 50px; margin-bottom: 0%; margin-top: 10px;">Delivery
              every:</p>
            <p style="font-size: 12px; color: #282828; margin-left: 50px; margin-bottom: 0%;">months (Most common)</p>
            <input id="buyNow" style="background-color: #e6a800 !important;" type="button" value="Set Up Now"><br>
            <p class="shipFrom">Ships from &nbsp;&nbsp;&nbsp;&nbsp; Nanowell U.S.<br>Sold by &nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MyNanowell.com</p>


          </div>
        </div>

        <span id="pcViewRoll">
          <p id="txtZoom">Roll over image to zoom in</p>
          <p id="txtImageGallery">Image Gallery</p>


          <div class="row" id="jDataGallert">

          </div>
          <br>
          <hr style="height: 10px;">
          <br>
          <p id="txtVideo">Videos for this product</p>


          <div class="row">
            <div class="col-lg-3 col-md-4">
              <video class="ProductVideo" controls>
                <source src="#" type="video/mp4">
              </video>
            </div>
            <div class="col-lg-3 col-md-4">
              <video class="ProductVideo" controls>
                <source src="#" type="video/mp4">
              </video>
            </div>
            <div class="col-lg-3 col-md-4">
              <video class="ProductVideo" controls>
                <source src="#" type="video/mp4">
              </video>
            </div>
            <div class="col-lg-3 col-md-4">
              <video class="ProductVideo" controls>
                <source src="#" type="video/mp4">
              </video>
            </div>

          </div>
        </span>
      </div>
      <div class="col-lg-4 col-md-4">
        <span id="jDatamain">
          <!--JASON -->
        </span>
        <br><br><br class="midbr">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-3">
            <p class="brand">Brand</p>
            <p class="brand">Item Form</p>
            <p class="brand">Unit Count</p>
            <p class="brand">Dimension</p>
            <p class="brand">Weight</p>
            <p class="brand">Origin</p>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-9 col-9 " id="jDataCustomLable">
            <!--jason-->
          </div>
        </div>
        <p>
          <br>
        <p class="mainHeadingDec">DESCRIPTION</p>
        <p class="mainHeadin2gDec">Amazing Ionized CalMag Powder Stick </p>
        <p class="MainDec">
          No.1 Bone Density Formula Available on the market*<br>
          99.99% Absorption Rate<br>
          Nano Ionized Calcium & Magnesium<br>
          Nanowell® Ionized Cal/Mag™ Complex Family<br>
        </p>

        <p class="mainHeadingDec">Recommended Use</p>
        <p class="MainDec">
          Put a stick (2.5g) into at least 250cc of warm to hot water, stir to dilute in <br>
          water thoroughly, and drink it. If you can, it would be best to drink it in several <br>
          portions throughout the day.<br><br>
          *For children taking this product, take 600mg per 15kg of body weight.<br><br>
          We recommend customers who have osteoporosis take the
          powder form products for the highest absorbency.
        </p>


        <p class="mainHeadingDec">Ingredients</p>
        <p class="MainDec">
          Calcium gluconate, Magnesium carbonate, Apple cider vinegar<br>
        </p>

        <p class="mainHeadingDec">CAUTION</p>

        <p class="MainDec">
          If you are pregnant or in a medical condition, please consult with your health<br>
          care professional before taking this product. <br>
          KEEP OUT OF REACH OF CHILDREN.<br>
        </p>

        <p class="mainHeadingDec">Features & Details</p>

        <p class="MainDec">
          Amazing Ionized Cal-Mag products are one of the highest absorption available <br>
          today. It is completely diluted in water and is ionized before taking the <br>
          product. The images show that the product is so particular than any other <br>
          product.
        </p>

        <p class="mainHeadingDec">Significant Roles of Calcium Ions </p>

        <p class="MainDec">
          Strong Bones & Teeth<br>
          Muscle contraction<br>
          Information Delivery in Nervous Systems<br>
          Immune System Trigger in Wound Healing<br>
          <br>
          What can you expect from this product?<br>
          <br>
          High Bioavailability<br>
          Increases Bone Density<br>
          Leg Cramp Relief<br>
          Muscle Relaxation<br>
          Good Night Rest<br>
        </p>

        <p class="mainHeadingDec">Safety Information</p>
        <p class="MainDec">
          This product is labeled to United States standards and may differ from <br>
          Similar products sold elsewhere in its ingredients, labeling, and allergen<br>
          Warnings.
        </p>

        <p class="mainHeadingDec">Legal Disclaimer</p>
        <p class="MainDec">
          Actual product packaging and materials may contain more and different<br>
          Information than what is shown on our website. We recommend that you<br>
          Do not rely solely on the information presented and that you always read<br>
          Labels, warnings, and directions before using or consuming a product.<br>
          <br>
          Statements have not been evaluated by the FDA and are not intended to<br>
          Diagnose, treat, cure, or prevent any disease or health condition.
        </p>

        <p class="mainHeadin2gDec">What is the uniqueness of the product?</p>

        <p class="MainDec">
          Amazing Ionized Cal-Mag products are one of the highest absorption available <br>
          on the market today. It is completely diluted in water, and it is ionized before <br>
          taking the product. The images show that the product is so special than any <br>
          other product.
        </p>

        <p class="mainHeadin2gDec">Major Roles of Calcium Ions</p>

        <p class="MainDec">
          Strong Bones & Teeth<br>
          Muscle contraction<br>
          Information Delivery in Nervous Systems<br>
          Immune System Trigger in Wound Healing
        </p>

        <p class="mainHeadin2gDec"> What can you expect from this product?</p>

        <p class="MainDec">
          High Bioavailability <br>
          Increases Bone Density<br>
          Leg Cramp Relief<br>
          Muscle Relaxation<br>
          Good Night Rest
        </p>
        <br>
        <img src="images/Image 9.png" class="img-thumbnail amazingPng">

      </div>
      <div class="col-lg-3 col-md-3">
        <!--subscription 1-->
        <div id="issubscriptionN">
          <div class="form-check checksave">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
              checked>
            <label class="form-check-label" for="exampleRadios1">One-time purchase:<br><span
                id="savesubPrice">$150.00</span></label>
          </div>
          <img src="images/delivery.png" class="truckSub"></span> &nbsp;
          <Span id="priceText1">FREE
            SHIPPING (US, KOREA)</Span><br>
          <img src="images/location.png" class="truckSub"></span> &nbsp;
          <Span id="priceText2">Delivered to Long Beach 90805</Span>
          <p id="stokeText">In Stoke</p>
          <div id="stockDropdown">
            <select style="border-radius: 20px;">
              <option value="0">Qty: 1</option>
              <option value="1">Qty: 2</option>
              <option value="2">Qty: 3</option>
              <option value="3">Qty: 4</option>
              <option value="4">Qty: 5</option>
              <option value="5">Qty: 6</option>
            </select>
          </div>
          <input id="addToCart" type="button" value="Add to Cart">
          <input id="buyNow" type="button" value="Buy Now"><br>
          <p class="shipFrom">Ships from &nbsp;&nbsp;&nbsp;&nbsp; Nanowell U.S.<br>Sold by &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MyNanowell.com</p>
          <hr style="margin-bottom: 0%;">
          <div id="subAndSave">
            <br>
            <div id="form2" class="form-check ">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                checked>
              <label class="form-check-label" for="exampleRadios1">One-time purchase:<br><span id="savesubPrice">$150.00
                  (Save $5.00)</span></label>
            </div>
            <img src="images/delivery.png" class="truckSub"
              style="font-size:20px; color: black !important; margin-top: 10px;"></span> &nbsp;
            <Span id="priceText1">FREE
              SHIPPING (US, KOREA)</Span><br>
            <img src="images/location.png" class="truckSub" style="font-size:20px; color: black !important;"></span>
            &nbsp;
            <Span id="priceText2">Delivered to Long Beach 90805</Span>
          </div>
        </div>
        <!--subscription 2-->
        <div id="issubscription2">
          <div class="form-check checksave">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
              checked>
            <label class="form-check-label" for="exampleRadios1">One-time purchase:<br><span
                id="savesubPrice">$150.00</span></label>
          </div>
          <img src="images/delivery.png" class="truckSub"></span> &nbsp;
          <Span id="priceText1">FREE
            SHIPPING (US, KOREA)</Span><br>
          <img src="images/location.png" class="truckSub"></span> &nbsp;
          <Span id="priceText2">Delivered to Long Beach 90805</Span>


          <div id="subAndSave2">
            <hr style="margin-bottom: 0%;">


            <br>
            <div id="form2" class="form-check ">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                checked>
              <label class="form-check-label" for="exampleRadios1">One-time purchase:<br><span id="savesubPrice">$150.00
                  (Save $5.00)</span></label>
            </div>
            <img src="images/delivery.png" class="truckSub"
              style="font-size:20px; color: black !important; margin-top: 10px;"></span> &nbsp;
            <Span id="priceText1">FREE
              SHIPPING (US, KOREA)</Span><br>
            <img src="images/location.png" class="truckSub" style="font-size:20px; color: black !important;"></span>
            &nbsp;
            <Span id="priceText2">Delivered to Long Beach 90805</Span>
            <p id="stokeText">In Stoke</p>
            <div id="stockDropdown">
              <select style="border-radius: 20px;">
                <option value="0">Qty: 1</option>
                <option value="1">Qty: 2</option>
                <option value="2">Qty: 3</option>
                <option value="3">Qty: 4</option>
                <option value="4">Qty: 5</option>
                <option value="5">Qty: 6</option>
              </select>
            </div>
            <p id="delever1">Delivery every:</p>
            <p id="delever2">months (Most common)</p>
            <input id="buyNow" style="background-color: #e6a800 !important;" type="button" value="Set Up Now"><br>
            <p class="shipFrom">Ships from &nbsp;&nbsp;&nbsp;&nbsp; Nanowell U.S.<br>Sold by &nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MyNanowell.com</p>


          </div>
        </div>

        <div class="bannerCArd" id="recentMedium" style="float:right;">
          <br>
          <p class="recent">Recently Viewed</p>
          <div id="recentView">
            <div class="card">
              <img id="recentTopImage" src="images/Itemticker1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-title bundle-title pull-left productTitletxt">Bone Care Solution</p><span
                  class="pull-right">
                  <i class="fa fa-heart" id="heart"></i></span><br>
                <p class="card-text product-title">Dr.G's Amazing Ionized Cal Mag 30 Sticks x5 -15- sticks + DK Solution
                  120 soft gels.</p>
                <p class="product-price"><sup>$</sup>150<sup>00</sup><small>($0.50/sticks)</small></p>
                <button type="button" class="addCardBtn">Add Cart</button>
              </div>
            </div>

          </div>
          <br>

          <hr style="height: 10px;">
          <br>
          <p class="recent">TODAY ONLY </p>
          <div id="todayView">
            <div class="card">
              <img src="images/Itemticker1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-title bundle-title pull-left">Bone Care Solution</p><span class="pull-right">
                  <i class="fa fa-heart" id="heart"></i></span><br>
                <p class="card-text product-title">Dr.G's Amazing Ionized Cal Mag 30 Sticks x5 -15- sticks + DK Solution
                  120 soft gels.</p>
                <p class="product-price"><sup>$</sup>150<sup>00</sup><small>($0.50/sticks)</small></p>
                <button type="button" class="addCardBtn">Add Cart</button>
              </div>
            </div>

          </div>

        </div>

        <span id="MobileViewRoll">
          <p id="txtZoom">Roll over image to zoom in</p>
          <p id="txtImageGallery">Image Gallery</p>


          <div class="row" id="jDataGallertmOBILE">



          </div>
          <br>
          <hr style="height: 10px;">
          <br>
          <p id="txtVideo">Videos for this product</p>


          <div class="row">
            <div class="col-lg-3 col-md-4">
              <video class="ProductVideo" controls>
                <source src="#" type="video/mp4">
              </video>
            </div>
            <div class="col-lg-3 col-md-4">
              <video class="ProductVideo" controls>
                <source src="#" type="video/mp4">
              </video>
            </div>
            <div class="col-lg-3 col-md-4">
              <video class="ProductVideo" controls>
                <source src="#" type="video/mp4">
              </video>
            </div>
            <div class="col-lg-3 col-md-4">
              <video class="ProductVideo" controls>
                <source src="#" type="video/mp4">
              </video>
            </div>

          </div>
        </span>


      </div>

      <div id="smallDivShow">
        <p id="question">Customer Questions</p>
        <input id="mobileSearchW" type="search"><span style="background-color:#196f95; padding: 5px;"><img
            style="height:21px;" src="images/searchIcon.png"></span>
        <p id="productQuestion">Q: Is this product made in the USA? It says distributed,
          but not where it’s made on the picture…. </p>
        <p id="productAnswer">
          A: I’m holding a bottle of D3 gummies in my hands, and
          the info you want to know is not listed…</p>
        <p id="productDate">Ladyfingers | 4 years ago</p>

        <p id="productQuestion"> Q: Is this product made in the USA? It says distributed,
          but not where it’s made on the picture…. </p>
        <p id="productAnswer">
          A: I’m holding a bottle of D3 gummies in my hands, and
          the info you want to know is not listed…</p>
        <p id="productDate">Ladyfingers | 4 years ago</p>

        <p id="productQuestion"> Q: Is this product made in the USA? It says distributed,
          but not where it’s made on the picture…. </p>
        <p id="productAnswer">
          A: I’m holding a bottle of D3 gummies in my hands, and
          the info you want to know is not listed…</p>
        <p id="productDate">Ladyfingers | 4 years ago</p>

        <p id="productQuestion"> Q: Is this product made in the USA? It says distributed,
          but not where it’s made on the picture…. </p>
        <p id="productAnswer">
          A: I’m holding a bottle of D3 gummies in my hands, and
          the info you want to know is not listed…</p>
        <p id="productDate">Ladyfingers | 4 years ago</p>
      </div>
    </div>


    <!--banner-->
    <div class="row" id="cardBannerProduct">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="row banner">
          <div class="banner-div">
            <p class="banner-title bannerTitleTxt"><b>Newsletter</b></p>
            <img src="images/banner1.jpg" class="img-thumbnail banner-image bannerMEdium" alt="...">
            <div class="row">
              <p class="banner-text bannerJoinText"><b><a id="banner-a" href="#">Join now</a></b></p>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <br>
  <!--footerTop-->
  <?php
    include "./common/footer.php";
    ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/common.js"></script>
  <script type="text/javascript" src="js/home.js"></script>
  <script type="text/javascript" src="js/ProductDetail.js"></script>
</body>

</html>