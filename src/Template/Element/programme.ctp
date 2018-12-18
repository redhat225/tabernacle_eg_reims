
<!-- Programme TAG -->
<div class="row mg-padding-top-50 mg-padding-bottom-100 grey lighten-4 scrollspy" id="program-container">
     <div class="container">
		  <?= $this->Html->image('assets/chandelier-vector-purple.png',['class'=>'mg-width-55 left mg-margin-right-10']) ?>
	      <h5 class="uppercase mg_prim_color mg-semi">Le Programme</h5>
		           <div class="divider"></div>
	      <h4 class="uppercase mg_prim_color mg-bold mg-padding-top-10" style="clear: both;">Tabernacle de gloire</h4>
	      <h4 class="uppercase mg_prim_color mg-bold">Et d'alliance</h4>
		<!-- Events content area -->
		<div class="row center event-area mg-margin-bottom-50" ng-hide="homectrl.preloader_program">

		     <div class="col l6 m6 s12 mg-margin-top-30" ng-repeat="e in homectrl.events">
				<div class="card horizontal">
				    <div class="card-image" ng-if="!e.event_poster" style="background: #e8d061;">
				        <?= $this->Html->image('home/card_plain_element.png',['class'=>'activator']) ?>
				    </div>

					<div class="card-image" ng-if="e.event_poster" style="background: #e8d061;">
				        <img ng-src="/img/events/{{e.event_poster}}" alt="" class="activator">
				    </div>

				      <div class="card-stacked" >
				        <div class="card-content mg_prim_color mg-padding-15" style="min-height:400px;">
				          <h6 class="mg-bold left-align uppercase">{{e.event_fullname}}</h6>
				          <div class="divider yellow"></div>

				          <h6 ng-if="!e.event_end_date" class="mg-semi-italic mg_sec_color_1 left-align">Le {{e.event_begin_date | date: 'dd'}} {{e.ref_month_full}} {{e.event_begin_date | date: 'yyyy'}}</h6>

				          <h6 ng-if="e.event_end_date" class="mg-semi-italic mg_sec_color_1 left-align">A partir du {{e.event_begin_date | date: 'dd'}} {{e.ref_month_full}} {{e.event_begin_date | date: 'yyyy'}}</h6>

				          <h6 class="mg-semi-italic mg_sec_color_1 left-align">{{e.event_location}}</h6>  <br>
				          <p class="mg-regular left-align desc-mini-text-program">{{e.event_full_description | cut:true:120:' ...'}}</p>
				           <a class="btn-floating activator halfway-fab waves-effect waves-light mg_sec_background_1"><i class="ion-plus-round mg_prim_color"></i></a>
				        </div>
				      </div>
				      <div class="card-reveal mg_sec_background_1">	
					      <span class="card-title left-align mg_prim_color mg-bold">{{e.event_fullname}}<i class="ion-close right small"></i></span>
					      <p class="mg-semi left-align mg_prim_color">
					      	{{e.event_full_description}}
					      </p>
					   </div>
				 </div>
		     </div>
		</div>


		  <div class="preloader-wrapper active" ng-show="homectrl.preloader_program">
		    <div class="spinner-layer spinner-red-only mg_prim_color">
		      <div class="circle-clipper left">
		        <div class="circle"></div>
		      </div><div class="gap-patch">
		        <div class="circle"></div>
		      </div><div class="circle-clipper right">
		        <div class="circle"></div>
		      </div>
		    </div>
		  </div>
		
		<div class="row center">
			<pagination class="mg-margin-top-20"
			    page="1"
			    page-size="4"
			    total="homectrl.page_total"
			    show-prev-next="true"
			    use-simple-prev-next="false"
			    dots="...."
			    hide-if-empty="false"
			    adjacent="2"
			    scroll-top="false"
			    pagination-action="homectrl.get_program(page)" />
		</div>



		<!-- Preloader content area -->
	
	</div>
</div>

