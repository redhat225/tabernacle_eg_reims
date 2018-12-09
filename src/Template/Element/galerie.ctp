<div class="row scrollspy mg-padding-top-40 mg-padding-bottom-40" id="galerie-container">
     <div class="container">
		  <?= $this->Html->image('assets/chandelier-vector-purple.png',['class'=>'mg-width-55 left mg-margin-right-10']) ?>
	      <h5 class="uppercase mg_prim_color mg-semi">Galerie</h5>
		           <div class="divider"></div>
	      <h4 class="uppercase mg_prim_color mg-bold mg-padding-top-10" style="clear: both;">Tabernacle de gloire</h4>
	      <h4 class="uppercase mg_prim_color mg-bold">Et d'alliance</h4>

		  <!-- Pics Area -->
		   <div class="container-img-1">
		  		<div class="mg-margin-right-60"><?= $this->Html->image('carrousel_home/gal-5.jpg',['style'=>'width:130%;']) ?></div>
		  		<div class="mg-margin-right-60"><?= $this->Html->image('carrousel_home/gal-4.jpg',['style'=>'width:130%;']) ?></div>
		  		<div class="mg-margin-right-60"><?= $this->Html->image('carrousel_home/gal-2.jpg',['style'=>'width:130%;']) ?></div>
		  		<div class="mg-margin-right-60"><?= $this->Html->image('carrousel_home/p.jpg',['style'=>'width:130%;']) ?></div>
		  		<div class="mg-margin-right-60"><?= $this->Html->image('carrousel_home/o.jpg',['style'=>'width:130%;']) ?></div>
		  		<div class="mg-margin-right-60"><?= $this->Html->image('carrousel_home/n.jpg',['style'=>'width:130%;']) ?></div>
		  		<div class="mg-margin-right-60"><?= $this->Html->image('carrousel_home/gal-6.jpg',['style'=>'width:130%;']) ?></div>
		  </div>

		   <div class="container-img-2 mg-margin-top-10">
		   	    <div class="mg-margin-right-60"><?= $this->Html->image('carrousel_home/3.jpg',['style'=>'width:130%;']) ?></div>
		  		<div class="mg-margin-right-60"><?= $this->Html->image('carrousel_home/2.jpg',['style'=>'width:130%;']) ?></div>
		  		<div class="mg-margin-right-60"><?= $this->Html->image('carrousel_home/j.jpg',['style'=>'width:130%;']) ?></div>
		  		<div class="mg-margin-right-60"><?= $this->Html->image('carrousel_home/5.jpg',['style'=>'width:130%;']) ?></div>
		  		<div class="mg-margin-right-60"><?= $this->Html->image('carrousel_home/6.jpg',['style'=>'width:130%;']) ?></div>
		  		<div class="mg-margin-right-60"><?= $this->Html->image('carrousel_home/1.jpg',['style'=>'width:130%;']) ?></div>
		  		<div class="mg-margin-right-60"><?= $this->Html->image('carrousel_home/o.jpg',['style'=>'width:130%;']) ?></div>

		  </div>
	</div>

	<div class="container mg-margin-top-30">
		<div class="row">
			
			<div class="col l12 m12 s12" id="current-video-container">

			</div>

		    <div class="col l12 m12 s12 video-slick-container mg-margin-top-10">

			  		    <div class="relative-block" style="border:2px solid white;">
				  		    <div class="absolute-block is_video block-player player-icon" data-tooltip="lire la vidéo" video-attr="//www.youtube.com/embed/_VLpx_oTfNA?autoplay=1" style="top: 0px;left: 0px;width: 100%;height: 100%; z-index: 1;">
				  		    </div>

			  		       <div class="video-container">
					        <iframe width="100%" height="100%" src="//www.youtube.com/embed/_VLpx_oTfNA?rel=0" frameborder="0" allowfullscreen></iframe>
					      </div>
			  		    </div>


			  		    <div class="relative-block" style="border:2px solid white;">
				  		    <div class="absolute-block is_video block-player player-icon" data-tooltip="lire la vidéo" video-attr="//www.youtube.com/embed/cPUSeYYrBrI?autoplay=1" style="top: 0px;left: 0px;width: 100%;height: 100%; z-index: 1;">
				  		    </div>

			  		       <div class="video-container">
					        <iframe width="100%" height="100%" src="//www.youtube.com/embed/cPUSeYYrBrI?rel=0" frameborder="0" allowfullscreen></iframe>
					      </div>
			  		    </div>

			  		    <div class="relative-block" style="border:2px solid white;">
				  		    <div class="absolute-block is_video block-player player-icon" data-tooltip="lire la vidéo" video-attr="//www.youtube.com/embed/zunp_YqNRfg?autoplay=1" style="top: 0px;left: 0px;width: 100%;height: 100%; z-index: 1;">
				  		    </div>

			  		       <div class="video-container">
					        <iframe width="100%" height="100%" src="//www.youtube.com/embed/zunp_YqNRfg?rel=0" frameborder="0" allowfullscreen></iframe>
					      </div>
			  		    </div>

			  		   <div class="relative-block" style="border:2px solid white;">
				  		    <div class="absolute-block is_video block-player player-icon" data-tooltip="lire la vidéo" video-attr="//www.youtube.com/embed/gMaVJA6xIk4?autoplay=1" style="top: 0px;left: 0px;width: 100%;height: 100%; z-index: 1;">
				  		    </div>

			  		       <div class="video-container">
					        <iframe width="100%" height="100%" src="//www.youtube.com/embed/gMaVJA6xIk4?rel=0" frameborder="0" allowfullscreen></iframe>
					      </div>
			  		   </div>

			  		   <div class="relative-block" style="border:2px solid white;">
				  		    <div class="absolute-block is_video block-player player-icon" data-tooltip="lire la vidéo" video-attr="//www.youtube.com/embed/Uk7oKGypo0Y?autoplay=1" style="top: 0px;left: 0px;width: 100%;height: 100%; z-index: 1;">
				  		    </div>

			  		       <div class="video-container">
					        <iframe width="100%" height="100%" src="//www.youtube.com/embed/Uk7oKGypo0Y?rel=0" frameborder="0" allowfullscreen></iframe>
					      </div>
			  		  </div>
		  </div>

		</div>
	</div>
</div>

<script>
$('.tooltipped').tooltip();

	first_player = true;

	$('.player-icon').bind('click', function(){

		if($(this).hasClass('playing'))
		{
			Materialize.toast('Vidéo en cours de lecture',4000,'mg_prim_background white-text');
		}
		else
		{
			if(first_player)
			{
			    var attr = "//www.youtube.com/embed/aTFZ5xT8neY?rel=0";
			    first_player = false;
			}
			else
				var attr = $(this).attr('video-attr');

	        var video_element = $('<iframe width="853" height="480" frameborder="0" allowfullscreen></iframe>').attr('src',attr);
			var video_container = $('<div class="video-container"></div>');

			$('.player-icon').removeClass('playing');
			$(this).addClass('playing');

			$('#current-video-container').empty();
			video_container.append(video_element).appendTo('#current-video-container');
		}

	});

	$('.player-icon:eq(0)').trigger('click');

</script>


