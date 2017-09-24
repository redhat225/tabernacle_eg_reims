  <footer class="page-footer grey darken-3" ng-hide="$root.navbar_invisible">
          <div class="container">
            <div class="row">
              
              <div class="col l2 s12 m12 mg-padding-left-0">
                <?= $this->Html->image('assets/tabernacle_logo_2.png',['class'=>'mg-width-110'])  ?>
              </div>
      
              <div class="col l3 s12 m12 mg-padding-left-0">
                <h5 class="white-text mg-regular">Menu</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#tabernacle-container">Entrez dans le tabernacle</a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#program-container">Programme</a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#galerie-container">Galerie</a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#formation-container">Formation</a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#!">Faire un don</a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" ui-sref="app.contact">Contact</a></li>
                </ul>
              </div>

              <div class="col l4 s12 m12 mg-padding-left-0">
                <h5 class="white-text">Adresse</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#!">5 Rue du colonel Fabien</a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#!">51100 Reims </a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#!">France</a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#!">Contact: 07-68-20-91-59</a></li>
                </ul>
              </div>

              <div class="col l3 s12 m12 mg-padding-left-0">
                <h5 class="white-text mg-regular">Restons connectés</h5>
                <ul>
                  <li>
                      <a href="https://web.facebook.com/tabernacle.ga" target="_blank" class="mg-semi mg_sec_color_1 mg-margin-right-10 left">
                      <?= $this->Html->image('social-facebook.png',['class'=>'mg-width-45']) ?>
                      </a>
                  </li>
                   <li>
                      <a href="https://web.facebook.com/tabernacle.ga" target="_blank" class="mg-semi mg_sec_color_1"><?= $this->Html->image('social-mail.png',['class'=>'mg-width-45']) ?></a>
                   </li>
                </ul>
              </div>
            </div>

            <div class="row">
              <div class="col l4 s12 m12 mg-padding-left-0">
                <span class="mg-semi white-text">Restez connecté à l'église du tabernacle de gloire et d'alliance</span>
              </div>
              <div class="col l6 s12 m6 mg-margin-top-0 input-field contrast-input mg-padding-0 mg-padding-left-0">
                    <input type="email" placeholder="Newsletter" ng-model="contact.email" ng-pattern="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-z]{2,8}$/">
              </div>
              <div class="col l2 s12 m6 mg-margin-top-0 mg-padding-left-0">
                   <a href="" class="btn mg-height-46 yellow darken-2 white-text mg-padding-top-5">Soumettre</a>
              </div>
            </div>
            
          </div>
          <div class="footer-copyright mg_prim_background">
            <div class="container">
            © 2017 TGA - Tous droits réservés
            <a href="https://www.riehl-emmanuel.xyz" id="heartbeat" class="grey-text text-lighten-4 right" href="#!">Made With <strong id="heart">❤️</strong> By Red 
           </a>

            </div>
          </div>
        </footer>

<script>
  $(document).ready(function(){
      $('#heartbeat').hover(function(){
          $('#heart',this).empty().append('💓');
      }, function(){  
          $('#heart',this).empty().append('❤️');
      });
  });
</script>