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
    <?= $this->Html->css('../bower_components/slick-carousel/slick/slick'.css) ?>
    <?= $this->Html->css('../bower_components/slick-carousel/slick/slick-theme.css') ?>




    <?= $this->fetch('css') ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

    <?= $this->Html->script('../bower_components/angular/angular.min') ?>
    <?= $this->Html->script('../bower_components/materialize/dist/js/materialize.min') ?>

    <?= $this->Html->script('../bower_components/angular/angular-materialize.min') ?>
    <?= $this->Html->script('../bower_components/angular/angular-ui-router.min') ?>

    <?= $this->Html->script('../bower_components/slick-carousel/slick/slick.js') ?>

</head>
<body>
   <div class="row center position-absolute" style="width: 100%;position: absolute; z-index: 1000;">
        <p>      
          <a href="#" class="brand-logo">
        <?= $this->Html->image('assets/tabernacle_logo_2.png',['class'=>'mg-width-125 mg-margin-left-30 mg-padding-top-10']) ?>
         </a>
        </p>
    <div class="row center">
      <ul>
        <li><a href="sass.html" class="mg-semi mg_prim_color">Entrez dans le tabernacle</a></li>
        <li><a href="badges.html" class="mg-semi mg_prim_color">Formation</a></li>
        <li><a href="badges.html" class="mg-semi mg_prim_color">Galerie</a></li>
        <li><a href="badges.html" class="mg-semi mg_prim_color">Evènement</a></li>
        <li><a href="collapsible.html" class="mg-semi mg_prim_color">Contact</a></li>
      </ul>
    </div>
   </div>
   <div class="row center carrousel-container mg-margin-0" style="width: 100%;height: 100%;">
       <div><?= $this->Html->image('Sans-titre-1.png',['style'=>'width: 100%;height: 100%; display:block;']) ?></div>
       <div><?= $this->Html->image('screenshot-carrousel-2.jpg',['style'=>'width: 100%;height: 100%; display:block;']) ?></div>
   </div>
<script>
   $('.carrousel-container').slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          arrows:false,
          autoplay:true,
           fade: true,
  cssEase: 'linear'   
   });
</script>
</body>
</html>
