<?php 
  include_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>contact</title>

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
            Contact
         </div>
         <div class="col s4 m4 right-align">
            <i class="material-icons dp48">notifications_none</i>
         </div>
      </div>
   </div>
  <div class="wrap-padding">
     <div class="section feedback-box center">
        <div class="card">
          <div class="card-content">
           <h3>How was the app?</h3>
           &nbsp;
           <h5 class="grey-text">Your feedback will help improve<br> our experiennce</h5>
           <br>
           <img src="images/rating.png" width="200">
          </div>
        </div>
        <h5 class="text-or">OR</h5>
     </div>

     <div class="section">
      <div class="row">
          <form class="col s12" method="post">
            <div class="card">
                <?php echo $message; ?>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="name" type="text" class="validate" name="username">
                <label for="name">Name</label>
                <div class="errorTxt4">
                  <div class="error">
                    <?php
                      if(!empty($namevalidate)){
                        echo $namevalidate;
                      } 
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate" name="email">
                <label for="email">Email</label>
                <div class="errorTxt4">
                  <div class="error">
                    <?php
                      if(!empty($emailvalidate)){
                        echo $emailvalidate;
                      } 
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="phoneNumber" type="tel" class="validate" name="phoneNumber">
                <label for="phoneNumber">Contact Number</label>
                <div class="errorTxt4">
                  <div class="error">
                    <?php
                      if(!empty($phoneNumbervalidate)){
                        echo $phoneNumbervalidate;
                      } 
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea" class="materialize-textarea" name="feedback"></textarea>
                <label for="textarea">Feedback/Suggestion/Complaint</label>
                <div class="errorTxt4">
                  <div class="error">
                    <?php
                      if(!empty($feedbackvalidate)){
                        echo $feedbackvalidate;
                      } 
                    ?>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row center"> 
              <button class="btn waves-effect waves-light btn-large sign-in-btn" type="submit" name="action">Sign in</button>
            </div>
          </form>
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
