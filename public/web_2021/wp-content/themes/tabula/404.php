<?php 

get_header(); ?>

		<section class="btErrorPage gutter">
			<div class="port">

				<div class="bt_bb_icon bt_bb_style_borderless bt_bb_size_xlarge bt_bb_shape_circle bt_bb_align_inherit"><span data-ico-dripicons="" class="bt_bb_icon_holder"></span></div>

				<div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
				
				<?php echo boldthemes_get_heading_html( 
					array (
						'headline' => esc_html__( '404', 'tabula' ),
						'size' => 'extraextrahuge',
						'color_scheme' => 'accent-light-skin',
						) 
					)
				?>

				<div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>


				<?php echo boldthemes_get_heading_html( 
					array (
						'headline' => esc_html__( 'The page you\'re looking for can\'t be found.', 'tabula' ),
						'size' => 'large'
						) 
					)
				?>

				<div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
				<?php
					echo boldthemes_get_button_html( 
						array (
							'url' => home_url( '/' ), 
							'text' => esc_html__( 'BACK TO HOME', 'tabula' ), 
							'style' => 'filled',
							'color_scheme' => 'dark-accent-skin',
							'size' => 'small'
						)
					);
				?>


			</div>
		</section>

<?php get_footer();