<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="content-area sov__fullwidth" id="primary">

	<main class="site-main" id="main" role="main">

		<?php putRevSlider( 'homepage_slider' ); ?>

	</main>

</div>

<div class="wrapper intro__block intro__block--marble" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main intro__block--container" id="main" role="main">

					<?php 

					$image = get_field('homepage_intro_image');

					if( !empty($image) ): ?>

						<div class="intro__image--left" style="background-image: url(<?php echo $image['url']; ?>);">
							&nbsp;
						</div>

					<?php endif; ?>

					<div class="intro__text">

						<h2 class="intro__text--title">

							<?php if( get_field('homepage_intro_title') ): ?>
								<?php the_field('homepage_intro_title'); ?>
							<?php endif; ?>

						</h2>

						<div class="intro__text--content">

							<?php if( get_field('homepage_intro_text') ): ?>
								<?php the_field('homepage_intro_text'); ?>
							<?php endif; ?>

						</div>

					</div>

				</main>

			</div>			

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
