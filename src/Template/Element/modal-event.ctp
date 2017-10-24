<!-- Modal Trigger -->
<div class="col hide">
    <a class='btn' data-target='demoModal' open="$root.openModal" modal>Show Modal</a>
</div>
<!-- Modal Structure -->
<div id="demoModal" class="modal">
    <div class="modal-content mg-padding-0">
		<?= $this->Html->image('front_banner/poster.jpg',['style'=>'width:100%;display:block;']) ?>
    </div>
</div>