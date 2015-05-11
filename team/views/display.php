<?php 
if(count($team_widget) > 0): 
//print_r($team_widget);
?>
		<section class="container animated fadeInDownNow notransition topspace10">
		<div class="row">
			<h1 class="text-center smalltitle">
			<span>Who's Behind</span>
			</h1>
			<?php foreach($team_widget as $value): ?>
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="<?php echo site_url('files/thumb/'.$value->photo.'/200/200/fit');?>"/><div class="caption">
						<h4><?php echo $value->name; ?></h4>
						<span class="primarycol">- <?php echo $value->designation; ?> -<br />
						<?php echo $value->email; ?><br />
						<?php echo $value->mobile_no;?>
						</span>
						<p>
							 <?php echo $value->description; ?><br>
						</p>
						<ul class="social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-google-plus"></i></a></li>
							<li><a href="#"><i class="icon-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<?php endforeach;?>

		</section>

<?php
endif; 

?>
<br style="clear:both;">