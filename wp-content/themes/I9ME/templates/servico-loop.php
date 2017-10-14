<?php 

$term_design = get_term_by('name', 'design', 'tipo-de-servico');
$term_web = get_term_by('name', 'web', 'tipo-de-servico');

	if( is_home() || is_front_page() ) {
		$limit_res = '4';
	} else {
		$limit_res = '8';
	}
 ?>

<section class="servicos__design" id="design">
	<div class="container">
		<div class="boxes boxes--paralax">

			<div class="boxes__box-left boxes__box-left--paralax"  id="group4">
				<header class="header-section header-section--area-design">
					<div class="header-section__box header-section__box--design">
						<h2 class="header-section__title header-section__title--design">
							<div class="header-section__group header-section__group--de">
								<span class="header-section__letter">D</span>
								<span class="header-section__letter">e</span>
							</div>
							<div class="header-section__group">
								<span class="header-section__letter">s</span>
								<span class="header-section__letter header-section__letter--i">i</span>
							</div>
							<div class="header-section__group">
								<span class="header-section__letter">g</span>
								<span class="header-section__letter">n</span>
							</div>
		        		</h2>
					</div>

					<p class="header-section__subtitle header-section__subtitle--right">
					<?php 
						echo $term_design->description;
					 ?>
					</p>
				</header>
				
				    
				<div class="boxes__layer boxes__layer--base">
		        	<div class="boxes__bg-lapis"></div>
		      	</div>
		      	<div class="boxes__layer boxes__layer--back">
		        	<div class="boxes__lapis"></div>
		      	</div>
		      	<div class="boxes__layer boxes__layer--deep">
		        	<div class="boxes__sombra"></div>
		      	</div>
			</div>

			<div class="boxes__box-right">

				<ul class="lista">
					<?php
						$tax_slug =  'tipo-de-servico';
		    			$args = array( 'post_type' => 'servico', 'posts_per_page' => $limit_res, 'order' => 'ASC', 'tax_query' => array(  array( 'taxonomy'  => $tax_slug, 'field' => 'slug','terms' => 'design',),), );
					 ?>
					<?php $loop = new WP_Query( $args );
		  				while ( $loop->have_posts() ) : $loop->the_post();
		  					
		  					//Variaveis do Pst
		  					$slug = basename(get_permalink());
		  					$resumo = get_post_custom_values('wpcf-resume');
		    				$resumo = $resumo[0];

		    				$icone = get_post_custom_values('wpcf-icone');
							$icone = $icone[0];

							$icone_hover = get_post_custom_values('wpcf-icone-hover');
							$icone_hover = $icone_hover[0];

		  			 ?>	
					<li class="lista__item">
						<figure>
							<a href="<?php echo get_permalink(); ?>">
								<div class="lista__bordas">
										<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
										<i class="servicos__<?php echo $slug; ?>">
											<img src="<?php echo $icone; ?>" alt="<?php echo the_title(); ?>" />
										</i>
								</div>
							</a>							
							<figcaption>
								<h5 class="lista__smalltitle"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h5>
								<p class="lista__smallcontent"><?php echo $resumo; ?></p>
							</figcaption>
						</figure>						
					</li>
					 <?php endwhile; ?> 
					 <?php if( is_home() || is_front_page() ): ?>
						<div class="groupboxes__vermais groupboxes__vermais--servicos">
							<a href="<?php echo home_url(); ?>/servicos/#design" class="btn-plus"></a>
						</div>
					<?php endif; ?>
				</ul>	
			</div>
		</div>	
	</div>	
</section>

	<section class="servicos__web" id="web">
		<div class="container">
			<div class="boxes boxes--reverse boxes--paralax">
				<div class="boxes__box-left  boxes__box-left--paralax"  id="group5">
					<header class="header-section header-section--area-design header-section--area-web">
						<p class="header-section__subtitle header-section__subtitle--right header-section__subtitle--txtright">
						<?php 
							echo $term_design->description;
						 ?>
						</p>
						<div class="header-section__box header-section__box--design">
							<h2 class="header-section__title header-section__title--web">
								<div class="header-section__group header-section__group--we">
									<span class="header-section__letter">W</span>
								</div>
								<div class="header-section__group header-section__group--center">
									<span class="header-section__letter">e</span>
								</div>
								<div class="header-section__group header-section__group--center">
									<span class="header-section__letter">b</span>
								</div>
			        		</h2>
						</div>

					</header>

					<div class="boxes__layer boxes__layer--deep-right">
		        		<div class="boxes__bg-phone"></div>
		      		</div>
			      	<div class="boxes__layer boxes__layer--back-right">
			        	<div class="boxes__phone"></div>
			      	</div>

					
				</div>
			
				<div class="boxes__box-right">
					<ul class="lista lista--lista-web">
						<?php
							$tax_slug =  'tipo-de-servico';
	            			$args = array( 'post_type' => 'servico', 'posts_per_page' => $limit_res, 'order' => 'ASC', 'tax_query' => array(  array( 'taxonomy'  => $tax_slug, 'field' => 'slug','terms' => 'web',),), );
						 ?>
						<?php $loop = new WP_Query( $args );
	          				while ( $loop->have_posts() ) : $loop->the_post();
	          					
	          					//Variaveis do Pst
	          					$slug = basename(get_permalink());
	          					$resumo = get_post_custom_values('wpcf-resume');
	            				$resumo = $resumo[0];

	            				$icone = get_post_custom_values('wpcf-icone');
								$icone = $icone[0];

								$icone_hover = get_post_custom_values('wpcf-icone-hover');
								$icone_hover = $icone_hover[0];
	          			 ?>	
						<li class="lista__item">
							<figure>
								<a href="<?php echo get_permalink(); ?>">
									<div class="lista__bordas lista__bordas--white">
											<i class="lista__<?php echo $slug; ?>">
												<img src="<?php echo $icone; ?>" alt="<?php echo the_title(); ?>" />
											</i>
									</div>
								</a>							
								<figcaption>
									<h5 class="lista__smalltitle"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h5>
									<p class="lista__smallcontent"><?php echo $resumo; ?></p>
								</figcaption>
							</figure>						
						</li>
						<?php endwhile; ?>
						<?php if( is_home() || is_front_page() ): ?>
							<div class="groupboxes__vermais groupboxes__vermais--servicos">
								<a href="<?php echo home_url(); ?>/servicos/#web" class="btn-plus"></a>
							</div>
						<?php endif; ?>
					</ul>
					
				</div>
			</div>
		</div>	
	</section>  