
<!-- jOIN US -->
<div class="row mg-padding-top-40 mg-padding-bottom-40 yellow darken-1 mg-margin-bottom-0" id="joinus" style="background:url('/img/j.jpg') repeat-x;">
	 <div class="container">
	    <div class="col l6 m6 s12 mg-padding-left-0">
	        <?= $this->Html->image('assets/chandelier-vector-purple.png',['class'=>'mg-width-55 left mg-margin-right-10']) ?>
			<h5 class="uppercase mg_prim_color mg-semi mg-margin-left-10">Rejoindre</h5>
			<div class="divider mg_prim_background"></div>
			<h4 class="uppercase mg_prim_color mg-bold mg-padding-top-10" style="clear:both;">Tabernacle de gloire</h4>
			<h4 class="uppercase mg_prim_color mg-bold">Et d'alliance</h4>
	 </div>
	 <div class="row center mg-padding-left-13">
		   <form name="subscribe_service_form" ng-submit="homectrl.subscribe_service(homectrl.service)">
							<div class="col s12 mg-padding-0 input-field">
							 <input type="text" ng-pattern="/^[a-zA-Z0-9_\s-]{8,100}$/" ng-model="homectrl.service.subscriber_fullname" required class="mg_prim_background white-text mg-height-60 login-input" ng-minlength="5" ng-maxlength="100" style="border-radius:2px;text-transform: uppercase;" placeholder="Nom Complet">
							</div>

						    <div class="col s12 mg-margin-0 mg-padding-0 input-field">
							 <input type="text" cleave="options.fr_number" ng-model="homectrl.service.subscriber_contact" ng-minlength="14" ng-maxlength="14" required class="mg_prim_background white-text login-input mg-height-60"   style="border-radius:2px;" placeholder="Numéro de Téléphone">
							</div>

							<div class="col s12 mg-margin-0 mg-padding-0 input-field ng-margin-bottom-30">
							 <input required type="email" ng-pattern="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9_-]+\.[a-zA-Z0-9]{2,6}$/" ng-model="homectrl.service.subscriber_email" class="mg_prim_background login-input mg-height-60" ng-maxlength="50"  name="email_subscriber" style="border-radius:2px;" placeholder="E-mail">
							</div>
							                			                           

		                   <button type="submit" ng-disabled="subscribe_service_form.$invalid || homectrl.join_service_is_running" class="btn mg_prim_background white-text bold" style="width: 100%;">Souscrire</button> 
						  
						  <h6 class="mg-size-15 white-text left-align mg-margin-top-30 sweet-hypens">
							J'accepte les conditions d'utilisation d'un formulaire de souscription de service en ligne(web), et m'engage à utiliser de façon responsable les services web de TAG en renseignant des informations correctes.
				          </h6>
            </form>
	 </div>
</div>

</div>