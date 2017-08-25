<nav class="absolute-block" style="background: rgba(0, 0, 0, 0.07) !important;box-shadow: none !important;">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">
      	<?= $this->Html->image('assets/tabernacle_logo',['class'=>'mg-width-125 mg-margin-left-30 mg-padding-top-10']) ?>
      </a>
       <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="ion-android-menu mg-size-33 yellow-text"></i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html" class="mg-semi yellow-text">Entrez dans le tabernacle</a></li>
        <li><a href="badges.html" class="mg-semi yellow-text">Formation</a></li>
        <li><a href="badges.html" class="mg-semi yellow-text">Galerie</a></li>
        <li><a href="badges.html" class="mg-semi yellow-text">Evènement</a></li>
        <li><a href="collapsible.html" class="mg-semi yellow-text">Contact</a></li>
      </ul>

      <ul class="side-nav" id="mobile-demo">
        <li><a href="">
        	<?= $this->Html->image('assets/tabernacle_logo',['class'=>'mg-width-125 mg-margin-left-30 mg-padding-top-10']) ?>
        </a></li>
        <li class="mg-margin-top-105"><a href="sass.html" class="mg-bold mg_prim_color">Entrez dans le tabernacle</a></li>
        <li><a href="badges.html" class="mg-bold mg_prim_color">Formation</a></li>
        <li><a href="badges.html" class="mg-bold mg_prim_color">Galerie</a></li>
        <li><a href="badges.html" class="mg-bold mg_prim_color">Evènement</a></li>
        <li class="mg-margin-bottom-15"><a href="collapsible.html" class="mg-bold mg_prim_color">Contact</a></li>

        <li class="mg_prim_background"><a href="https://web.facebook.com/tabernacle.ga" target="_blank" class="mg-semi mg_sec_color_1"><i class="ion-social-facebook mg-margin-right-1 mg_sec_color_1"></i> /tabernacle.ga</a></li>
          <li ><a href="#!" class="mg-semi mg_prim_color"><i class="ion-email mg-margin-right-1 mg_prim_color"></i> /contact@eglise-reims.fr</a></li>
        <li class="mg_sec_background_1"><a href="#!" class="mg-semi mg_prim_color"><i class="ion-android-phone-portrait mg-margin-right-1 mg_prim_color"></i> /07-68-20-91-59</a></li>
      </ul>
    </div>
  </nav>

  <script>
  	    $(".button-collapse").sideNav();
  </script>