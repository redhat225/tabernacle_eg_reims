  <footer class="page-footer grey darken-3">
          <div class="container">
            <div class="row">
              
              <div class="col l2">
                <?= $this->Html->image('assets/tabernacle_logo_2.png',['class'=>'mg-width-110'])  ?>
              </div>
      
              <div class="col l3">
                <h5 class="white-text mg-regular">Menu</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#!">Entrez dans le tabernacle</a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#!">Formation</a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#!">Galerie</a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#!">Programme</a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#!">Contact</a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#!">Faire un don</a></li>
                </ul>
              </div>


              <div class="col l4">
                <h5 class="white-text">Adresse</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#!">5 Rue du colonel Fabien</a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#!">Arret Tram Comedie</a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#!">51100 Reims </a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#!">France</a></li>
                  <li><a class="grey-text text-lighten-3 mg-regular" href="#!">Contact: 07-68-20-91-59</a></li>
                </ul>
              </div>

              <div class="col l3">
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
              <div class="col l4">
                <span class="mg-semi white-text">Restez connecté à l'église du tabernacle de gloire et d'alliance</span>
              </div>
              <div class="col l6 mg-margin-top-0 input-field contrast-input mg-padding-0">
                    <input type="email" placeholder="E-Mail" ng-model="contact.email" ng-pattern="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-z]{2,8}$/">
              </div>

              <div class="col l2 mg-margin-top-0">
                   <a href="" class="btn mg-height-45 yellow darken-2 white-text mg-padding-top-5">Soumettre</a>
              </div>
            </div>
          </div>
          <div class="footer-copyright mg_prim_background">
            <div class="container">
            © 2017 TAG - Tous droits réservés
            <a href="https://www.riehl-emmanuel.xyz" class="grey-text text-lighten-4 right" href="#!">Made With ❤️ By Red 
           </a>

            </div>
          </div>
        </footer>