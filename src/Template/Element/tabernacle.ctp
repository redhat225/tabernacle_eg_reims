<div id="tabernacle-container" class="scrollspy">
	<div class="relative-block">
	           <div class="row absolute-block mg-width-100-perc" style="top:0;left:0;z-index: 1;">
			        <div class="col s12 m9 l7">
			          <div class="card none-box-shadow" style="background-color:rgba(245, 245, 245, 1) !important;margin-top:25%;">
			            <div class="card-content white-text">
			              <span class="card-title mg-bold mg_prim_color mg-size-35">Tabernacle de Gloire et d'Alliance</span>
			              <p class="mg_sec_color_1 mg-size-18 mg-semi">Une Eglise Evangélique vous ouvre ses portes à Reims.</p>
			            </div>
			            <div class="card-action" style="border-top:2px solid #e7cf65;">
			              <a href="#joinus" class="btn mg_prim_background mg-semi">Je suis nouveau</a>	
			              <a href="/faith" target="_blank" class="btn mg_sec_background_1 mg-bold mg_prim_color">Profession de foi</a>
			              <a href="#program-container" class="btn mg_sec_background_1 mg-bold mg_prim_color">Le programme</a>
			            </div>
			          </div>
			        </div>
	           	</div>
			    <div class="parallax carrousel-container ">
			        <div class="mg-height-650">
		               <?= $this->Html->image('sec_1.jpg') ?>
		            </div>
		           <div class="mg-height-650">
		               <?= $this->Html->image('sec_2.jpg') ?>
		            </div>
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

	<!-- A l'Affiche preloader -->
	<div class="row mg-margin-0 mg-padding-0 grey lighten-4">
	    <div class="progress mg_prim_background" ng-hide="homectrl.hide_poster_loading">
	         <div class="indeterminate mg_sec_background_1"></div>
	    </div>
	</div>

	<!-- A l'Affiche  -->
	<div ng-show="homectrl.display_poster" class="row center mg-margin-bottom-0 grey lighten-4 mg-padding-top-40 mg-padding-bottom-40">
		<div class="container">
			<div class="col l6 m6 s12">
		        <?= $this->Html->image('assets/chandelier-vector-purple.png',['class'=>'mg-width-55 left mg-margin-right-10']) ?>
				<h5 class="uppercase mg_prim_color mg-semi mg-margin-left-10 left-align">à l'affiche</h5>
				<div class="divider"></div>
				<h4 class="uppercase mg_prim_color mg-bold mg-padding-top-10 left-align" style="clear:both;">{{homectrl.poster.event_fullname}}</h4>

				<h5 class="uppercase mg_prim_color mg-semi mg-padding-top-10 left-align" ng-if="!homectrl.poster.event_end_date">								{{homectrl.poster.event_begin_date | date:'dd'}} {{homectrl.poster.ref_month_full}} {{homectrl.poster.event_begin_date | date:'yyyy'}} à {{homectrl.poster.event_begin_date | date:'H:m'}}</h5>

				<h5 class="uppercase mg_prim_color mg-semi mg-padding-top-10 left-align" ng-if="homectrl.poster.event_end_date">à partir du {{homectrl.poster.event_begin_date | date:'dd'}} {{homectrl.poster.ref_month_full}} {{homectrl.poster.event_begin_date | date:'yyyy'}}</h5>
	

				<h5 ng-if="homectrl.poster.event_location" class="uppercase mg_prim_color mg-semi mg-padding-top-10 left-align">{{homectrl.poster.event_location}}
				</h5>

				<a data-target='prime_event_modal' modal class="mg-margin-top-10 btn mg_prim_background white-text hoverable mg-semi hide-on-small-only left">En Savoir Plus</a>

			</div>
			<div class="col l6 m6 s12 left-align" ng-if="!homectrl.poster.event_poster">
				<p class="left-align mg-regular">
					{{homectrl.poster.event_full_description | cut:true:350:' ...'}}
				</p>
			</div>

			<div class="col l6 m6 s12" ng-if="homectrl.poster.event_poster">
				<img ng-src="/webroot/img/events/burnout.jpeg" alt="" width="100%" materialboxed class="materialboxed">
			</div>

		    <a data-target='prime_event_modal' modal class="mg-margin-top-10 btn mg_prim_background white-text hoverable mg-semi hide-on-med-and-up left">En Savoir Plus</a>

		</div>
	</div>

	<!-- Cultes  -->
	<div class="row center mg_sec_background_1 mg-padding-top-40 mg-padding-bottom-40">
		<div class="container">
			<div class="col l6 m6 s12">
		        <?= $this->Html->image('assets/chandelier-vector-purple.png',['class'=>'mg-width-55 left mg-margin-right-10']) ?>
				<h5 class="uppercase mg_prim_color mg-semi mg-margin-left-10 left-align">Les Cultes</h5>
				<div class="divider mg_prim_background"></div>
				<h4 class="uppercase mg_prim_color mg-bold mg-padding-top-5 left-align" style="clear:both;">Tabernacle de gloire</h4>
				<h4 class="uppercase mg_prim_color mg-bold left-align">Et d'alliance</h4>
				<h5 class="uppercase mg_prim_color mg-semi mg-padding-top-5 left-align">Dimanche 10-12h</h5>
				<h5 class="uppercase mg_prim_color mg-semi mg-padding-top-5 left-align">Vendredi 18h30-20h</h5>
				<h5 class="uppercase mg_prim_color mg-semi mg-padding-top-5 left-align">Lundi culte en ligne tel: 0755500416 code :673223</h5>
				<h5 class="uppercase mg_prim_color mg-semi mg-padding-top-5 left-align">Ecoutes spirituelles sur RDV le vendredi au 07-68-20-91-59</h5>


			</div>
			<div class="col l6 m6 s12 left-align">
				<p class="left-align mg-regular">Le Culte au sein du tabernacle est un moment fort de ressourcement dans la présence du Seigneur Jesus Christ.Au programme , Louange Adoration; Enseignement, Priere, Délivrance/Libération, Restauration, Partage et rencontre, Ecole du dimanche.Ouvert à tous il vous permettra de rendre grâce au Seigneur dans la joie et la bonne humeur d’une famille chrétienne à votre écoute.
				</p>
				
				<a href="#joinus" class="btn mg_prim_background white-text hoverable mg-semi">Je suis nouveau</a>
			</div>
		</div>
	</div>


	<!-- Prime Event Modal -->
	<div id="prime_event_modal" class="modal" ng-show="homectrl.display_poster">
				    <div class="modal-content">
				        <?= $this->Html->image('assets/chandelier-vector-purple.png',['class'=>'mg-width-45 left mg-margin-right-10']) ?>
						<h6 class="uppercase mg_prim_color mg-semi left-align">à l'affiche</h6>
						<div class="divider"></div>
						
						<div class="row mg-margin-top-10">
							<div class="col s12 l5 m7 mg-padding-left-0">
							    <h5 class="mg_prim_color mg-bold mg-padding-top-10 left-align" style="clear: both;">{{homectrl.poster.event_fullname}}</h5>

								<h6 class="uppercase mg_prim_color mg-semi mg-padding-top-10 left-align" ng-if="!homectrl.poster.event_end_date">								{{homectrl.poster.event_begin_date | date:'dd'}} {{homectrl.poster.ref_month_full}} {{homectrl.poster.event_begin_date | date:'yyyy'}} à {{homectrl.poster.event_begin_date | date:'H:m'}}</h6>

								<h6 class="uppercase mg_prim_color mg-semi mg-padding-top-10 left-align" ng-if="homectrl.poster.event_end_date">à partir du {{homectrl.poster.event_begin_date | date:'dd'}} {{homectrl.poster.ref_month_full}} {{homectrl.poster.event_begin_date | date:'yyyy'}}</h6>

								<h6 ng-if="homectrl.poster.event_location" class="uppercase mg_prim_color mg-semi mg-padding-top-10 left-align">{{homectrl.poster.event_location}}
								</h6>
							</div>


						</div>
					<div class="row">
					    <div class="col s12 l11 m11 offset-l1 offset-m1 mg-padding-0">
							<p class="mg-regular mg-margin-top-0">
								{{homectrl.poster.event_full_description}}
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