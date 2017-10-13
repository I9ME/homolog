<?php 
	$page = get_page_by_path('portfolios');
	$resumoSection = get_post_custom_values('wpcf-resume', $page->ID);
	$resumoSection = $resumoSection[0];
 ?>
<section class="portfolio" id="portifolio">
	<div class="container">
		<header class="header-section">
			<div class="header-section__box">
				<h2 class="header-section__title">Portfólio</h2>
			</div>
			<p class="header-section__subtitle">
				<?php echo $resumoSection; ?>	 	
			</p>
		</header>
		<div class="containerowl groupboxes" >
			<?php get_template_part('templates/portfolio','loop');?>
		</div>
		<div class="groupboxes__vermais">
			<a href="<?php echo home_url() ?>/portfolios/" class="btn-plus">
			</a>
		</div>

	</div>
</section>