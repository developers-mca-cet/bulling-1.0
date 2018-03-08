<!doctype html>
<!--
  Website name : KTU Billing Soft
  Webpage name : Admin(CA)
  Author : Sashwat K
  Edited by: 
  File name : admin_ca.php
  Created On : 01/02/2018 04:11:35 PM
  Revision : 1
  Repository used : Google material design
  Things Done:-
  
  Things Pending:-
  
-->
<html lang="en">
<head>
	 <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>Admin(CA)</title>
	<!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="../styles.css">
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
	.demo-card-wide.mdl-card {
  		width: 512px;
	}
	.demo-card-wide > .mdl-card__title {
  		color: #fff;
  		height: 176px;
  		background: url('../images/bg_1024.jpg') center / cover;
	}
	.demo-card-wide > .mdl-card__menu {
  		color: #fff;
	}
	</style>
</head>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="../images/logo.png">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="../images/logo.png">
          </span>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item">About Us</li>
          </ul>
        </div>
		</div>
	</div>
	<center>
		<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  			<div class="mdl-card__title">
    			<h2 class="mdl-card__title-text">Welcome</h2>
  			</div>
  		<div class="mdl-card__supporting-text">
    		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    		Mauris sagittis pellentesque lacus eleifend lacinia...
  		</div>
  		<div class="mdl-card__actions mdl-card--border">
    		<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      			Get Started
    		</a>
  		</div>
  		<div class="mdl-card__menu">
    		<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      			<i class="material-icons">share</i>
    		</button>
  		</div>
		</div>
	</center>
	<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>