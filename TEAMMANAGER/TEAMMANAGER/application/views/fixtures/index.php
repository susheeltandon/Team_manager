<div class="span9">
	<div class="row">
    	<div class="span6"><h2 style="margin-top:0">Available games</h2></div>
    </div>
	
	<div class="row">
	<?php foreach( $this->fixtures as $Fixture ): ?>
	
		<div class="span3">
			<div class="widget widget-box">
				<div class="widget-header">
				<h3 style="margin-left:23px"><a href="<?php echo url("fixtures/view/".$Fixture->id) ?>"><?php echo $Fixture->location ?></a>
				</h3>
			</div>
			<?php $image = ( $Fixture->image ) ? url("public/uploads/".$Fixture->image, true) : url("public/images/fixture_no_image.jpg", true) ?>
			<div class="widget-content" style="min-height:250px; padding:30px">
			    <a href="<?php echo url("fixtures/view/".$Fixture->id) ?>"><img src="<?php echo $image ?>" class="img-polaroid" /></a>
			        <div class="clear"></div>
			        <div class="row-fluid">
				        <p><a style="width:174px" href="<?php echo url("fixtures/view/".$Fixture->id) ?>" class="btn btn-inverse">More info</a></p>
			        </div>
			        <b>Address:</b> <?php echo $Fixture->address ?></br></br>
			        <b>Postcode:</b> <?php echo $Fixture->postcode ?></br>
			</div>
		</div>
	</div>

	<?php endforeach ?>
	
</div>
</div>
</div>
							

