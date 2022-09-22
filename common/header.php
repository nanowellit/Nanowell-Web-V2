<div style="background-color:#00334E;width:auto;">
    <span class="input-group">
        <span id="hum2" style="font-size:18px;cursor:pointer" onclick="openNav()"> <img style="width:25px" src="images/iconbar_cropped.png"></span>
        <div id="top-logo">
        	<img id="top-logo-image" src="images/logo.png" >
        </div>
        <input list="suggestions" style="height: 40px; margin-top: 10px;" type="text" class="form-control inputSet" placeholder="Search">
        <datalist id="suggestions"><datalist id="suggestions">
            <option></option>
          </datalist><datalist id="suggestions">
            <option></option>
          </datalist></datalist>
        <span style="margin-top: 10px;" class="input-group-text inputSet" id="basic-addon2"> <i class="fa fa-search"></i></span>
        <label id="locationset" style="margin-left:10px; margin-right: 5px;" data-bs-toggle="modal" data-bs-target="#exampleModal1">
          <i class="yourlocationheadr" style="font-size:24px; cursor: pointer; " class="fa fa-map-marker" aria-hidden="true"></i>
          <label class="yourlocationheadr" style="cursor: pointer;" id="header-top-location-text1">Hello
            <br><label style="cursor: pointer; font-weight: bold;" id="header-top-location-text2" class="location1Footer"><b>Location</b></label></label>
        </label>
        <button class="flagset" type="button" id="modelSign" data-bs-toggle="modal" data-bs-target="#exampleModal2">
          <img id="imageFlag" src="images/flag.png"><i style="padding-top:24px;" class="fa fa-caret-down fa-1x" aria-hidden="true"></i>
        </button>
        <span class="fixRightSide">
            <div class='sign-in-group' style='display:inline-block;'>
                <label class="SigninTo2" id="modelSign" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <label style="cursor: pointer;" id="header-top-location-text1">Hello, <Span id="userName"></Span>
                    <br> <label style="cursor: pointer;" id="header-top-location-text2"><b>Accounts & List</b></label></label>
                </label>
                <label class="SigninTop" id="modelSign" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <label style="cursor: pointer; font-size: medium;" id="header-top-location-text3">Signin
                    <img style="padding-top: 0%;" src="images/userIcon.png" width="26"> </label></label>
                </label>
            </div>
            <label style="cursor:pointer;" id="cardPadding">
                <i class="fa" style="color: white;"><img id="CardSvg" src="images/cartIcon.png" width="40"> </i>
                <span style="color:yellow;  padding-right: 10px; font-size: large;" class='badge' id='lblCartCount'>5</span>
            </label>
        </span>
    </span>
    <span id="searchset" class="input-group">
        <input list="suggestions" style="height: 40px;" type="text" class="form-control inputSet1" placeholder="Search">
        <datalist id="suggestions"><datalist id="suggestions">
            <option></option>
          </datalist><datalist id="suggestions ">
            <option></option>
          </datalist></datalist>
        <span class="input-group-text inputSet1 fa-search1 " id="basic-addon2"> <i class="fa fa-search"></i></span>
        <div id="navScrollSmall" class="navScrollSmall">
            <a href="#home">Home</a>
        </div>
    </span>
</div>
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
                <center class="signInUserView" id="signInUserView"><button id="signInBtn" type="button" class="btn btn-primary btn-sm">Sign In</button>
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
	<div style="position: sticky; top: 1px;"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> <img src="images/CloseBtnNav.png"></a></div>
	<a href="#"><label style="text-decoration:none !important;" id="topSedeNav" class="sidNavTitle">Trending</label></a>
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
  	<span class="scrollmenu" style="font-size:18px;cursor:pointer" onclick="openNav()"> <img src="images/iconbar.png"> </span>
  	<span> <a href="#home">Home</a></span>
</div>
<ul style="position: relative; display: none;" id="navScroll" class="nav">
  	<div id="main">
	    <span style="font-size:18px;cursor:pointer" onclick="openNav()"> <img style="padding: 0%;" src="images/iconbar.png"> </span>
	    <li class="nav-item">
	      <a class="nav-link" aria-current="page" href="#"> BUY AGAIN</a>
	    </li>
	</div>
</ul>
<center class="signInUserView2" id="signInUserView">
	<br>
	<h4>Sign in for the best experence</h4>
	<center><button id="signInBtn" type="button" class="btn btn-primary btn-sm">Sign In Securely</button></center>
	<p id="newCustomer">New customer <a href="">Start here?</a></p>
</center>