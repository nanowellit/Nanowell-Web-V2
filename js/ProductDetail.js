
$(document).ready(async function () {
  prepareProductRecentData();
    prepareCardBannerData();
    prepareProductTodayView();
    prepareProductItemData();
    prepareProductItemDataMobile();
    prepareProductItemCustomLable();
    prepareProductItemImage();
    prepareProductItemImagemOBILE();
  });

  function Data(res)
  {

    console.log(res.color);
    if(document.getElementById(res.id).style.color=='red'){
    document.getElementById(res.id).style.color = "black";
  }

  else if(document.getElementById(res.id).style.color=='black'){
    document.getElementById(res.id).style.color = "red";
  }
  else{
    document.getElementById(res.id).style.color = "red";
  }
  }

  var sub='n';
 if(sub=='y')
  { document.getElementsByClassName('issubscriptionNClassMobile')[0].style.display = "none";
    document.getElementById("issubscriptionN").style.display = "none";
}
else{

document.getElementsByClassName('issubscriptionNClassMobile1')[0].style.display = "none";
document.getElementById("issubscription2").style.display = "none";
}



  function prepareProductItemData() {
    const recentView = JSON.parse('[{ "productid":"23994", "subtitle":"Bone Care Solution(I)", "producttitle":"Dr.G Amazing Ionized Cal Mag 30 sticks x 5 - 150 sticks + DK Solution 120 soft gels", "reviewscore":"4.5", "listprice":"299", "saleprice":"150", "isfreeshipping":"Y", "iscoupon":"Y", "couponid":"13", "coupontitle":"Save an extra $5 when you apply this coupon. You are now eligible for <b>the first time purchase ($5 discount)</b>" }]');
    if (recentView && recentView.length > 0) {
      var PreparedHtml = "";
      for (let i = 0; i < recentView.length; i++) {
        const element = recentView[i];
        PreparedHtml += '<span class="topMainHeadPC"> <p id="p-name">' + element.subtitle + '</p> <p id="p-dec">' + element.producttitle + '</p> <label class="mt-2" id="rating-star"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"> &nbsp;</span><label>95</label> </label> </span> <span class="topMainHeadPC"> <p class="mt-2" id="list-price">List Price:<span id="price"> ' + element.listprice + '</span></p> <p id="p-price">Price: <span id="currencySign">$<span id="currencyPrice">' + element.saleprice + '</span><Span id="currencyFloat">00 &nbsp;</Span><img src="images/delivery.png" style="font-size:20px; color: black !important;"></span> &nbsp; <Span id="priceText">FREE SHIPPING (US, KOREA)</Span> </p> <p id="savedPrices">You Save: <span id="savedCurrencyPrice">$149.00 (49.99%) </p> <div class="d-inline"> <img id="cpncpn" src="images/Coupon.png"> <input id="checkboxcpn" type="checkbox" class="form-check-input" id="exampleCheck1"> <span id="cpnText">' + element.coupontitle + '</span> </div> </span>';
     }
      $("#jDatamain").html(PreparedHtml);
    }
  }

  function prepareProductItemDataMobile() {
    const recentView = JSON.parse('[{ "productid":"23994", "subtitle":"Bone Care Solution(I)", "producttitle":"Dr.G Amazing Ionized Cal Mag 30 sticks x 5 - 150 sticks + DK Solution 120 soft gels", "reviewscore":"4.5", "listprice":"299", "saleprice":"150", "isfreeshipping":"Y", "iscoupon":"Y", "couponid":"13", "coupontitle":"Save an extra $5 when you apply this coupon. You are now eligible for <b>the first time purchase ($5 discount)</b>" }]');
    if (recentView && recentView.length > 0) {
      var PreparedHtml = "";
      for (let i = 0; i < recentView.length; i++) {
        const element = recentView[i];
        PreparedHtml += '<span class="topMainHeadMobile"> <p id="p-name">' + element.subtitle + '</p> <p id="p-dec">' + element.producttitle + '</p> <label class="mt-2" id="rating-star"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"> &nbsp;</span><label>95</label> </label> </span> <img src="images/mainImg.jpg" height="860" width="860" class="img-thumbnail"> <span class="topMainHeadMobile"> <p class="mt-2" id="list-price">List Price:<span id="price">' + element.listprice + '</span></p> <p id="p-price">Price: <span id="currencySign">$<span id="currencyPrice">' + element.saleprice + '</span><Span id="currencyFloat">00 &nbsp;</Span><img src="images/delivery.png" style="font-size:20px; color: black !important;"></span> &nbsp; <Span id="priceText">FREE SHIPPING (US, KOREA)</Span> </p> <p id="savedPrices">You Save: <span id="savedCurrencyPrice">$149.00 (49.99%) </p> <div class="d-inline"> <img id="cpncpn" src="images/Coupon.png"> <input id="checkboxcpn" type="checkbox" class="form-check-input" id="exampleCheck1"> <span id="cpnText">' + element.coupontitle + '</span> </div> </span>';
     }
      $("#jDatamainMpbile").html(PreparedHtml);
    }
  }


  function prepareProductItemCustomLable() {
    const recentView = JSON.parse('[{ "Brand":"Nanowell", "ItemForm":"Powder stick / soft gel", "UnitCount":"150 sticks /120 soft gel", "Dimension":"12cm x 5cm x 5cm", "Weight":"240g", "Origin":"USA" }]');
    if (recentView && recentView.length > 0) {
      var PreparedHtml = "";
      for (let i = 0; i < recentView.length; i++) {
        const element = recentView[i];
        PreparedHtml += ' <p class="brandName"> ' + element.Brand + '</p> <p class="brandName"> ' + element.ItemForm+ '</p> <p class="brandName">' + element.UnitCount +'</p> <p class="brandName">' + element.Dimension +'</p> <p class="brandName">' + element.Weight +'</p> <p class="brandName">' + element.Origin +'</p>';
     }
      $("#jDataCustomLable").html(PreparedHtml);
    }
  }




  function prepareProductItemImage() {
    const recentView = JSON.parse('[{"imageurl": "/productimages/product01.jpg", "isdefault": "Y"},{"imageurl": "/productimages/product01.jpg", "isdefault": "Y"},{"imageurl": "/productimages/product01.jpg", "isdefault": "Y"},{"imageurl": "/productimages/product01.jpg", "isdefault": "Y"},{"imageurl": "/productimages/product01.jpg", "isdefault": "Y"},{"imageurl": "/productimages/product01.jpg", "isdefault": "Y"}]');
    if (recentView && recentView.length > 0) {
      var PreparedHtml = "";
      for (let i = 0; i < recentView.length; i++) {
        const element = recentView[i];
        PreparedHtml += '   <div class="col-lg-3 col-md-4 pb-2" ><img class=" ProductVideo" src=".' + element.imageurl + '"></div> ';
     }
      $("#jDataGallert").html(PreparedHtml);
    }
  }


  function prepareProductItemImagemOBILE() {
    const recentView = JSON.parse('[{"imageurl": "/productimages/product01.jpg", "isdefault": "Y"},{"imageurl": "/productimages/product01.jpg", "isdefault": "Y"},{"imageurl": "/productimages/product01.jpg", "isdefault": "Y"},{"imageurl": "/productimages/product01.jpg", "isdefault": "Y"},{"imageurl": "/productimages/product01.jpg", "isdefault": "Y"},{"imageurl": "/productimages/product01.jpg", "isdefault": "Y"}]');
    if (recentView && recentView.length > 0) {
      var PreparedHtml = "";
      for (let i = 0; i < recentView.length; i++) {
        const element = recentView[i];
        PreparedHtml += '   <div class="col-lg-3 col-md-4 pb-2" ><img class=" ProductVideo" src=".' + element.imageurl + '"></div> ';
     }
      $("#jDataGallertmOBILE").html(PreparedHtml);
    }
  }


function prepareProductRecentData() {
    const recentView = JSON.parse('[{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"}]');
    if (recentView && recentView.length > 0) {
      var PreparedHtml = "";
      for (let i = 0; i < recentView.length; i++) {
        const element = recentView[i];
        PreparedHtml += '<div class="col"><div class="card"><img id="recentTopImage"  src="images/Itemticker1.png" class="card-img-top" alt="..."><div id="cardPRoductBody" class="card-body"><p class="card-title bundle-title pull-left productTitletxt">' + element.itembundletitle + '</p><span class="pull-right"><i style="cursor:pointer;" onclick="Data(h2'+i+')" id=h2'+i+'  class="fa fa-heart" id="heart"></i></span><br><p class="card-text product-title productTitletxt">' + element.itemtitle + '</p><p class="product-price"><sup>$</sup>' + element.price + '<sup>00</sup><small>($' + element.priceperunit + '/sticks)</small></p><button type="button" class="addCardBtn">AddCart</button></div></div></div>';
     }
      $("#recentView").html(PreparedHtml);
    }
  }

  function prepareProductTodayView() {
    const recentView = JSON.parse('[{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"}]');
    if (recentView && recentView.length > 0) {
      var PreparedHtml = "";
      for (let i = 0; i < recentView.length; i++) {
        const element = recentView[i];
        PreparedHtml += '<div class="col"><div class="card"><img id="recentTopImage"  src="images/Itemticker1.png" class="card-img-top" alt="..."><div id="cardPRoductBody" class="card-body"><p class="card-title bundle-title pull-left productTitletxt">' + element.itembundletitle + '</p><span class="pull-right"><i style="cursor:pointer;" onclick="Data(h2'+i+')" id=h2'+i+'  class="fa fa-heart" id="heart"></i></span><br><p class="card-text product-title productTitletxt">' + element.itemtitle + '</p><p class="product-price"><sup>$</sup>' + element.price + '<sup>00</sup><small>($' + element.priceperunit + '/sticks)</small></p><button type="button" class="addCardBtn">AddCart</button></div></div></div>';
      }
      $("#todayView").html(PreparedHtml);
    }
  }


  function prepareCardBannerData() {
    const cardBanner = JSON.parse('[{"bannertitle":"News letter","bannerimage":"/images/banner1.jpg","bannerurl":"/newsletter.php","bannercaption":"JOIN NOW"},{"bannertitle":"Vitamin Philosophy","bannerimage":"/images/banner2.jpg","bannerurl":"/vitaminphilosophy.php","bannercaption":"READ NOW"},{"bannertitle":"Calcium Philosophy","bannerimage":"/images/banner3.jpg","bannerurl":"/calciumphilosophy.php","bannercaption":"READ NOW"},{"bannertitle":"Kitchen Philosophy","bannerimage":"/images/banner4.jpg","bannerurl":"/kitchenphilosophy.php","bannercaption":"READ NOW"}]');
    if (cardBanner && cardBanner.length > 0) {
      var PreparedHtml = "";
      for (let i = 0; i < cardBanner.length; i++) {
        const element = cardBanner[i];
        PreparedHtml += ' <div class="col-lg-3 col-md-3"><div class="row banner"><div class="banner-div"><p class="banner-title bannerTitleTxt"><b>' + element.bannertitle + '</b></p><img src=".' + element.bannerimage + '" class="img-thumbnail banner-image bannerMEdium" alt="..."><div class="row"><p class="banner-text bannerJoinText"><b><a id="banner-a" href="' + element.bannerurl + '">' + element.bannercaption + '</a></b></p></div></div></div> </div>';

      }
      $("#cardBannerProduct").html(PreparedHtml);
    }


  }

