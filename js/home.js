function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementsByClassName("mySidenav").overlay = "rgba(0,0,0,0.4)";
  $("#overlay").show();

 
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.body.style.backgroundColor = "white";
  $("#overlay").hide();
s
}


$( document ).ready(async function() {
  $("#overlay").hide();
  prepareCardBannerData();
  prepareItemTickerData();
  prepareTopNavData();
  prepareMainBannerData();
  prepareTopNavDataSmallScreen()
  await rotatePromotions();
  
});

  function prepareCardBannerData(){
    const cardBanner=JSON.parse('[{"bannertitle":"Newsletter","bannerimage":"/images/banner1.jpg","bannerurl":"/newsletter.php","bannercaption":"JOIN NOW"},{"bannertitle":"VitaminPhilosophy","bannerimage":"/images/banner2.jpg","bannerurl":"/vitaminphilosophy.php","bannercaption":"READ NOW"},{"bannertitle":"CalciumPhilosophy","bannerimage":"/images/banner3.jpg","bannerurl":"/calciumphilosophy.php","bannercaption":"READNOW"},{"bannertitle":"KitchenPhilosophy","bannerimage":"/images/banner4.jpg","bannerurl":"/kitchenphilosophy.php","bannercaption":"READ NOW"}]');
  if(cardBanner && cardBanner.length>0){
    var  PreparedHtml="";    
    for (let i = 0; i < cardBanner.length; i++) {
      const element = cardBanner[i];
      PreparedHtml+='<div class="col-lg-3 col-md-6 col-sm-12 banner-row"><div class="banner-div"><div class="row"><p class="banner-title"><b>'+element.bannertitle+'</b></p></div><img src=".'+element.bannerimage+'" class="img-thumbnail banner-image" alt="..."><div class="row"><p class="banner-text"><b><a id="banner-a"href="'+element.bannerurl+'">'+element.bannercaption+'</a></b></p></div></div></div>';
    }
    $("#cardBanner").html(PreparedHtml);
  }
  }

  
function prepareItemTickerData(){
  const ItemTicker=JSON.parse('[{"tickertype":"today only","content":[{"productid":"123","imageurl":"/uploads/product123.jpg","productitle":"3H Collagen 50 Sticks","regularprice":"$50.00","saleprice":"$30.00","tickertitle":"<b>50% off </b>Ends in 12 hours"},{"productid":"122","imageurl":"/uploads/product122.jpg","productitle":"Dr.GIonized Calmag","regularprice":"$50.00","saleprice":"$30.00","tickertitle":"<b> 50% off</b>Ends in 12 hours"}]},{"tickertype":"best sellers","content":[{"productid":"123","imageurl":"/uploads/product123.jpg","productitle":"3H Collagen 50 Sticks","regularprice":"$50.00","saleprice":"$30.00","tickertitle":"<b>50% off </b>Ends in 12 hours"},{"productid":"122","imageurl":"/uploads/product122.jpg","productitle":"Dr. GIonized Calmag","regularprice":"$50.00","saleprice":"$30.00","tickertitle":"<b>50% off </b>Ends in 12 hours"}]},{"tickertype":"recommended","content":[{"productid":"123","imageurl":"/uploads/product123.jpg","productitle":"3H Collagen 50 Sticks","regularprice":"$50.00","saleprice":"$30.00","tickertitle":"<b>50% off </b>Ends in 12 hours"},{"productid":"122","imageurl":"/uploads/product122.jpg","productitle":"Dr.GIonized Calmag","regularprice":"$50.00","saleprice":"$30.00","tickertitle":"<b>50% off </b>Ends in12 hours"}]},{"tickertype":"monthly special","content":[{"productid":"123","imageurl":"/uploads/product123.jpg","productitle":"3H Collagen 50 Sticks","regularprice":"$50.00","saleprice":"$30.00","tickertitle":"<b>50% off </b>Ends in 12 hours"},{"productid":"122","imageurl":"/uploads/product122.jpg","productitle":"Dr.GIonized Calmag","regularprice":"$50.00","saleprice":"$30.00","tickertitle":"<b>50% off </b>Ends in 12hours"}]}]');
if(ItemTicker && ItemTicker.length>0){
  var  PreparedHtml='';
  for (let i = 0; i < ItemTicker.length; i++) {
    var main='';
    var sub='';
    const element = ItemTicker[i];
      main='<div id="ticker'+i+'" class="col-lg-3 col-md-4 col-sm-12 ticker-row"><div class="tickers-title"><p class="d-inline"><b>'+element.tickertype+'</b></p>&nbsp;&nbsp;<a class="d-inline tickers-button"href="#">See All Deals</a></div><div id="carouselExampleFade'+i+'" class="carousel slide carousel-tickers"data-interval="false"><div class="carousel-inner">';    
        var x='';
   for (let j = 0; j < element.content.length; j++) {
    var element1 = element.content[j];
    if(j==0)
    x='active'
    else
    x=''
    sub+='<div class="carousel-item '+x+'"><a href="#"><img id="tickerImageSize" src="images/Itemticker1.png" class="d-block img-thumbnail" alt="..."></a></center><div class="offer-text"><p id="strongId" class="d-inline offer">'+element1.tickertitle+'</div><p class="ofeer-text-detail"><b>'+element1.saleprice+'</b><br>ListPrice: '+element1.regularprice+' <br><b>'+element1.productitle+'</b></p></div>'
   }
   main+=sub;
   main+='</div><button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade'+i+'" data-bs-slide="prev"><span class="carousel-control-prev-icon"aria-hidden="true"></span><span class="visually-hidden">Previous</span></button><button class="carousel-control-next nextt "type="button"data-bs-target="#carouselExampleFade'+i+' "data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button></div><div id="hrTicker" style=" height: 10px; background-color: #DEDEDE; margin-top:10px; border: none;"></div></div>';
  PreparedHtml+=main;   
  }

  $("#ItemTicker").html(PreparedHtml);
}
}


function prepareTopNavData(){
  const topNav=JSON.parse('[{"menutitle":"BUY AGAIN","menuurl":"/buyagain.php"},{"menutitle":"BEST SELLER","menuurl":"/bestseller.php"},{"menutitle":"TODAY ONLY","menuurl":"/todayonly.php"},{"menutitle":"MONTHLY SPECIAL","menuurl":"/monthlyspecial.php"},{"menutitle":"Q&A","menuurl":"/qna.php"},{"menutitle":"REFERRAL & ASSOCIATES","menuurl":"/referral.php"},{"menutitle":"NEWS LETTER","menuurl":"/newsletter.php"},{"menutitle":"CUSTOMER CENTER","menuurl":"/customercenter.php"}]');
if(topNav && topNav.length>0){
  var  PreparedHtml="";  
  var buttonIcon="";
  buttonIcon+='<span id="hum1" style="font-size:18px;cursor:pointer; position:absolute; background-color:#1A6F96" onclick="openNav()"> <img style="padding: 0%;" src="images/iconbar.png">  </span>&nbsp;</span><span id="leftspan" style="margin-left:46px"><label id="show-hide-location" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i style="font-size:26px; cursor: pointer; padding-bottom:10px; padding-top:6px; padding-left:8px" class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp; <label style="color:white; padding-bottom:5px" class="location1Footer">location</label></label>'
  for (let i = 0; i < topNav.length; i++) {
    const element = topNav[i];
    PreparedHtml+='<a  id="navTopp" href="'+element.menuurl+'">'+element.menutitle+'</a>';
  }
  sub=buttonIcon+PreparedHtml+'</span>'
  $("#navScroll").html(sub);
}
}


function prepareTopNavDataSmallScreen(){
  const topNav=JSON.parse('[{"menutitle":"BUY AGAIN","menuurl":"/buyagain.php"},{"menutitle":"BEST SELLER","menuurl":"/bestseller.php"},{"menutitle":"TODAY ONLY","menuurl":"/todayonly.php"},{"menutitle":"MONTHLY SPECIAL","menuurl":"/monthlyspecial.php"},{"menutitle":"Q&A","menuurl":"/qna.php"},{"menutitle":"REFERRAL & ASSOCIATES","menuurl":"/referral.php"},{"menutitle":"NEWS LETTER","menuurl":"/newsletter.php"},{"menutitle":"CUSTOMER CENTER","menuurl":"/customercenter.php"}]');
if(topNav && topNav.length>0){
  var  PreparedHtml="";  
  for (let i = 0; i < topNav.length; i++) {
    const element = topNav[i];
    PreparedHtml+='<a  id="navToppSmall" href="'+element.menuurl+'">'+element.menutitle+'</a>';
  }
  $("#navScrollSmall").html(PreparedHtml);
}
}



function prepareMainBannerData(){
  const mainBanner=JSON.parse('[{"bannerimage":"/images/banner1.jpg","bannerurl":"/aboutus.php"},{"bannerimage":"/images/banner1.jpg","bannerurl":"/aboutus.php"},{"bannerimage":"/images/banner1.jpg","bannerurl":"/aboutus.php"}]');

  var  PreparedHtml="";  
  for (let i = 0; i < mainBanner.length; i++) {
    var active='active';
if(i!=0){
  active='';
}
    const element = mainBanner[i];
    PreparedHtml+='<div class="carousel-item '+active+'"><img src="images/carousel.jpg" class="img-fluid" alt="..."></div>';
  }
  $("#mainBanner").html(PreparedHtml);
}


async function  rotatePromotions(){
  const sleep = ms => new Promise(res => setTimeout(res, ms));
  var promotionsJson=JSON.parse('{"promotion":[{"duration":"5","content":"BUY 2 + GE 2 FOR FREE ONLY FOR AUGUST,2022"},{"duration":"10","content":"FREE SHIPPING FOR ORDERS of $50 or more"},{"duration":"5","content":"SUMMER SALES PREE ! HURRY ,IT ENDS SOON."}]}');
  if(promotionsJson.promotion){
    for (let i = 0; i < promotionsJson.promotion.length; i++) {
      const element = promotionsJson.promotion[i];
      $('#promotionData').text(element.content);
      var duration=parseInt(element.duration);
      await sleep(duration*1000);
if(i==promotionsJson.promotion.length-1){
i=0;
}
    }
    
  }
}







  