<div id="tabernacle-container" class="scrollspy">
	<div class="relative-block">
	           <div class="row absolute-block mg-width-100-perc" style="top:0;left:0;z-index: 1;">
			        <div class="col s12 m6 l6">
			          <div class="card none-box-shadow mg-margin-top-200" style="background-color:rgba(245, 245, 245, 1) !important;">
			            <div class="card-content white-text">
			              <span class="card-title mg-bold mg_prim_color mg-size-35">Tabernacle de Gloire et d'Alliance</span>
			              <p class="mg_sec_color_1 mg-size-18 mg-semi">Une Eglise Evangélique vous ouvre ses portes à Reims.</p>
			            </div>
			            <div class="card-action" style="border-top:1px solid #e7cf65;">
			              <a href="#joinus" class="btn mg_prim_background mg-margin-right-20 mg-semi">Je suis nouveau</a>
			              <a href="#" class="btn mg_sec_background_1 mg-semi mg_prim_color">Le programme</a>
			            </div>
			          </div>
			        </div>
	           	</div>
		      <div class="parallax carrousel-container ">
	           <div class="mg-height-650">
	               <?= $this->Html->image('screenshot1.jpg',['style'=>'bottom:-100px !important;']) ?>
	           </div>
	            <div class="mg-height-650">
	               <?= $this->Html->image('screenshot3.jpg') ?>
	            </div> 
	           <div class="mg-height-650">
	               <?= $this->Html->image('sec.jpg') ?>
	            </div> 	
	       </div>
	</div>


	<!-- A l'Affiche  -->
	<div class="row center grey lighten-4 mg-padding-top-40 mg-padding-bottom-40">
		<div class="container">
			<div class="col s6">
		        <?= $this->Html->image('assets/chandelier-vector-purple.png',['class'=>'mg-width-55 left mg-margin-right-10']) ?>
				<h5 class="uppercase mg_prim_color mg-semi mg-margin-left-10 left-align">à l'affiche</h5>
				<div class="divider"></div>
				<h4 class="uppercase mg_prim_color mg-bold mg-padding-top-10 left-align" style="clear:both;">3 jours de transformation</h4>
			</div>
			<div class="col s6 left-align">
				<p class="left-align mg-regular">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi corporis, perspiciatis explicabo porro cum, incidunt! Rem praesentium voluptas, sapiente atque, quae corrupti magni nesciunt veritatis inventore minima. Commodi, blanditiis vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum incidunt ipsum aperiam molestiae quisquam, laboriosam quis. Ipsa beatae alias quos accusantium mollitia nostrum rerum voluptatibus maxime harum, eos at eum.
				</p>
				
				<a data-target='prime_event_modal' modal class="mg-margin-top-20 btn mg_prim_background white-text hoverable mg-semi">En Savoir Plus</a>
			</div>
		</div>
	</div>

	<!-- Prime Event Modal -->
	<div id="prime_event_modal" class="modal">
				    <div class="modal-content">
				        <?= $this->Html->image('assets/chandelier-vector-purple.png',['class'=>'mg-width-45 left mg-margin-right-10']) ?>
						<h6 class="uppercase mg_prim_color mg-semi left-align">à l'affiche</h6>
						<div class="divider"></div>
						
						<div class="row mg-margin-top-10">
							<div class="col s12 l5 m5">
							    <h5 class="mg_prim_color mg-bold mg-padding-top-10 left-align" style="clear: both;">3 Jours de Transformation</h5>
							    <h6 class="mg_sec_color_1 mg-semi-italic left-align">Invités: Bishop Philippe KOTI</h6>
							    <h6 class="mg_sec_color_1 mg-semi-italic left-align">Hote: Ev.Rachel</h6>
							</div>
							<div class="col s12 l6 m6">
								<?= $this->Html->image('events/mock-event.jpg',['style'=>'width:100%;']) ?>
							</div>
						</div>
					<div class="row">
					    <div class="col s12 l11 m11 offset-l1 offset-m1">
							<p class="mg-regular">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consequatur ex laborum quam dignissimos, omnis explicabo atque quis aut et vitae tempora corporis quod ad doloremque aspernatur autem ab a.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consequatur ex laborum quam dignissimos, omnis explicabo atque quis aut et vitae tempora corporis quod ad doloremque aspernatur autem ab a.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consequatur ex laborum quam dignissimos, omnis explicabo atque quis aut et vitae tempora corporis quod ad doloremque aspernatur autem ab a.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consequatur ex laborum quam dignissimos, omnis explicabo atque quis aut et vitae tempora corporis quod ad doloremque aspernatur autem ab a.
							</p>
					    </div>
					</div>


				    </div>
				    <div class="modal-footer mg_prim_background">
				        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat white-text mg-semi">Fermer</a>
				    </div>
	</div>

	<?= $this->element('description') ?>

	<?= $this->element('ministere') ?>


	
</div>
