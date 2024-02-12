<?php

/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */



?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link href="https://fonts.googleapis.com/css2?family=Michroma&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">



</head>

<body  <?php body_class(); ?>>

	<header class=" sticky top-0 z-50 grid grid-cols-12 gap-0 ">

		<div class="bg-black w-full lg:col-span-1 sm:col-span-2 col-span-3 p-2.5 flex items-center	pl-10 justify-center">

			<nav class="navigation-menu">

				<button type="button" class="hamburger-menu" onclick="toggleMenuClicked()">
					<span class="material-icons" id="open-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_humberger.svg" width="35" height="23" alt="claire_humberger"></span>
					<span class="material-icons hidden" id="close-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cliare_close-icon.svg" width="35" height="35" alt="claire_close"></span>
				</button>
				<section class="navigation-menu__labels bg-white fixed invisible z-10 xl:top-[80px] md:top-[75px] top-[75px] left-0 h-auto xl:p-12 md:p-10 p-6">
					<ul>
						<?php
						$menu = 'Dekstop-Responsive Menu';
						$args = array(
							'order' => 'DESC',
							'orderby' => 'menu_order',
							'post_type' => 'nav_menu_item',
							'post_status' => 'publish',
							'output' => ARRAY_A,
							'output_key' => 'menu_order',
							'nopaging' => true,
							'update_post_term_cache' => false
						);
						$items = wp_get_nav_menu_items($menu, $args);
						//echo "<pre>"; print_r($items); echo "</pre>";

						global $wp_query;
						$pagename = $wp_query->queried_object->post_title;

						?>
						<?php for ($i = 0; $i < count($items); $i++) { ?>
							<li class="xl:pb-7 md:pb-5 pb-2 <?php if ($items[$i]->title ==  "PRODUCTION") { ?>lg:hidden <?php } ?> ">
								<a href="<?php echo $items[$i]->url; ?>" class=" xl:text-xl  md:text-lg text-base font-medium uppercase "><?php echo $items[$i]->title; ?></a>
							</li>
						<?php } ?>


						<li>
							<?php if (have_rows('global_settings_contact_details', 'option')) :
								$i = 0;
								// Loop through rows.
								while (have_rows('global_settings_contact_details', 'option')) : the_row();

									// Load sub field value.
									$global_settings_contact_details_url = get_sub_field('global_settings_contact_details_url');
									$global_settings_contact_details_type_image = get_sub_field('global_settings_contact_details_type_image');
									$global_settings_contact_details_text = get_sub_field('global_settings_contact_details_text');


							?>
									<a href="<?php echo $global_settings_contact_details_url; ?>" class="xl:text-sm text-xs xl:pb-5 md:pb-3 pb-2 inline-block  uppercase font-michroma " ;>

										<img class="inline-block mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_whatsapp.svg" width="30" height="30" alt="claire_whatsapp">

										<?php echo $global_settings_contact_details_text; ?></a><br>
							<?php
									$i++;
								endwhile;
							endif; ?>
						</li>
						<li>
							<?php if (have_rows('global_settings_social_icons_repeater', 'option')) :
								$i = 0;
								// Loop through rows.
								while (have_rows('global_settings_social_icons_repeater', 'option')) : the_row();

									// Load sub field value.
									$global_settings_social_icons = get_sub_field('global_settings_social_icons_repeater_image_image');
									$global_settings_social_icons_url = get_sub_field('global_settings_social_icons_repeater_url');

							?>
									<a href="<?php echo $global_settings_social_icons_url; ?>">
										<?php if (!empty($global_settings_social_icons)) : ?>
											<img class="inline-block <?php if ($i != 2) { ?>md:mr-5 mr-3  <?php } ?>" src="<?php echo $global_settings_social_icons['url']; ?>" width="30" height="30" alt="<?php echo $global_settings_social_icons['alt']; ?>">
										<?php endif; ?>
									</a>
							<?php
									$i++;
								endwhile;
							endif; ?>
						</li>
					</ul>
				</section>
			</nav>
		</div>

		</div>

		<div id="offcanvas" class=" flex items-center justify-between lg:col-span-11 sm:col-span-10 col-span-9 lg:py-2.5 py-2 sm:pl-6 pl-3 bg-white">

			<?php $logo_image = get_field('header_logo_image', 'option'); ?>
			<a href="<?php echo home_url('/'); ?>" class="navbar-brand xl:pr-8 lg:pr-4"><img src="<?php echo $logo_image['url']; ?>" width="220" height="61" alt="claire-logo" class="#"></a>

			<ul class="navbar lg:flex items-center xl:gap-10 lg:gap-3 hidden ml-auto">
				<?php
				$menu = 'Dekstop-Responsive Menu';
				$args = array(
					'order' => 'DESC',
					'orderby' => 'menu_order',
					'post_type' => 'nav_menu_item',
					'post_status' => 'publish',
					'output' => ARRAY_A,
					'output_key' => 'menu_order',
					'nopaging' => true,
					'update_post_term_cache' => false
				);
				$items = wp_get_nav_menu_items($menu, $args);
				//echo "<pre>"; print_r($items); echo "</pre>";

				global $wp_query;
				$pagename = $wp_query->queried_object->post_title;

				?>
				<?php for ($i = 0; $i < count($items); $i++) { ?>
					<li class="relative">
						<a href="<?php echo $items[$i]->url; ?>" class=" xl:text-sm text-xs font-bold uppercase "><?php echo $items[$i]->title; ?></a>
					</li>
				<?php } ?>


				<li>
					<?php if (have_rows('global_settings_contact_details', 'option')) :
						$i = 0;
						// Loop through rows.
						while (have_rows('global_settings_contact_details', 'option')) : the_row();

							// Load sub field value.
							$global_settings_contact_details_url = get_sub_field('global_settings_contact_details_url');
							$global_settings_contact_details_type_image = get_sub_field('global_settings_contact_details_type_image');
							$global_settings_contact_details_text = get_sub_field('global_settings_contact_details_text');


					?>
							<a href="<?php echo $global_settings_contact_details_url; ?>" class="xl:text-sm text-xs  uppercase font-michroma " ;>
								<?php echo $global_settings_contact_details_text; ?></a><br>
					<?php
							$i++;
						endwhile;
					endif; ?>

				</li>
				<?php
				$header_settings_help_btn_text = get_field('header_settings_help_btn_text', 'option');
				$header_settings_help_btn_url = get_field('header_settings_help_btn_url', 'option');
				$common_contact_number = get_field('common_contact_number', 'option');
				?>
				<li>
					<a href="<?php echo $common_contact_number ; ?>" class=" "><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_whatsapp.svg" width="30" height="30" alt="claire_whatsapp"></a>
				</li>

				<li>
					<button class="btn-arrow group round-none hover:bg-black transition-all rounded-none xl:py-3 xl:px-6 lg:py-2 lg:px-4 border border-i-primary lg:block hidden "><a href="<?php echo $header_settings_help_btn_url ; ?>" class="group-hover:brightness-[10] group-hover:text-white xl:text-sm text-xs font-bold bg-no-repeat bg-right xl:pr-7 lg:pr-4"><?php echo $header_settings_help_btn_text ; ?>
						</a></button>
				</li>


			</ul>


			<div class="ml-auto mr-3">
				<button class="btn-arrow group hover:bg-black transition-all rounded-none sm:py-3 sm:px-6 py-2 px-4  border border-i-primary lg:hidden sm:block hidden "><a href="<?php echo $header_settings_help_btn_url ; ?>" class="group-hover:brightness-[10] group-hover:text-white sm:text-sm text-xs font-bold bg-no-repeat bg-right sm:pr-7 pr-0"><?php echo $header_settings_help_btn_text ; ?> </a></button>
			</div>
		</div>

	</header>