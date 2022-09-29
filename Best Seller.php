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
 <!--header-->
 <?php
    include "./common/header.php";
    ?>
  <!--for signin-->
  <!-- Modal location -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Choose Your Location</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table id="GetlocationTable">
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal signin -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div style="width:340px ;" class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Your Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div style="padding-left: 40px;" class="modal-body">
          <center class="signInUserView" id="signInUserView"><button id="signInBtn" type="button"
              class="btn btn-primary btn-sm">Sign In</button>
            <p id="newCustomer">New customer <a href="">Start here?</a></p>
          </center>
          <p>Accounts</p>
          <p>Orders</p>
          <p>Watch List</p>
          <p>Switch Account</p>
          <p>Signout</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal language -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div style="width:340px ;" class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sitw Preference</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <fieldset>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Your Shipping Destination</label>
                <select id="disabledSelect" class="form-select">
                  <option>US-United States </option>
                </select>
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Select your Language</label>
                <select id="disabledSelect" class="form-select">
                  <option>English</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Select your currency</label>
                <select id="disabledSelect" class="form-select">
                  <option>KRW</option>
                </select>
              </div>
              <div class="mb-3">
              </div>
            </fieldset>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!--navbar-->
  <div style="z-index: 9999; overscroll-behavior: contain;" id="mySidenav" class="sidenav">
    <div style="position: sticky; top: 1px;"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> <img
          src="images/CloseBtnNav.png"></a></div><br><br>
    <a href="#"><label class="sidNavTitle">Trending</label></a>
    <a href="#"><label class="nav-links">Best Sallers</label></a>
    <a href="#"><label class="nav-links">Only Today</label></a>
    <a href="#"><label class="nav-links">Monthly Special</label></a>
    <hr>
    <a href="#"><label class="sidNavTitle">By Concerns</label></a>
    <a href="#"><label class="nav-links">Bone & Joint Health</label></a>
    <a href="#"><label class="nav-links">Cognitive Health</label></a>
    <a href="#"><label class="nav-links">Climacteric Health</label></a>
    <a href="#"><label class="nav-links">Diabetic Health</label></a>
    <a href="#"><label class="nav-links">Digestive Health</label></a>
    <a href="#"><label class="nav-links">Eye & Oral Health</label></a>
    <a href="#"><label class="nav-links">Hair Health</label></a>
    <a href="#"><label class="nav-links">Hearth Health</label></a>
    <a href="#"><label class="nav-links">Immune Health</label></a>
    <a href="#"><label class="nav-links">Kideney Health</label></a>
    <a href="#"><label class="nav-links">Liver Health</label></a>
    <a href="#"><label class="nav-links">Lung Health</label></a>
    <a href="#"><label class="nav-links">Prostate Health</label></a>
    <a href="#"><label class="nav-links">Uterus Health</label></a>
    <hr>
    <a href="#"><label class="sidNavTitle">By Sex</label></a>
    <a href="#"><label class="nav-links">Men's Health</label></a>
    <a href="#"><label class="nav-links">Women Health</label></a>
    <a href="#"><label class="nav-links">Kids Health</label></a>
    <hr>
    <a href="#"><label class="sidNavTitle">By Ingredient</label></a>
    <a href="#"><label class="nav-links">Minerals</label></a>
    <a href="#"><label class="nav-links">Vitamins</label></a>
    <a href="#"><label class="nav-links">Lutein</label></a>
    <a href="#"><label class="nav-links">Zeaxanthin</label></a>
    <a href="#"><label class="nav-links">Omega-3</label></a>
    <hr>
    <a href="#"><label class="sidNavTitle">Programs & Features</label></a>
    <a href="#"><label class="nav-links">Referrals & Associates</label></a>
    <a href="#"><label class="nav-links">Calcium Philosophy</label></a>
    <a href="#"><label class="nav-links">Vitamin Philosophy</label></a>
    <a href="#"><label class="nav-links">Kitchen Philosophy</label></a>
    <a href="#"><label class="nav-links">Newsletter</label></a>
    <a href="#"><label class="nav-links">F A Q</label></a>
    <a href="#"><label class="nav-links">customer Center</label></a>
    <hr>
    <a href="#"><label class="sidNavTitle">Help & Settings</label></a>
    <a href="#"><label class="nav-links">Your Account</label></a>
    <a href="#"><label class="nav-links"> <img src="images/languageIcon.png">Englist</label></a>
    <a href="#"><label class="nav-links"><img src="images/flag.png">United States</label></a>
    <a href="#"><label class="nav-links">Sign In</label></a>
    <hr>
  </div>
  <div id="navScroll" class="scrollmenu">
    <span class="scrollmenu" style="font-size:18px;cursor:pointer" onclick="openNav()"> <img src="images/iconbar.png">
    </span>
    <span> <a href="#home">Home</a></span>
  </div>
  <ul style="position: relative; display: none;" id="navScroll" class="nav">
    <div id="main">
      <span style="font-size:18px;cursor:pointer" onclick="openNav()"> <img style="padding: 0%;"
          src="images/iconbar.png"> </span>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#"> BUY AGAIN</a>
      </li>
  </ul>
  <center class="signInUserView2" id="signInUserView">
    <br>
    <h4>Sign in for the best experence</h4>
    <center><button id="signInBtn" type="button" class="btn btn-primary btn-sm">Sign In Securely</button></center>
    <p id="newCustomer">New customer <a href="">Start here?</a></p>
  </center>
  <!--promotionbar-->
  <div id="promotion-bar-div" class="row">
    <div id="promotion-bar" class="col-lg-12 "><label id="promotionData">FOR FREE ONLY</label></div>
  </div>
  <!--Item-tickers-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-4 padding-0">
        <!--Stationary-->
        <div class="stationary">
          <div style="position: sticky; top: 1px;"></div>
          <a href="#"><label style="text-decoration:none !important;" class="sidNavTitle">Trending</label></a>
          <a href="#"><label class="nav-links">Best Sallers</label></a>
          <a href="#"><label class="nav-links">Only Today</label></a>
          <a href="#"><label class="nav-links">Monthly Special</label></a>
          <hr>
          <a href="#"><label class="sidNavTitle">By Concerns</label></a>
          <a href="#"><label class="nav-links">Bone & Joint Health</label></a>
          <a href="#"><label class="nav-links">Cognitive Health</label></a>
          <a href="#"><label class="nav-links">Climacteric Health</label></a>
          <a href="#"><label class="nav-links">Diabetic Health</label></a>
          <a href="#"><label class="nav-links">Digestive Health</label></a>
          <a href="#"><label class="nav-links">Eye & Oral Health</label></a>
          <a href="#"><label class="nav-links">Hair Health</label></a>
          <a href="#"><label class="nav-links">Hearth Health</label></a>
          <a href="#"><label class="nav-links">Immune Health</label></a>
          <a href="#"><label class="nav-links">Kideney Health</label></a>
          <a href="#"><label class="nav-links">Liver Health</label></a>
          <a href="#"><label class="nav-links">Lung Health</label></a>
          <a href="#"><label class="nav-links">Prostate Health</label></a>
          <a href="#"><label class="nav-links">Uterus Health</label></a>
          <hr>
          <a href="#"><label class="sidNavTitle">By Sex</label></a>
          <a href="#"><label class="nav-links">Men's Health</label></a>
          <a href="#"><label class="nav-links">Women Health</label></a>
          <a href="#"><label class="nav-links">Kids Health</label></a>
          <hr>
          <a href="#"><label class="sidNavTitle">By Ingredient</label></a>
          <a href="#"><label class="nav-links">Minerals</label></a>
          <a href="#"><label class="nav-links">Vitamins</label></a>
          <a href="#"><label class="nav-links">Lutein</label></a>
          <a href="#"><label class="nav-links">Zeaxanthin</label></a>
          <a href="#"><label class="nav-links">Omega-3</label></a>
          <hr>
          <a href="#"><label class="sidNavTitle">Programs & Features</label></a>
          <a href="#"><label class="nav-links">Referrals & Associates</label></a>
          <a href="#"><label class="nav-links">Calcium Philosophy</label></a>
          <a href="#"><label class="nav-links">Vitamin Philosophy</label></a>
          <a href="#"><label class="nav-links">Kitchen Philosophy</label></a>
          <a href="#"><label class="nav-links">Newsletter</label></a>
          <a href="#"><label class="nav-links">F A Q</label></a>
          <a href="#"><label class="nav-links">customer Center</label></a>
          <hr>
          <a href="#"><label class="sidNavTitle">Help & Settings</label></a>
          <a href="#"><label class="nav-links">Your Account</label></a>
          <a href="#"><label class="nav-links"> <img src="images/languageIcon.png">Englist</label></a>
          <a href="#"><label class="nav-links"><img src="images/flag.png">United States</label></a>
          <a href="#"><label class="nav-links">Sign In</label></a>
          <br>
        </div>
        <div class="row banner-hide">
          <div class="col-lg-12 padding-0" id="cardBanner">
            <div class="row banner">
              <div class="banner-div">
                <p class="banner-title"><b>Newsletter</b></p>
                <img src="images/banner1.jpg" class="img-thumbnail banner-image" alt="...">
                <div class="row">
                  <p class="banner-text"><b><a id="banner-a" href="#">Join now</a></b></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
      </div>

      <div class="col-lg-9 col-md-8 padding-0">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <br>
            <p id="main-heading">NANOWELL > <span id="sub-heading"> BEST SELLER</span></p>
            <p id="main-result-heading">10 results for &nbsp; <span id="sub-result-heading">"BEST SELLER"</span></p>
          </div>
          <div id="selectorSmallHide" style="text-align:right;" class="col-lg-6 col-md-6">
            <br class="hiderow"><span class="d-inline">Sort By:&nbsp;</span>
            <select class="form-select d-inline" aria-label="Default select example">
              <option selected>Low to High</option>
              <option value="1">High to low</option>
              <option value="2">High to low</option>
              <option value="3">High to low</option>
            </select>
          </div>
        </div>

        <div id="mobileViewRow" class="row">
          <div class="col-6 mobileViewCol">
            <img src="images/Itemticker1.png" class="card-img-top mobileImgView" alt="...">
          </div>
          <div class="col-6 mobileViewCol">
            <p class="bundle-title">Bone Care Solution</p>
            <p class="product-title">Dr.G's Amazing Ionized Cal Mag 30 Sticks x5 -15- sticks + DK Solution 120 soft
              gels.</p>
            <p class="list-price">List Price: <span>$299.00</span></p>
            <p class="shippingDescription"><span class="fa fa-truck" style="font-size:20px;"></span> &nbsp; FREE
              SHIPPING (US, KOREA)</p>
            <p class="pricePerStick"><span class="priceTag">Price: &nbsp;</span>$150<sup>00</sup>
              <x-small style="color:black;">($0.50/sticks)</x-small>
            </p>
            <p class="pricePerStick"><span class="priceTag">Price: &nbsp;</span> $149.00 (49.99%)</p>
            <div class="rating">
              <span id="ratingText">95</span>
              <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
              <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
              <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
              <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
              <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
            </div>
            <span id="checkBoxLabel"><img src="images/Coupon.png" width="50"> <input id="checkbox"
                type="checkbox"><span> &nbsp; Save an extra $5 you,re now eligible
                for the first time purchase ($5 discount),</span></span>
            <button type="button" class="addCardBtn">Add Cart</button><i style="padding-right: 10px; padding-top: 6px;"
              class="fa fa-heart pull-right" id="heart"></i>
          </div>
        </div>
        <div id="heightAdj" class="row">
          <div id="bestseller"
            class="row row-cols-1 row-cols-lg-4  row-cols-md-2 row-cols-sm-2 row-cols-2 g-3 mobileHide">
            <div style="margin-top:0% ;" class="col">
              <div class="card">
                <img src="images/Itemticker1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-title bundle-title pull-left">Bone Care Solution</p><span class="pull-right">
                    <i class="fa fa-heart" id="heart"></i></span><br>
                  <p class="card-text product-title">Dr.G's Amazing Ionized Cal Mag 30 Sticks x5 -15- sticks + DK
                    Solution
                    120 soft gels.</p>
                  <p class="product-price"><sup>$</sup>150<sup>00</sup><small id="stick">($0.50/sticks)</small></p>
                  <button type="button" class="addCardBtn">Add Cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <br>
        <!--pagination-->
        <div class="row">
          <div class="col-lg-6 col-md-8 col-sm-12 col-12 padding-0">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">20</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
                <br>
              </ul>
            </nav>
          </div>
          <div class="col-lg-6 col-md-4 col-sm-12 col-12 padding-0">
            <div id="mobilepageNum">
              <span id="show">Show</span>
              <select id="selectPage">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <span id="perPage">Per Page</span>
            </div>
          </div>
        </div>
        <p id="recent">Recently Viewed</p>
        <!--recent Mobile view-->
        <div id="recentMobileView" class="section  padding-0">
          <div id="mobileViewRow" class="row">
            <div class="col-6 mobileViewCol">
              <img src="images/Itemticker1.png" class="card-img-top mobileImgView" alt="...">
            </div>
            <div class="col-6 mobileViewCol">
              <p class="bundle-title">Bone Care Solution</p>
              <p class="product-title">Dr.G's Amazing Ionized Cal Mag 30 Sticks x5 -15- sticks + DK Solution 120 soft
                gels.</p>
              <p class="list-price">List Price: <span>$299.00</span></p>
              <p class="shippingDescription"><span class="fa fa-truck" style="font-size:20px;"></span> &nbsp; FREE
                SHIPPING (US, KOREA)</p>
              <p class="pricePerStick"><span class="priceTag">Price: &nbsp;</span>$150<sup>00</sup>
                <x-small style="color:black;">($0.50/sticks)</x-small>
              </p>
              <p class="pricePerStick"><span class="priceTag">Price: &nbsp;</span> $149.00 (49.99%)</p>
              <div class="rating">
                <span id="ratingText">95</span>
                <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
              </div>
              <span id="checkBoxLabel"> <span><img src="images/Coupon.png" width="50"><input id="checkbox"
                    type="checkbox"> &nbsp; Save an extra $5 you,re now eligible
                  for the first time purchase ($5 discount),</span></span>
              <button type="button" class="addCardBtn">Add Cart</button>
            </div>
          </div>


        </div>
        <!--recent desktop view-->
        <div id="recentView"
          class="row row-cols-1 row-cols-lg-4  row-cols-md-2 row-cols-sm-2 row-cols-2 g-3 mobileHide">
          <div class="col">
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
      </div>
    </div>
    <div class="row banner-hide2">
      <div class="col-lg-12 padding-0">
        <div class="row banner">
          <div class="banner-div">
            <p class="banner-title"><b>Newsletter</b></p>
            <img src="images/banner1.jpg" class="img-thumbnail banner-image" alt="...">
            <div class="row">
              <p class="banner-text"><b><a id="banner-a" href="#">Join now</a></b></p>
            </div>
          </div>
        </div>
        <div class="row banner">
          <div class="banner-div">
            <p class="banner-title"><b>Newsletter</b></p>
            <img src="images/banner2.jpg" class="img-thumbnail banner-image" alt="...">
            <div class="row">
              <p class="banner-text"><b><a id="banner-a" href="#">Join now</a></b></p>
            </div>
          </div>
        </div>
        <div class="row banner">
          <div class="banner-div">
            <p class="banner-title"><b>Newsletter</b></p>
            <img src="images/banner3.jpg" class="img-thumbnail banner-image" alt="...">
            <div class="row">
              <p class="banner-text"><b><a id="banner-a" href="#">Join now</a></b></p>
            </div>
          </div>
        </div>
        <div class="row banner">
          <div class="banner-div">
            <p class="banner-title"><b>Newsletter</b></p>
            <img src="images/banner4.jpg" class="img-thumbnail banner-image" alt="...">
            <div class="row">
              <p class="banner-text"><b><a id="banner-a" href="#">Join now</a></b></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--footer-->
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
  <script type="text/javascript" src="js/best-seller.js"></script>
</body>

</html>