<!doctype html>
<!--
  Website name : KTU Billing Soft
  Webpage name : Homepage
  Author : Sashwat K
  Edited by: 
  File name : index.php
  Created On : 31/01/2018 8:56:30 PM
  Revision : 1
  Repository used : Google material design
  Things Done:-
  1. Responsive login page
  2. All input contraints met
  3. Design phase of page complete
  Things PEnding:-
  1. Include PHP code to communicate with server
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Homepage</title>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="images/logo.png">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="images/android-logo.png">
          </span>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item"><a class="mdl-js-ripple-effect" href="aboutus.php">About Us</a></li>
          </ul>
        </div>
		</div>
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center">
			<br><br>
          <div class="logo-font android-title mdl-layout-title">Log In</div>
			
          <div class="logo-font android-sub-slogan">
			  <form>
			  <table align="center" cellpadding="20px">
				  <tr>
					  <td>ID</td>
					  <td><input class="mdl-textfield__input" type="text" id="id"></td>
				  </tr>
				  <tr>
					  <td>Password</td>
					  <td><input class="mdl-textfield__input" type="password" id="pass"></td>
				  </tr>
				  <tr>
					  <td colspan="2">
						  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                           Submit
                          </button>
					  </td>
				  </tr>
			  </table>
		  </form>
			</div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
