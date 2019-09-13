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
            <i class="material-icons dp48">dehaze</i>
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
