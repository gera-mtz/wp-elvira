<?php get_header(); ?>
		<div class="bloque-rojo no-bloque-rojo"></div>
		<div class="col-lg-10 about-us" style="float: none; margin-right: auto; margin-left: auto; margin-bottom: 0; text-align: center;">
			<h1 class="title">Management</h1>
		</div>
		<div class="container management">
			<div class="d-flex justify-content-start align-items-center flex-wrap">
				<?php
					$args = array(
						'post_type' => 'management_detail'
					);
					$allPersonas = new WP_Query( $args );
					while ($allPersonas->have_posts()) : $allPersonas->the_post();
				?>
				<div class="man-item">
					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo the_field('thumbnail');?>">
						<div class="text">
							<div class="text2"> 
								<?php the_field('nombre_actor'); ?>		
							</div> 
						</div>
					</a>
				</div>
				<?php
					endwhile;
					wp_reset_postdata();
				?>
			</div>
		</div>
<?php get_footer(); ?>