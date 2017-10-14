<?php get_template_part('templates/html','header');?>

<?php 
	global $page;
	$slug_page=$page->post_name;

	//Busca dados no campo personalizado da Página
	$resumoPage = get_post_custom_values('wpcf-resume');
	$resumoPage = $resumoPage[0];
	$slug_current = basename(get_permalink());
?>
<?php 

	if ( has_post_thumbnail() ) {
	
	//Imagem Destacada	
	$image_id = get_post_thumbnail_id();
	$sizeThumbs = 'full';
	$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
	$urlThumbnail = $urlThumbnail[0];

	$bg_banner_single = 'style="background:url(' . $urlThumbnail . '); background-size: cover;"';

	} else {
				$urlThumbnail	= '';
				$bg_banner_single = '';
	}

?>
	<div class="banner-single" <?php echo $bg_banner_single; ?>>
		<header class="banner-single__header">
			<h2 class="banner-single__title"><?php the_title() ?></h2>
			<p class="banner-single__subtitle"><?php echo $resumoPage; ?></p>
		</header>
	</div>
<article class="page-sobre">
	

	<section class="dna">
		<div class="container">
			<div class="boxes">
				<div class="boxes__box-left">
					
					<header class="header-section header-section--area-design">
						<div class="header-section__box header-section__box--design header-section__box--dna">
							<h2 class="header-section__title header-section__title--design">
								<div class="header-section__group">
									<span class="icon-dna"></span>
								</div>
								<div class="header-section__group">
									<span class="header-section__letter">D</span>
									<span class="header-section__letter">n</span>
									<span class="header-section__letter">a</span>
								</div>
			        		</h2>
						</div>

						<p class="header-section__subtitle header-section__subtitle--right">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim recusandae doloremque et.</p>
					</header>

					<div class="box-left__img"></div>
				</div>

				<div class="boxes__box-right">
					<ul class="lista">
										
						<li class="lista__item">
							<figure>
								<a href="#" title="Solucao Digital">
									<div class="">
											<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
											<i class="">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/solucao-digital.png" alt="Solucao-digital">
											</i>
									</div>
								</a>							
								<figcaption>
									<h5 class="lista__smalltitle"><a href="#">Soluções<br/> Digitais</a></h5>
									<p class="lista__smallcontent">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, tation ullamcorper suscipit lobortis nisl ut.</p>
								</figcaption>
							</figure>						
						</li>	
						<li class="lista__item">
							<figure>
								<a href="#" title="Design Criativo">
									<div class="">
											<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
											<i class="">
												<img  src="<?php echo get_template_directory_uri(); ?>/assets/images/design-criativo.png" alt="design-criativo">
											</i>
									</div>
								</a>							
								<figcaption>
									<h5 class="lista__smalltitle"><a href="#">Design<br/> Criativo</a></h5>
									<p class="lista__smallcontent">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, tation ullamcorper suscipit lobortis nisl ut.</p>
								</figcaption>
							</figure>						
						</li>
						<li class="lista__item">
							<figure>
								<a href="#" title="Inovação">
									<div class="">
											<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
											<i class="">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao.png" alt="inovacao">
											</i>
									</div>
								</a>							
								<figcaption>
									<h5 class="lista__smalltitle"><a href="#">Inovação<br/> {mode <span>= </span>ON}</a></h5>
									<p class="lista__smallcontent">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, tation ullamcorper suscipit lobortis nisl ut.</p>
								</figcaption>
							</figure>						
						</li>	 	
						<li class="lista__item">
							<figure>
								<a href="#" title="Café">
									<div class="">
											<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
											<i class="">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafe.png" alt="cafe">
											</i>
									</div>
								</a>							
								<figcaption>
									<h5 class="lista__smalltitle"><a href="#">Café <br/>{mode <span>=</span> InfiniteLoop}</a></h5>
									<p class="lista__smallcontent">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, tation ullamcorper suscipit lobortis nisl ut.</p>
								</figcaption>
							</figure>						
						</li>
					 	
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="resultados">
		<div class="container">
			<div class="boxes boxes--reverse">
				<div class="boxes__box-left">
					<header class="header-section header-section--area-design header-section--area-web">
						<p class="header-section__subtitle header-section__subtitle--right header-section__subtitle--txtright">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim recusandae doloremque et.
						</p>
						<div class="header-section__box header-section__box--design">
							<h2 class="header-section__title header-section__title--web">
								<div class="header-section__group header-section__group--we">
									<span class="header-section__letter">R</span>
									<span class="header-section__letter">e</span>
								</div>
								<div class="header-section__group">
									<span class="header-section__letter">s</span>
									<span class="header-section__letter">u</span>
									<span class="header-section__letter">l</span>
								</div>
								<div class="header-section__group">
									<span class="header-section__letter">t</span>
									<span class="header-section__letter">a</span>
								</div>
								<div class="header-section__group">
									<span class="header-section__letter">d</span>
									<span class="header-section__letter">o</span>
									<span class="header-section__letter">s</span>
									
								</div>
			        		</h2>
						</div>

					</header>
					

					<div class="box-left__img"></div>
				</div>

				<div class="boxes__box-right">
					<ul class="lista">
										
						<li class="lista__item">
							<figure>
								<a href="#" title="Presença Digital">
									<div class="">
											<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
											<i class="">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/presenca-digital.png" alt="Presença Digital">
											</i>
									</div>
								</a>							
								<figcaption>
									<h5 class="lista__smalltitle"><a href="#">Soluções<br/> Digitais</a></h5>
									<p class="lista__smallcontent">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, tation ullamcorper suscipit lobortis nisl ut.</p>
								</figcaption>
							</figure>						
						</li>	
						<li class="lista__item">
							<figure>
								<a href="#" title="Clientes e Vendas">
									<div class="">
											<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
											<i class="">
												<img  src="<?php echo get_template_directory_uri(); ?>/assets/images/clientes-venda.png" alt="Clientes e Venda">
											</i>
									</div>
								</a>							
								<figcaption>
									<h5 class="lista__smalltitle"><a href="#">Design<br/> Criativo</a></h5>
									<p class="lista__smallcontent">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, tation ullamcorper suscipit lobortis nisl ut.</p>
								</figcaption>
							</figure>						
						</li>
						<li class="lista__item">
							<figure>
								<a href="#" title="Aproximacao">
									<div class="">
											<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
											<i class="">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/aproximacao.png" alt="aproximacao">
											</i>
									</div>
								</a>							
								<figcaption>
									<h5 class="lista__smalltitle"><a href="#">Inovação<br/> {mode <span>= </span>ON}</a></h5>
									<p class="lista__smallcontent">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, tation ullamcorper suscipit lobortis nisl ut.</p>
								</figcaption>
							</figure>						
						</li>	 	
						<li class="lista__item">
							<figure>
								<a href="#" title="Reconhecimento">
									<div class="">
											<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
											<i class="">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reconhecimento.png" alt="Reconhecimento">
											</i>
									</div>
								</a>							
								<figcaption>
									<h5 class="lista__smalltitle"><a href="#">Café <br/>{mode <span>=</span> InfiniteLoop}</a></h5>
									<p class="lista__smallcontent">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, tation ullamcorper suscipit lobortis nisl ut.</p>
								</figcaption>
							</figure>						
						</li>
					 	
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="clientes">
		<div class="container">		
			<header class="header-section">
				<div class="header-section__box header-section__box--before-blue">
					<h2 class="header-section__title header-section__title--before-blue">Clientes</h2>
				</div>
			</header>
			
				<div class="clientes__carousel" id="clientes">
					<?php get_template_part('templates/clientes','loop');?>
				</div>
			
			
		</div>
	</section>
	<section class="depoimentos" id="depoimento">
		<div class="container">		
			<header class="header-section">
				<div class="header-section__box">
					<h2 class="header-section__title">Depoimentos</h2>
				</div>
				
				<p class="header-section__subtitle">
					Lorem ipsum dolor sit amet, consectetur
					adipisicing elit. Consectetur dolorum sequi voluptatem reprehenderit.	
				</p>
			</header>
					<div class="owl-carousel depoimentos__carousel" id="depoimentos">
						<?php get_template_part('templates/depoimento','loop');?>
					</div>
			
		</div>
	</section>
</article>
<?php get_template_part('templates/newsletter','home');?>
<?php get_template_part('templates/html','footer');?>

