
$(document).ready(async function () {

  prepareCardBannerData();
  prepareBestSellerData();
  prepareBestSellerMobieViewData();
  prepareBestSellerRecentData();
  prepareBestSellerRecentMobieViewData();

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

function prepareCardBannerData() {
  const cardBanner = JSON.parse('[{"bannertitle":"News letter","bannerimage":"/images/banner1.jpg","bannerurl":"/newsletter.php","bannercaption":"JOIN NOW"},{"bannertitle":"Vitamin Philosophy","bannerimage":"/images/banner2.jpg","bannerurl":"/vitaminphilosophy.php","bannercaption":"READ NOW"},{"bannertitle":"Calcium Philosophy","bannerimage":"/images/banner3.jpg","bannerurl":"/calciumphilosophy.php","bannercaption":"READ NOW"},{"bannertitle":"Kitchen Philosophy","bannerimage":"/images/banner4.jpg","bannerurl":"/kitchenphilosophy.php","bannercaption":"READ NOW"}]');
  if (cardBanner && cardBanner.length > 0) {
    var PreparedHtml = "";
    for (let i = 0; i < cardBanner.length; i++) {
      const element = cardBanner[i];
      PreparedHtml += '<div class="row banner"><div class="banner-div"><p class="banner-title"><b>' + element.bannertitle + '</b></p><img src=".' + element.bannerimage + '" class="img-thumbnail banner-image" alt="..."><div class="row"><p class="banner-text"><b><a id="banner-a" href="' + element.bannerurl + '">' + element.bannercaption + '</a></b></p></div></div></div>';
    }
    $("#cardBanner").html(PreparedHtml);
  }

 
}

function prepareBestSellerData() {
  const bestseller = JSON.parse('[{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"}]');
  if (bestseller && bestseller.length > 0) {
    var PreparedHtml = "";
    for (let i = 0; i < bestseller.length; i++) {
      const element = bestseller[i];
      PreparedHtml += '<div style="margin-top:0%;border-bottom: 7px #DEDEDE solid;margin-bottom:16px" class="col"><div class="card"><img src="images/Itemticker1.png" class="card-img-top" alt="..."><div class="card-body"><p class="card-title bundle-title pull-left">' + element.itembundletitle + '</p><span class="pull-right"><i onclick="Data(h'+i+')" id=h'+i+' style="color:black" class="fa fa-heart" id="heart"></i></span><br><p class="card-text product-title">' + element.itemtitle + '</p><p class="product-price"><sup>$</sup>' + element.price + '<sup>00</sup><small id="stick">($' + element.priceperunit + '/sticks)</small></p><button type="button" class="addCardBtn">AddCart</button></div></div></div>';
    }
    $("#bestseller").html(PreparedHtml);
  }
}

function prepareBestSellerMobieViewData() {
  const mobileViewRow = JSON.parse('[{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"Bone CareSolution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"Bone CareSolution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"Bone CareSolution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"}]');
  if (mobileViewRow && mobileViewRow.length > 0) {
    var PreparedHtml = "";
    for (let i = 0; i < mobileViewRow.length; i++) {
      const element = mobileViewRow[i];
      PreparedHtml += '<div class="col-6 mobileViewCol"><img src="images/Itemticker1.png" class="card-img-top mobileImgView" alt="..."></div><div class="col-6 mobileViewCol"><p class="bundle-title">' + element.itembundletitle + '</p><p class="product-title">' + element.itemtitle + '</p><p class="list-price">ListPrice:<span>$299.00</span></p><p class="shippingDescription"><span class="fa fa-truck" style="font-size:20px;"></span>&nbsp;FREE SHIPPING (US,KOREA)</p><p class="pricePerStick"><span class="priceTag">Price:&nbsp;</span>' + element.price + '<sup>00</sup> <x-small style="color:black;">($' + element.priceperunit + '/sticks)</x-small></p><p class="pricePerStick"><span class="priceTag">Price:&nbsp;</span>$149.00(49.99%)</p><div class="rating"><span id="ratingText">95</span><input type="radio" name="rating" value="5" id="5"><label for="5">☆</label><input type="radio" name="rating" value="4" id="4"><label for="4">☆</label><input type="radio" name="rating" value="3" id="3"><label for="3">☆</label><input type="radio" name="rating" value="2" id="2"><label for="2">☆</label><input type="radio" name="rating" value="1" id="1"><label for="1">☆</label></div><span id="checkBoxLabel"> <span><img src="images/Coupon.png" width="50"><input id="checkbox" type="checkbox"> &nbsp; Save an extra $5 you,re now eligible for the first time purchase ($5 discount),</span></span><button type="button" class="addCardBtn">AddCart</button><i onclick="Data(h1'+i+')" id=h1'+i+'  style="padding-right: 10px; padding-top: 6px; color:black" class="fa fa-heart pull-right" id="heart"></i></div>';
   }
    $("#mobileViewRow").html(PreparedHtml);
  }
}

function prepareBestSellerRecentData() {
  const recentView = JSON.parse('[{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"}]');
  if (recentView && recentView.length > 0) {
    var PreparedHtml = "";
    for (let i = 0; i < recentView.length; i++) {
      const element = recentView[i];
      PreparedHtml += '<div class="col"><div class="card"><img src="images/Itemticker1.png" class="card-img-top" alt="..."><div class="card-body"><p class="card-title bundle-title pull-left">' + element.itembundletitle + '</p><span class="pull-right"><i onclick="Data(h2'+i+')" id=h2'+i+'  class="fa fa-heart" id="heart"></i></span><br><p class="card-text product-title">' + element.itemtitle + '</p><p class="product-price"><sup>$</sup>' + element.price + '<sup>00</sup><small>($' + element.priceperunit + '/sticks)</small></p><button type="button" class="addCardBtn">AddCart</button></div></div></div>';
   }
    $("#recentView").html(PreparedHtml);
  }
}

function prepareBestSellerRecentMobieViewData() {
  const recentMobileView = JSON.parse('[{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"},{"itemid":"34533","itembundletitle":"BoneCare Solution (I)","itemtitle":"Dr.G\'s Amazing Ionized Cal mag 30 Sticks x5-150 sticks + DK Solution 120 soft gels","price":"150","priceperunit":"0.50","isfavorite":"Y","thumbnailurl":"/productimages/thumb0123.png"}]');
  if (recentMobileView && recentMobileView.length > 0) {
    var PreparedHtml = "";
    for (let i = 0; i < recentMobileView.length; i++) {
      const element = recentMobileView[i];
      PreparedHtml += '<div id="mobileViewRow" class="row"><div class="col-6 mobileViewCol"><img src="images/Itemticker1.png" class="card-img-top mobileImgView"alt="..."></div><div class="col-6 mobileViewCol"><p class="bundle-title">' + element.itembundletitle + '</p><p class="product-title">' + element.itemtitle + '</p><p class="list-price">ListPrice:<span>$299.00</span></p><p class="shippingDescription"><span class="fa fa-truck" style="font-size:20px;"></span>&nbsp;FREE SHIPPING (US,KOREA)</p><p class="pricePerStick"><span class="priceTag">Price: &nbsp;</span>' + element.price + '<sup>00</sup> <x-small style="color:black;">($' + element.priceperunit + '/sticks)</x-small></p><p class="pricePerStick"><span class="priceTag">Price:&nbsp;</span>$149.00(49.99%)</p><div class="rating"><span id="ratingText">95</span><input type="radio" name="rating" value="5" id="5"><label for="5">☆</label><input type="radio" name="rating" value="4" id="4"><label for="4">☆</label><input type="radio" name="rating" value="3" id="3"><label for="3">☆</label><input type="radio" name="rating" value="2" id="2"><label for="2">☆</label><input type="radio" name="rating" value="1" id="1"><label for="1">☆</label></div><span id="checkBoxLabel"><span><img src="images/Coupon.png" width="50"><input id="checkbox" type="checkbox">&nbsp;Save an extra $ 5 you,re now eligible for the first time purchase ($5 discount),</span></span><button type="button" class="addCardBtn">AddCart</button><i style="padding-right: 10px; padding-top: 6px;" onclick="Data(h3'+i+')" id=h3'+i+'  class="fa fa-heart pull-right" id="heart"></i></div></div>';
   }
    $("#recentMobileView").html(PreparedHtml);
  }
}