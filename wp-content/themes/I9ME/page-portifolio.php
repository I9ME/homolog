<?php /* Template Name: Portfólios */?>
	<?php get_template_part('templates/html','header');?>
	<?php 
		global $page;
		$slug_page=$page->post_name;
		//Busca dados no campo personalizado da Página
		$resumoPage = get_post_custom_values('wpcf-resume');
		$resumoPage = $resumoPage[0];
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
		<div class="container">
			<header class="banner-single__header">
				<h2 class="banner-single__title"><?php the_title() ?></h2>
				<p class="banner-single__subtitle"><?php echo $resumoPage; ?></p>
			</header>
		</div>
	</div>
	<div class="breadcrumb">
		<div class="container">
			<?php get_template_part('breadcrumb');?>
		</div>
	</div>
	<div class="container">
		<div class="containerowl groupboxes portifolio-interna">
	    	<?php get_template_part('templates/portfolio','loop');?>
		</div>
	</div>
<?php get_template_part('templates/newsletter','home');?>
<?php get_template_part('templates/html','footer');?>