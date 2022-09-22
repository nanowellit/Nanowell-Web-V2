$( document ).ready(async function() {
    prepareFooterData();
    prepareSearchSuggestionData();
    prepareLocationData();
    checkLogin();
  });
  


/*---footer*/
function prepareFooterData(){
    const footer=JSON.parse('[{"companytitle":"True Nutrition Company","subtitle":"World wide Headquarters","phone":"+1 (562) 423-4080","phone2":"(Tollfree) (844) 262-8998","address":"","website":""},{"companytitle":"Naturion Pharma, Inc","subtitle":"Functional Foods & Dietary Supplement Manufacturer","phone":"","phone2":"","address":"Santa Fe Sprints, CAUSA","website":""},{"companytitle":"Nanowell Health, Inc.","subtitle":"Certified Dealer#1 in S.Korea","phone":"+821644-8226","phone2":"","address":"","website":"www.NanowellHealth.com"},{"companytitle":"Nanowell Shop","subtitle":"Certified Dealer#2 in S.Korea","phone":"+82 (562) 423-4080","phone2":"(Tollfree) (844) 262-8998","address":"","website":""},{"companytitle":"True Nutrition Company","subtitle":"Worldwide Headquarters","phone":"+1 (562) 423-4080","phone2":"(Tollfree) (844) 262-8998","address":"","website":""},{"companytitle":"True Nutrition Company","subtitle":"Worldwide Headquarters","phone":"+1 (562) 423-4080","phone2":"(Tollfree) (844) 262-8998","address":"","website":""},{"companytitle":"True Nutrition Company","subtitle":"Worldwide Headquarters","phone":"+1 (562) 423-4080","phone2":"(Tollfree) (844) 262-8998","address":"","website":""}]');
  if(footer && footer.length>0){
    var  PreparedHtml="";    
    for (let i = 0; i < footer.length; i++) {
      const element = footer[i];
      PreparedHtml+='<div class="col-lg-3 col-md-3 col-sm-6 col-6 banner-bottom-padding"><div class="center"><p class="up1">'+element.companytitle+'</p><p class="up-p-1">'+element.subtitle+'</p><p class="up-p-1">Home:'+element.phone+'</p><p class="up-p-1">Home: '+element.phone2+'</p><p class="up-p-1">Address: '+element.address+'</p><p class="up-p-1">Website: '+element.website+'</p></div></div>';
    }
    $("#row-bottom-footer").html(PreparedHtml);
  }
  }

  
  /*--search suggestion*/
  
function prepareSearchSuggestionData(){
    const SearchSuggestion=JSON.parse('[{"display":"Dr. G\’s amazing ionized Calcium","value":"12"},{"display":"Sean Lee\’s ionized Calmag","value":"15"}]');
  if(SearchSuggestion && SearchSuggestion.length>0){
    var  PreparedHtml="";  
    var buttonIcon="";
    for (let i = 0; i < SearchSuggestion.length; i++) {
      const element = SearchSuggestion[i];
      PreparedHtml+='<datalist id="suggestions"><option>'+element.display+'</option></datalist>';
    }
    $("#suggestions").html(PreparedHtml);
  }
  }


  
function prepareLocationData(){
    const LocationSet=JSON.parse('[{"contactid":"1","fullname":" JamesKim ","address":" 123 S. Vermontave Los Angeles CA 90020"},{"contactid":"2","fullname":"Chris Baker","address":"3422 E.Artesia Blvd LongBeach CA 90820"},{"contactid":"3","fullname":"Justin Lee","address":"5999 W.23th St.Los Angeles CA 90090"}]');
  if(LocationSet && LocationSet.length>0){
    var  PreparedHtml="";  
    for (let i = 0; i < LocationSet.length; i++) {
      const element = LocationSet[i];
      PreparedHtml+='<tr"><td><p><b>'+element.fullname+'</b></p><p>'+element.address+'</p></td></tr>';
    }
    $("#GetlocationTable").html(PreparedHtml);
  }
  }


  
function checkLogin(){
    const loginJson=JSON.parse('{"loginstatus":"loggedin","displayname":"James"}');
  if(loginJson.displayname && loginJson.displayname!=''){
  //hide sign in div
  $('.signInUserView').hide();
  $('.signInUserView2').hide();
  $('.SigninTop').hide();
   $('.SigninTo2').show();
  }
  else{
  //show sign in div
  $('.SigninTop').show();
  $('.SigninTop').show();
  $('.SigninTo2').hide();
  }
  $("#userName").text(loginJson.displayname);
  }
  

  /*----language get---*/
var userLanguage = window.navigator.userLanguage || window.navigator.language;
var userLang = navigator.language || navigator.userLanguage; 
// alert ("The language is: " + userLang);
$("#languageFooter").html(userLang);

/*----script for get locayion from ip--*/
$.get("http://ipinfo.io", function(response) {
    console.log(response.city, response.country,);
    $(".location1Footer").html(response.city);
}, "jsonp");


  
  
