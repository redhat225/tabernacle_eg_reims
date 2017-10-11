<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Tabernacle de gloire et d\'alliance - Eglise';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('favicon.png','/img/favicon.png',['type'=>'icon']) ?>

    <?= $this->fetch('meta') ?>
    <!-- Third Party dependencies -->
    <?= $this->Html->css('../bower_components/materialize/dist/css/materialize.min') ?>
    <!-- Custom Css goes here -->
    <?= $this->Html->css('main') ?>
    <?= $this->Html->css('ionicons-2.0.1/css/ionicons.min') ?>
    <?= $this->Html->css('../bower_components/hover/css/hover-min') ?>
    <?= $this->Html->css('../bower_components/slick-carousel/slick/slick') ?>
    <?= $this->Html->css('../bower_components/slick-carousel/slick/slick-theme') ?>
    <?= $this->Html->css('../bower_components/aos/dist/aos') ?>

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <?= $this->fetch('css') ?>

    <?= $this->Html->script('jquery.js') ?>

    <?= $this->Html->script('../bower_components/angular/angular.min') ?>
    <?= $this->Html->script('../bower_components/materialize/dist/js/materialize.min') ?>

    <?= $this->Html->script('../bower_components/angular/angular-materialize.min') ?>
    <?= $this->Html->script('../bower_components/angular/angular-ui-router.min') ?>

    <?= $this->Html->script('../bower_components/slick-carousel/slick/slick') ?>
    <?= $this->Html->script('../bower_components/aos/dist/aos') ?>
    <?= $this->Html->script('../node_modules/shave/dist/shave') ?>

    <base href="/">
</head>

<style>
   body{
      font-family: 'mg-regular','Helvetica';
   }
</style>

<body ng-app="tabernacle-app">
     <div class="top-navbar-container navbar-fixed">
        <nav class="white" ng-hide="$root.preloader||$root.navbar_invisible" style="background:url('/img/assets/bar.png') no-repeat;">
            <div class="nav-wrapper">

              <a href="#" class="brand-logo mg-padding-left-10 hide-on-med-and-down" style="z-index: 10;"><?= $this->Html->image('assets/tabernacle_logo_2.png',['class'=>'original-logo']) ?></a>

              <a href="#" class="brand-logo hide-on-large-only" style="z-index: 10;"><?= $this->Html->image('assets/tabernacle_logo_2.png',['class'=>'mg-width-75']) ?></a>

              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="ion-android-menu mg-size-33 mg_sec_color_1"></i></a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#tabernacle-container" class="mg-bold mg_prim_color navbar-link">Entrez dans le tabernacle</a></li>
                    <li><a href="#program-container" class="mg-bold mg_prim_color navbar-link">Programme</a></li>
                    <li><a href="#galerie-container" class="mg-bold mg_prim_color navbar-link">Galerie</a></li>

                    <li><a href="#formation-container" class="mg-bold mg_prim_color navbar-link">Formation</a></li>
                    <li><a href="#cbw-container" class="mg-bold mg_prim_color navbar-link">CBW</a></li>
                    <li><a href="#donate-container" class="mg-bold mg_prim_background white-text">Faire un don</a></li>
                    <li><a href="#!" class="mg-bold mg_sec_background_1 mg_prim_color" ui-sref="app.contact">Contact</a></li>
                  </ul>

                  <!-- Side Nav -->
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="">
                            <?= $this->Html->image('assets/tabernacle_logo.png',['class'=>'mg-width-125 mg-margin-left-30 mg-padding-top-10']) ?>
                        </a></li>
                        <li class="mg-margin-top-105"><a href="#tabernacle-container" class="mg-bold mg_prim_color navbar-link side-nav-link">Entrez dans le tabernacle</a></li>
                        <li><a href="#program-container" class="mg-bold mg_prim_color navbar-link side-nav-link">Programme</a></li>
                        <li><a href="#galerie-container" class="mg-bold mg_prim_color navbar-link side-nav-link">Galerie</a></li>

                        <li><a href="#formation-container" class="mg-bold mg_prim_color navbar-link side-nav-link">Formation</a></li>
                        <li><a href="#cbw-container" class="mg-bold mg_prim_color navbar-link side-nav-link">CBW</a></li>

                        <li><a href="#!" class="mg-bold mg_prim_color">Faire un don</a></li>
                        <li><a class="mg-bold mg_prim_color" ui-sref="app.contact">Contact</a></li>

                        <li class="mg_prim_background"><a href="https://web.facebook.com/tabernacle.ga" target="_blank" class="mg-semi mg_sec_color_1"><i class="ion-social-facebook mg-margin-right-1 mg_sec_color_1"></i> /tabernacle.ga</a></li>
                          <li ><a href="#!" class="mg-semi mg_prim_color"><i class="ion-email mg-margin-right-1 mg_prim_color"></i> /contact@eglise-reims.fr</a></li>
                        <li class="mg_sec_background_1"><a href="#!" class="mg-semi mg_prim_color"><i class="ion-android-phone-portrait mg-margin-right-1 mg_prim_color"></i> /07-68-20-91-59</a></li>
                  </ul>
            </div>
          </nav>
    </div>
    <!-- Main ui-view -->
    <div ng-hide="$root.preloader" ui-view></div>
    <!-- Newsletter -->
    <div ng-hide="$root.preloader" class="row center mg-margin-bottom-0" ui-view="newsletter"></div>
    <!-- Footer -->
    <div ng-hide="$root.preloader" ui-view="footer"></div> 
    
    <div ng-show="$root.preloader" class="row center" style="position:relative; margin-top: 10%;">
          <?= $this->Html->image('assets/tabernacle_logo.png',['style'=>'width:145px;']) ?>
              <div class="container">
                <div class="container">
                      <h6 class="mg-bold mg_prim_color mg-margin-bottom-20"><i>Une maison de prière pour tous où chacun se sent chez soi</i> </h6>
                     <div class="progress mg_prim_background">
                        <div class="indeterminate mg_sec_background_1"></div>
                     </div>
                </div>
              </div>

          </div>
    </div>

    <!-- Front-Modal-Box Event -->
    <?= $this->element('modal-event') ?>


    <?= $this->Html->script('Red/app') ?>
    <?= $this->Html->script('Red/controllers') ?>
    <?= $this->Html->script('Red/services') ?>

    <script>
        $(window).on('scroll', function(){
                var $scroll_value = $(window).scrollTop();
                var $navbar = $('.top-navbar-container');

                if($scroll_value>=695)
                    $('.brand-logo img',$navbar).removeClass('original-logo').addClass('small-logo');
                else
                    $('.brand-logo img',$navbar).removeClass('small-logo').addClass('original-logo');

            });
        AOS.init();
    </script>
</body>
</html>
