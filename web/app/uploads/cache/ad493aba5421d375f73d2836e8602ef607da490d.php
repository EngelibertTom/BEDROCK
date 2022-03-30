<div class="partie2">
	<div class="container">
<h1><?php echo e($title); ?></h1>
<div class="cartes">
<?php while( $albums->have_posts()): ?> <?php $albums->the_post() ?>


		<div class="carte">
			<div class="img1"><?php echo e(the_post_thumbnail()); ?></div>
				<div class="infos">
					<p><strong><?php echo e(the_terms(get_the_ID(),'artist')); ?></strong><?php echo e(the_title()); ?></p>
					<p><?php echo e(the_field('annee')); ?></p>
					<p><?php echo e(the_field('genre')); ?></p>
				</div>
		</div>




<?php endwhile; ?>

</div>
		<div>
			<button>DISCOVER OUR PLANS</button>
		</div>
</div>
</div>
