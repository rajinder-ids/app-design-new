<?php 
  include_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Products-page</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container custom-container">
  <div class="section topbar">
      <!--   Icon Section   -->
      <div class="row">
         <div class="col s4 m4 left-align">
            <a href="#" data-target="slide-out" class="sidenav-trigger">
              <i class="material-icons white-text">menu</i>
            </a>
         </div>
         <div class="col s4 m4 center-align">
            Products
         </div>
         <div class="col s4 m4 right-align">
           <i class="material-icons dp48">notifications_none</i>
         </div>
      </div>
      <div class="row app-search-box">
        <div class="col s12">
          <form class="search-container">
            <input class="black-text" type="text" id="search-bar" placeholder="Search Products Categories">
            <a href="#"><i class="material-icons">search</i></a>
          </form>
        </div>
      </div>
  </div>
  <!---------sidebar menu----------->
        <ul id="slide-out" class="sidenav">
          <li>
            <div class="user-view center">
              <div class="background" style="background: linear-gradient(to right, rgba(254,39,82,1) 0%, rgba(237,33,44,1) 100%);"> 
              </div>
              <div class="profile">
                <img class="" src="images/profile.png">
                <h5 class="white-text">Jassica Jones</h5>
              </div>
            </div>
          </li>
          <li>
            <a href="home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
          </li>
          <li>
            <a href="edit-profile.php"><i class="fa fa-user-o" aria-hidden="true"></i>My profile</a>
          </li>
          <li>
            <a href="send-code.php"><i class="fa fa-qrcode" aria-hidden="true"></i>Scan-code</a>
          </li>
          <li>
            <a href="subscription.php"><i class="fa fa-server" aria-hidden="true"></i>Subscription</a>
          </li>
          <li>
            <a href="home.php"><i class="material-icons dp48">home</i>Exclusive Items</a>
          </li>
          <li>
            <a href="watch-list.php"><i class="fa fa-heart-o" aria-hidden="true"></i>Watch List</a>
          </li>
          <li>
            <a href="shoping-list.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Shopping List</a>
          </li>
          <li>
            <a href="contact.php"><i class="fa fa-star-o" aria-hidden="true"></i>Feedback/Contact</a>
          </li>
          <li>
            <a href="faq.php"><i class="fa fa-wpforms" aria-hidden="true"></i>FAQ</a>
          </li>
          <li>
            <a href="sign-up.php"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>Logout</a>
          </li>
        </ul>
  <!---------sidebar menu----------->
  <div class="wrap-padding porducts-list" >
    <div class="section">
      <div class="row"> 
        <div class="col s6 m4 l3">
          <div class="porducts-grid center">
            <img src="images/1.png">
            <a href="#"><i class="material-icons dp48 app-wishlist-icon">favorite_border</i></a>
          </div>
          <div class="porducts-title">
            <h6 class="black-text truncate">Portable Wireless Speakers</h6>
            <h5 class="green-text">$14.86</h5>
            <h6 class="grey-text">$14.86 <span class="black-text">(Save 10%)</span></h6>
            <a>Add a shopping list</a>
          </div>
        </div>
        <div class="col s6 m4 l3">
          <div class="porducts-grid center">
            <img src="images/2.png">
            <a href="#"><i class="material-icons dp48 app-wishlist-icon">favorite_border</i></a>
          </div>
          <div class="porducts-title">
            <h6 class="black-text truncate">BEATS Wireless Headphones</h6>
            <h5 class="green-text">$14.86</h5>
            <h6 class="grey-text">$14.86 <span class="black-text">(Save 10%)</span></h6>
            <a>Add a shopping list</a>
          </div>
        </div>
        <div class="col s6 m4 l3">
          <div class="porducts-grid center">
            <img src="images/1.png">
            <a href="#"><i class="material-icons dp48 app-wishlist-icon">favorite_border</i></a>
          </div>
          <div class="porducts-title">
            <h6 class="black-text truncate ">Portable Wireless Speakers</h6>
            <h5 class="green-text">$14.86</h5>
            <h6 class="grey-text">$14.86 <span class="black-text">(Save 10%)</span></h6>
            <a>Add a shopping list</a>
          </div>
        </div>
        <div class="col s6 m4 l3">
          <div class="porducts-grid center">
            <img src="images/2.png">
            <a href="#"><i class="material-icons dp48 app-wishlist-icon">favorite_border</i></a>
          </div>
          <div class="porducts-title">
            <h6 class="black-text truncate">BEATS Wireless Headphones</h6>
            <h5 class="green-text">$14.86</h5>
            <h6 class="grey-text">$14.86 <span class="black-text">(Save 10%)</span></h6>
            <a>Add a shopping list</a>
          </div>
        </div>
      </div>
    </div>
   </div>
  <hr class="app-hr">
   <div class="wrap-padding porducts-list">
      <div class="section col-3-grid">
        <div class="row">
          <div class="col s12 m12 l12 left-align">
            <h5>Deals Near By</h5>
          </div>
          <div class="col s6 m4 l4">
            <div class="porducts-grid center">
              <img src="images/2.png">
            </div>
            <div class="porducts-title col s8 m8 l8">
              <h6 class="black-text truncate">Convallis Furniture</h6>
              <h6 class="green-text">$50</h6>
            </div>
            <div class="wishlist-icon col s4 m4 l4 right-align">
               <a href="#"><i class="material-icons dp48">favorite_border</i></a>
            </div>
          </div>
          <div class="col s6 m4 l4">
            <div class="porducts-grid center">
              <img src="images/2.png">
            </div>
            <div class="porducts-title col s8 m8 l8">
              <h6 class="black-text truncate">Convallis Furniture</h6>
              <h6 class="green-text">$50</h6>
            </div>
            <div class="wishlist-icon col s4 m4 l4 right-align">
               <a href="#"><i class="material-icons dp48">favorite_border</i></a>
            </div>
          </div>
          <div class="col s6 m4 l4">
            <div class="porducts-grid center">
              <img src="images/2.png">
            </div>
            <div class="porducts-title col s8 m8 l8">
              <h6 class="black-text truncate">Convallis Furniture</h6>
              <h6 class="green-text">$50</h6>
            </div>
            <div class="wishlist-icon col s4 m4 l4 right-align">
               <a href="#"><i class="material-icons dp48">favorite_border</i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s6 m6 left-align">
            <h6 class="red-text">Show more</h6>
          </div>
          <div class="col s6 m6 right-align">
            <i class="material-icons dp48 red-text">chevron_right</i>
          </div>
        </div>
      </div>
   </div>
  <hr class="app-hr">
   <div class="wrap-padding porducts-list">
      <div class="section col-3-grid">
        <div class="row">
          <div class="col s12 m12 l12 left-align">
            <h5>Find Tech Gift</h5>
          </div>
          <div class="col s6 m4 l4">
            <div class="porducts-grid center">
              <img src="images/2.png">
            </div>
            <div class="porducts-title col s8 m8 l8">
              <h6 class="black-text truncate">Convallis Furniture</h6>
              <h6 class="green-text">$50</h6>
            </div>
            <div class="wishlist-icon col s4 m4 l4 right-align">
               <a href="#"><i class="material-icons dp48">favorite_border</i></a>
            </div>
          </div>
          <div class="col s6 m4 l4">
            <div class="porducts-grid center">
              <img src="images/2.png">
            </div>
            <div class="porducts-title col s8 m8 l8">
              <h6 class="black-text truncate">Convallis Furniture</h6>
              <h6 class="green-text">$50</h6>
            </div>
            <div class="wishlist-icon col s4 m4 l4 right-align">
               <a href="#"><i class="material-icons dp48">favorite_border</i></a>
            </div>
          </div>
          <div class="col s6 m4 l4">
            <div class="porducts-grid center">
              <img src="images/2.png">
            </div>
            <div class="porducts-title col s8 m8 l8">
              <h6 class="black-text truncate">Convallis Furniture</h6>
              <h6 class="green-text">$50</h6>
            </div>
            <div class="wishlist-icon col s4 m4 l4 right-align">
               <a href="#"><i class="material-icons dp48">favorite_border</i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s6 m6 left-align">
            <h6 class="red-text ">Show more</h6>
          </div>
          <div class="col s6 m6 right-align">
            <i class="material-icons dp48 red-text">chevron_right</i>
          </div>
        </div>
      </div>
   </div>
  <hr class="app-hr">
  <div class="wrap-padding porducts-list">
      <div class="section col-3-grid">
        <div class="row">
          <div class="col s12 m12 l12 left-align">
            <h5>Viewed Items</h5>
          </div>
          <div class="col s6 m4 l4">
            <div class="porducts-grid center">
              <img src="images/2.png">
            </div>
            <div class="porducts-title col s8 m8 l8">
              <h6 class="black-text truncate">Convallis Furniture</h6>
              <h6 class="green-text">$50</h6>
            </div>
            <div class="wishlist-icon col s4 m4 l4 right-align">
               <a href="#"><i class="material-icons dp48">favorite_border</i></a>
            </div>
          </div>
          <div class="col s6 m4 l4">
            <div class="porducts-grid center">
              <img src="images/2.png">
            </div>
            <div class="porducts-title col s8 m8 l8">
              <h6 class="black-text truncate">Convallis Furniture</h6>
              <h6 class="green-text">$50</h6>
            </div>
            <div class="wishlist-icon col s4 m4 l4 right-align">
               <a href="#"><i class="material-icons dp48">favorite_border</i></a>
            </div>
          </div>
          <div class="col s6 m4 l4">
            <div class="porducts-grid center">
              <img src="images/2.png">
            </div>
            <div class="porducts-title col s8 m8 l8">
              <h6 class="black-text truncate">Convallis Furniture</h6>
              <h6 class="green-text">$50</h6>
            </div>
            <div class="wishlist-icon col s4 m4 l4 right-align">
               <a href="#"><i class="material-icons dp48">favorite_border</i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s6 m6 left-align">
            <h6 class="red-text">Show more</h6>
          </div>
          <div class="col s6 m6 right-align">
            <i class="material-icons dp48 red-text">chevron_right</i>
          </div>
        </div>
      </div>
   </div>

</div>

  <!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <script type="text/javascript">
    $('.sign-in-btn').click(function() {
      $('.sign-in-btn').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Sign in').addClass('disabled');
    });
  </script>

  </body>
</html>
