<!-- Formation TAG -->
<div class="row mg-padding-top-40 mg-padding-bottom-40 grey lighten-4 scrollspy mg-margin-bottom-0" id="predication-container">
     <div class="container">
		  <?= $this->Html->image('assets/chandelier-vector-purple.png',['class'=>'mg-width-55 left mg-margin-right-10']) ?>
	      <h5 class="uppercase mg_prim_color mg-semi">Prédications</h5>
		           <div class="divider"></div>
	      <h4 class="uppercase mg_prim_color mg-bold mg-padding-top-10" style="clear: both;">Tabernacle de gloire</h4>
	      <h4 class="uppercase mg_prim_color mg-bold">Et d'alliance</h4>
	</div>

	<div class="container mg-margin-top-30">
		<div class="row">
			
			<div class="col l12 m12 s12" id="current-predication-video-container">

			</div>

		    <div class="col l12 m12 s12 video-predication-slick-container mg-margin-top-10">

			  		    <div class="relative-block" style="border:2px solid white;">
				  		    <div class="absolute-block is_video block-player player-icon-predication" data-tooltip="lire la vidéo" video-attr="//www.youtube.com/embed/_VLpx_oTfNA?autoplay=1" style="top: 0px;left: 0px;width: 100%;height: 100%; z-index: 1;">
				  		    </div>

			  		       <div class="video-container">
					        <iframe width="100%" height="100%" src="//www.youtube.com/embed/_VLpx_oTfNA?rel=0" frameborder="0" allowfullscreen></iframe>
					      </div>
			  		    </div>
		  </div>

		</div>
	</div>

</div>

<script>
$('.tooltipped').tooltip();

	first_player = true;

	$('.player-icon-predication').bind('click', function(){

		if($(this).hasClass('playing'))
		{
			Materialize.toast('Vidéo en cours de lecture',4000,'mg_prim_background white-text');
		}
		else
		{
			if(first_player)
			{
			    var attr = "//www.youtube.com/embed/_VLpx_oTfNA?rel=0";
			    first_player = false;
			}
			else
				var attr = $(this).attr('video-attr');

	        var video_element = $('<iframe width="853" height="480" frameborder="0" allowfullscreen></iframe>').attr('src',attr);
			var video_container = $('<div class="video-container"></div>');

			$('.player-icon-predication').removeClass('playing');
			$(this).addClass('playing');

			$('#current-predication-video-container').empty();
			video_container.append(video_element).appendTo('#current-predication-video-container');
		}

	});

	$('.player-icon-predication:eq(0)').trigger('click');

</script>
