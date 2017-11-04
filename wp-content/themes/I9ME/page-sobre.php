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
	<div class="breadcrumb">
		<div class="container">
			<?php get_template_part('breadcrumb');?>
		</div>
	</div>
<article class="page-sobre">
	<section class="dna">
		<div class="container">
			<div class="boxes boxes--paralax">
				<div class="boxes__box-left boxes__box-left--paralax"  id="group7">					
					<header class="header-section header-section--area-design">
						<div class="header-section__box header-section__box--design header-section__box--dna">
							<h2 class="header-section__title header-section__title--design">
								<div class="header-section__group header-section__group--dna">
									<span class="icon-dna"></span>
									<h5>NOSSO</h5>
								</div>
								<div class="header-section__group header-section__group--dna">
									<span class="header-section__letter">D</span>
									<span class="header-section__letter">n</span>
									<span class="header-section__letter">a</span>
								</div>
			        		</h2>
						</div>
						<p class="header-section__subtitle header-section__subtitle--right">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim recusandae doloremque et.</p>
					</header>
					<header class="title-servicos">
						<h2>DNA</h2>
						<p class="subtitle-servicos">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim recusandae doloremque
						</p>
					</header>  				
			      	<div class="boxes__layer boxes__layer--back boxes__layer--back-pc">
			        	<div class="boxes__pc"></div>
			      	</div>		      	
				</div>
				<div class="boxes__box-right">
					<ul class="lista">
										
						<li class="lista__item">
							<figure>
								<div class="">
									<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
									<i class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/solucao-digital.png" alt="Solucao-digital">
									</i>
								</div>						
								<figcaption>
									<h5 class="lista__smalltitle">Soluções<br/> Digitais</h5>
									<p class="lista__smallcontent">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, tation ullamcorper suscipit lobortis nisl ut.</p>
								</figcaption>
							</figure>						
						</li>	
						<li class="lista__item">
							<figure>
								<div class="">
									<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
									<i class="">
										<img  src="<?php echo get_template_directory_uri(); ?>/assets/images/design-criativo.png" alt="design-criativo">
									</i>
								</div>							
								<figcaption>
									<h5 class="lista__smalltitle">Design<br/> Criativo</h5>
									<p class="lista__smallcontent">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, tation ullamcorper suscipit lobortis nisl ut.</p>
								</figcaption>
							</figure>						
						</li>
						<li class="lista__item">
							<figure>
								<div class="">
									<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
									<i class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/inovacao.png" alt="inovacao">
									</i>
								</div>							
								<figcaption>
									<h5 class="lista__smalltitle">Inovação<br/> {mode <span>=</span> ON}</h5>
									<p class="lista__smallcontent">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, tation ullamcorper suscipit lobortis nisl ut.</p>
								</figcaption>
							</figure>						
						</li>	 	
						<li class="lista__item">
							<figure>
								<div class="">
									<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
									<i class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cafe.png" alt="cafe">
									</i>
								</div>													
								<figcaption>
									<h5 class="lista__smalltitle">Café <br/>{mode <span>=</span> InfiniteLoop}</h5>
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
			<div class="boxes boxes--reverse  boxes--paralax">
				<div class="boxes__box-left boxes__box-left--paralax" id="group6">
					<header class="header-section header-section--area-design header-section--area-web">
						<p class="header-section__subtitle header-section__subtitle--right header-section__subtitle--txtright">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim recusandae doloremque et.
						</p>
						<div class="header-section__box header-section__box--resultados">
							<h2 class="header-section__title header-section__title--resultados">
								<div class="header-section__group header-section__group--resultado">
									<span class="icon-resultados"></span>
									<h5>NOSSOS</h5>
								</div>
								<div class="header-section__group header-section__group--resultado header-section__group--re">
									<span class="header-section__letter">R</span>
									<span class="header-section__letter">e</span>
								</div>
								<div class="header-section__group header-section__group--resultado">
									<span class="header-section__letter">s</span>
									<span class="header-section__letter">u</span>
									<span class="header-section__letter header-section__letter--l">l</span>
								</div>
								<div class="header-section__group header-section__group--resultado">
									<span class="header-section__letter">t</span>
									<span class="header-section__letter">a</span>
								</div>
								<div class="header-section__group header-section__group--resultado">
									<span class="header-section__letter">d</span>
									<span class="header-section__letter">o</span>
									<span class="header-section__letter">s</span>		
								</div>								
			        		</h2>
						</div>
					</header>
					<header class="title-servicos">
						<h2>RESULTADOS</h2>
						<p class="subtitle-servicos">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim recusandae doloremque
						</p>
					</header>  
			      	<div class="boxes__layer boxes__layer--back-resultado">
			        	<div class="boxes__resultado"></div>
			      	</div>
				</div>
				<div class="boxes__box-right">
					<ul class="lista">
										
						<li class="lista__item">
							<figure>
								<div class="">
									<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
									<i class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/presenca-digital.png" alt="Presença Digital">
									</i>
								</div>							
								<figcaption>
									<h5 class="lista__smalltitle"><span>+</span>Presença<br/> Digital</h5>
									<p class="lista__smallcontent">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, tation ullamcorper suscipit lobortis nisl ut.</p>
								</figcaption>
							</figure>						
						</li>	
						<li class="lista__item">
							<figure>
								<div class="">
									<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
									<i class="">
										<img  src="<?php echo get_template_directory_uri(); ?>/assets/images/clientes-venda.png" alt="Clientes e Venda">
									</i>
								</div>						
								<figcaption>
									<h5 class="lista__smalltitle"><span>+</span>Clientes<br/> e Vendas</h5>
									<p class="lista__smallcontent">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, tation ullamcorper suscipit lobortis nisl ut.</p>
								</figcaption>
							</figure>						
						</li>
						<li class="lista__item">
							<figure>
								<div class="">
									<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
									<i class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/aproximacao.png" alt="aproximacao">
									</i>
								</div>							
								<figcaption>
									<h5 class="lista__smalltitle"><span>+</span>Aproximação<br/> com seus Clientes</h5>
									<p class="lista__smallcontent">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, tation ullamcorper suscipit lobortis nisl ut.</p>
								</figcaption>
							</figure>						
						</li>	 	
						<li class="lista__item">
							<figure>
								<div class="">
									<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
									<i class="">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reconhecimento.png" alt="Reconhecimento">
									</i>
								</div>				
								<figcaption>
									<h5 class="lista__smalltitle"><span>+</span>Reconhecimento<br/> para a sua Marca</h5>
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
			<header class="header-section header-section--area-clientes">
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
	<section class="equipe">
		<div class="equipe__background">
			<div class="container">
				<header class="header-section">
					<div class="header-section__box">
						<h2 class="header-section__title header-section__title--equipe">Equipe</h2>
					</div>
					<p class="header-section__subtitle">
						Lorem ipsum dolor sit amet, consectetur
						adipisicing elit. Consectetur dolorum sequi voluptatem reprehenderit.	
					</p>
				</header>
			</div>
		</div>
		<div class="container">
			<ul class="equipe__lista" id="equipe">
				<li class="equipe__item">
					<div class="equipe__profissional"></div>
					<div class="equipe__box-nome">
						<i class="icon-"></i><h3>Nome do Profissional</h3>
					</div>
					<div class="equipe__box-informacoes">
						<i class="icon-ux"></i><h4>UX/UI/GRAPHIC DESIGNER</h4>
					</div>
					<div class="equipe__box-redes">
						<a href="#" title="Facebook"><i class="icone fa fa-facebook"></i></a>
						<a href="#" title="Instagram"><i class="icone fa fa-instagram"></i></a>
						<a href="#" title="Behance"><i class="icone fa fa-behance"></i></a>
					</div>		
				</li>
				<li class="equipe__item">
					<div class="equipe__profissional"></div>
					<div class="equipe__box-nome">
						<i class="icon-"></i><h3>Nome do Profissional</h3>
					</div>
					<div class="equipe__box-informacoes">
						<i class="icon-dev"></i><h4>DESENVOLVEDOR</h4>
					</div>
					<div class="equipe__box-redes">
						<a href="#" title="Facebook"><i class="icone fa fa-facebook"></i></a>
						<a href="#" title="Instagram"><i class="icone fa fa-instagram"></i></a>
						<a href="#" title="Behance"><i class="icone fa fa-behance"></i></a>
					</div>
				</li>
				<li class="equipe__item">
					<div class="equipe__profissional"></div>
					<div class="equipe__box-nome">
						<i class="icon-"></i><h3>Nome do Profissional</h3>
					</div>
					<div class="equipe__box-informacoes">
						<i class="icon-pincel"></i><h4>REDATORA</h4>
					</div>
					<div class="equipe__box-redes">
						<a href="#" title="Facebook"><i class="icone fa fa-facebook"></i></a>
						<a href="#" title="Instagram"><i class="icone fa fa-instagram"></i></a>
						<a href="#" title="Behance"><i class="icone fa fa-behance"></i></a>
					</div>
				</li>
			</ul>
		</div>
	</section>
</article>
<?php get_template_part('templates/newsletter','home');?>
<?php get_template_part('templates/html','footer');?>

