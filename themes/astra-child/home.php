<?php

/**Template Name: Homepage Template
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>


<?php
$hero_banner_section_image = get_field('hero_banner_section_image');
$hero_banner_section_heading = get_field('hero_banner_section_heading');
$hero_banner_section_description = get_field('hero_banner_section_description');
?>
<section class="hero">
    <div class="relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.29)]">
        <?php if (!empty($hero_banner_section_image)) : ?>
            <img class="w-full min-h-64 object-cover" src="<?php echo $hero_banner_section_image['url']; ?>" width="<?php echo $hero_banner_section_image['width']; ?>" height="<?php echo $hero_banner_section_image['height']; ?>" alt="<?php echo $hero_banner_section_image['alt']; ?>">
        <?php endif; ?>
        <h1 class="absolute text-center xl:text-6xl md:text-5xl sm:text-4xl text-3xl  top-2/4 left-2/4 text-white transform-middle break-keep w-full">
            <?php echo $hero_banner_section_heading; ?></h1>
    </div>
</section>


<?php
$our_services_section_main_heading = get_field('our_services_section_main_heading');
?>
<section class="services lg:pt-24 md:pt-12 pt-6">
    <div class="container m-auto">
        <h2 class="lg:mb-20 md:mb-12 mb-10 lg:text-4xl md:text-3xl  text-2xl font-michroma text-black relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] md:after:bottom-[-20px] after:bottom-[-10px] after:left-[50%] after:translate-x-[-50%] after:bg-black">
            <?php echo  $our_services_section_main_heading; ?></h2>

        <div class="lg:grid lg:grid-cols-12 lg:gap-x-10 sm:p-8 p-3 border border-[#030303] items-center">
            <div class="xl:col-span-8 lg:col-span-7 ">
                <div class="swiper claire-service-full lg:!pb-24  overflow-hidden">
                    <div class="swiper-wrapper">
                        <?php if (have_rows('our_services_section_slider_details')) :

                            // Loop through rows.
                            while (have_rows('our_services_section_slider_details')) : the_row();

                                // Load sub field value.
                                $our_services_section_slider_details_main_images = get_sub_field('our_services_section_slider_details_main_images');
                        ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo $our_services_section_slider_details_main_images['url']; ?>" width="801" height="580" alt="<?php echo $our_services_section_slider_details_main_images['alt']; ?>" class="w-full">
                                </div>
                        <?php

                            endwhile;
                        endif; ?>

                    </div>
                    <div class="swiper-pagination !left-1/3"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                </div>

                <div thumbsSlider="" class="swiper claire-service-small lg:!pb-9   lg:mt-[-10rem] md:mt-[-3.5rem] sm:mt-[-3rem] mt-[-2rem] w-[96%] m-auto">
                    <div class="swiper-wrapper ">
                        <?php if (have_rows('our_services_section_small_slider_details')) :

                            // Loop through rows.
                            while (have_rows('our_services_section_small_slider_details')) : the_row();

                                // Load sub field value.
                                $our_services_section_small_slider_details_images = get_sub_field('our_services_section_small_slider_details_images');
                        ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo $our_services_section_small_slider_details_images['url']; ?>" width="141" height="100" alt="<?php echo $our_services_section_small_slider_details_images['alt']; ?>" class="w-full  cursor-pointer">
                                </div>
                        <?php

                            endwhile;
                        endif; ?>


                    </div>

                </div>
            </div>
            <div class="xl:col-span-4 lg:col-span-5 ">
                <?php
                $our_services_text_section_main_heading = get_field('our_services_text_section_main_heading');
                $our_services_text_section_description = get_field('our_services_text_section_description');
                $our_services_text_section_btn_url = get_field('our_services_text_section_btn_url');
                $our_services_text_section_btn_text = get_field('our_services_text_section_btn_text');
                ?>
                <h3 class="lg:text-2xl lg:pt-0 md:pt-10 pt-6 text-xl uppercase font-michroma text-black text-right border-b pb-5">
                    <?php echo  $our_services_text_section_main_heading; ?></h3>

                <p class="lg:text-17 md:text-base text-sm  text-light-grey my-5 text-right">
                    <?php echo  $our_services_text_section_description; ?></p>


                <div class="flex justify-end items-center">
                    <button class="group hover:bg-white transition-all btn-arrow bg-black py-3 lg:px-9 px-5 border border-black">
                        <a href=" <?php echo  $our_services_text_section_btn_url; ?>" class="group-hover:brightness-[0] group-hover:text-black lg:text-17 md:text-base text-sm  bg-no-repeat bg-right pr-7 font-michroma text-white brightness-[10]">
                            <?php echo  $our_services_text_section_btn_text; ?>
                        </a></button>

                </div>


            </div>
        </div>
    </div>
</section>

<?php
$all_projects_section_sub_heading = get_field('all_projects_section_sub_heading');
$all_projects_section_main_heading = get_field('all_projects_section_main_heading');
?>

<section class="projects lg:py-12 md:py-10 py-6">
    <h2 class="text-right lg:mb-20 md:mb-12 mb-10 text-17 font-michroma text-[#030303] relative pr-6 uppercase after:content-[''] after:absolute after:w-52 after:h-[1px] md:after:bottom-[-20px] after:bottom-[-10px] after:right-6 after:bg-[#030303]">
        <?php echo  $all_projects_section_sub_heading; ?></h2>
    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper claire-project ">
        <div class="swiper-wrapper lg:mb-16 mb-10">
            <?php if (have_rows('all_projects_section_all_details')) :

                // Loop through rows.
                while (have_rows('all_projects_section_all_details')) : the_row();

                    // Load sub field value.
                    $all_projects_section_all_details_images = get_sub_field('all_projects_section_all_details_images');
                    $all_projects_section_all_details_images_heading = get_sub_field('all_projects_section_all_details_images_heading');
            ?>
                    <div class="swiper-slide relative">
                        <img src="<?php echo  $all_projects_section_all_details_images['url']; ?>" width="314" height="202" alt="<?php echo  $all_projects_section_all_details_images['alt']; ?>" class="w-full">
                        <div class="absolute left-4 bottom-6">
                            <h3 class="lg:text-17 text-sm font-michroma text-white uppercase"><?php echo  $all_projects_section_all_details_images_heading; ?> </h3>
                        </div>
                    </div>
            <?php

                endwhile;
            endif; ?>
        </div>
        <div class="swiper-button-next !right-16 xl:!top-28 lg:!top-24 md:!top-20 sm:!top-24 !top-12"><img class="max-w-max sm:block hidden" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_project-right-arrow.svg" alt=""></div>
        <div class="swiper-button-prev !left-16 xl:!top-28 lg:!top-24 md:!top-20 sm:!top-24 !top-12"><img class="max-w-max sm:block hidden" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_project-left-arrow.svg" alt=""></div>
        <div class="swiper-pagination "></div>

    </div>
</section>



<section class="our-partners bg-dark-grey py-10">
    <div class="container m-auto">



        <div class="md:flex grid grid-cols-12 lg:gap-0 gap-5 items-center justify-between lg:mb-8 mb-5">
            <?php if (have_rows('our_partners_section_details')) :
                $i = 0;
                // Loop through rows.
                while (have_rows('our_partners_section_details')) : the_row();
                    if ($i == 5) { ?>
        </div>
        <div class="md:flex grid grid-cols-12 lg:gap-0 gap-5 items-center justify-between ">
        <?php  }
                    // Load sub field value.
                    $our_partners_section_images = get_sub_field('our_partners_section_images');
        ?>
        <div class="col-span-6">
            <img src="<?php echo $our_partners_section_images['url']; ?>" width="<?php echo $our_partners_section_images['width']; ?>" height="<?php echo $our_partners_section_images['height']; ?>" alt="<?php echo $our_partners_section_images['alt']; ?>" class="m-auto">
        </div>
<?php
                    $i++;
                endwhile;
            endif; ?>


        </div>

    </div>
</section>


<?php
$how_we_work_main_heading = get_field('how_we_work_main_heading');
$how_we_work_sub_heading = get_field('how_we_work_sub_heading');

$how_we_work_first_column_image = get_field('how_we_work_first_column_image');
$how_we_work_first_column_heading = get_field('how_we_work_first_column_heading');
$how_we_work_first_column_description = get_field('how_we_work_first_column_description');

$how_we_work_second_column_image = get_field('how_we_work_second_column_image');
$how_we_work_second_column_heading = get_field('how_we_work_second_column_heading');
$how_we_work_second_column_description = get_field('how_we_work_second_column_description');

$how_we_work_three_column_image = get_field('how_we_work_three_column_image');
$how_we_work_three_column_heading = get_field('how_we_work_three_column_heading');
$how_we_work_three_column_description = get_field('how_we_work_three_column_description');

$how_we_work_four_column_image = get_field('how_we_work_four_column_image');
$how_we_work_four_column_heading = get_field('how_we_work_four_column_heading');
$how_we_work_four_column_description = get_field('how_we_work_four_column_description');

$how_we_work_five_column_image = get_field('how_we_work_five_column_image');
$how_we_work_five_column_heading = get_field('how_we_work_five_column_heading');
$how_we_work_five_column_description = get_field('how_we_work_five_column_description');

$how_we_work_six_column_image = get_field('how_we_work_six_column_image');
$how_we_work_six_column_heading = get_field('how_we_work_six_column_heading');
$how_we_work_six_column_description = get_field('how_we_work_six_column_description');

$how_we_work_seven_column_image = get_field('how_we_work_seven_column_image');
$how_we_work_seven_column_heading = get_field('how_we_work_seven_column_heading');
$how_we_work_seven_column_description = get_field('how_we_work_seven_column_description');
?>
<section class="work-description lg:py-100 md:py-60 py-10">
    <div class="container m-auto">

        <h2 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-black relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-black">
            <?php echo $how_we_work_main_heading; ?></h2>
        <p class="lg:text-2xl text-xl  text-black font-bold text-center mt-5"><?php echo $how_we_work_sub_heading; ?></p>



        <div class="grid grid-cols-12 gap-5 lg:my-12 md:my-8 my-5">

            <div class="md:col-span-8 col-span-12">
                <div class="group relative hover:before:content-[''] hover:before:absolute hover:before:h-full hover:before:w-full hover:before:left-0 hover:before:top-0 hover:before:bg-[rgb(0,0,0,0.8)]  overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.29)]">
                    <img src="<?php echo $how_we_work_first_column_image['url']; ?>" width="<?php echo $how_we_work_first_column_image['width']; ?>" height="<?php echo $how_we_work_first_column_image['height']; ?>" alt="<?php echo $how_we_work_first_column_image['alt']; ?>" class="w-full lg:h-[386px] md:h-[300px] h-[290px] object-cover">
                    <div class="absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 lg:w-10/12 w-11/12 text-center duration-300 h-9 lg:group-hover:h-1/2  group-hover:h-3/5 overflow-hidden">
                        <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  lg:mb-7 mb-2"><?php echo $how_we_work_first_column_heading; ?></h3>
                        <p class="lg:text-17 text-sm text-white font-bold">
                            <?php echo $how_we_work_first_column_description; ?></p>
                    </div>
                </div>
            </div>



            <div class="md:col-span-4 col-span-12">
                <div class="group relative hover:before:content-[''] hover:before:absolute hover:before:h-full hover:before:w-full hover:before:left-0 hover:before:top-0 hover:before:bg-[rgb(0,0,0,0.8)]   overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.29)]">
                    <img src="<?php echo $how_we_work_second_column_image['url']; ?>"
                     width="<?php echo $how_we_work_second_column_image['width']; ?>" 
                     height="<?php echo $how_we_work_second_column_image['height']; ?>" 
                     alt="<?php echo $how_we_work_second_column_image['alt']; ?>" 
                     class="w-full lg:h-[386px] md:h-[300px] h-[250px] object-cover">
                    <div class="absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 lg:w-10/12 w-11/12 text-center  duration-300 h-9 lg:group-hover:h-1/2  group-hover:h-3/5 overflow-hidden">
                        <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  lg:mb-7 mb-2">
                            <?php echo $how_we_work_second_column_heading; ?></h3>
                        <p class="lg:text-17 text-sm text-white font-bold">
                        <?php echo $how_we_work_second_column_description; ?></p>
                    </div>
                </div>
            </div>



            <div class="md:col-span-4 col-span-12">
                <div class="group relative hover:before:content-[''] hover:before:absolute hover:before:h-full hover:before:w-full hover:before:left-0 hover:before:top-0 hover:before:bg-[rgb(0,0,0,0.8)]  overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.29)]">
                <img src="<?php echo $how_we_work_three_column_image['url']; ?>"
                     width="<?php echo $how_we_work_three_column_image['width']; ?>" 
                     height="<?php echo $how_we_work_three_column_image['height']; ?>" 
                     alt="<?php echo $how_we_work_three_column_image['alt']; ?>" 
                    class="w-full lg:h-[310px] md:h-[250px] h-[250px] object-cover">
                    <div class="absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 lg:w-10/12 w-11/12 text-center duration-300 h-9 lg:group-hover:h-1/2  group-hover:h-3/5 overflow-hidden">
                        <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  lg:mb-7 mb-2"> <?php echo $how_we_work_three_column_heading; ?></h3>
                        <p class="lg:text-17 text-sm text-white font-bold ">
                        <?php echo $how_we_work_three_column_description; ?></p>
                    </div>
                </div>
            </div>



            <div class="md:col-span-4 col-span-12">
                <div class="group relative hover:before:content-[''] hover:before:absolute hover:before:h-full hover:before:w-full hover:before:left-0 hover:before:top-0 hover:before:bg-[rgb(0,0,0,0.8)]   overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.29)]">
                <img src="<?php echo $how_we_work_four_column_image['url']; ?>"
                     width="<?php echo $how_we_work_four_column_image['width']; ?>" 
                     height="<?php echo $how_we_work_four_column_image['height']; ?>" 
                     alt="<?php echo $how_we_work_four_column_image['alt']; ?>" 
                    class="w-full lg:h-[310px] md:h-[250px] h-[250px] object-cover">
                    <div class="absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 lg:w-10/12 w-11/12 text-center duration-300 h-9 lg:group-hover:h-1/2  group-hover:h-3/5 overflow-hidden">
                        <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  lg:mb-7 mb-2"> <?php echo $how_we_work_four_column_heading; ?></h3>
                        <p class="lg:text-17 text-sm text-white font-bold">
                        <?php echo $how_we_work_four_column_description; ?></p>
                    </div>
                </div>
            </div>



            <div class="md:col-span-4 col-span-12">
                <div class="group relative hover:before:content-[''] hover:before:absolute hover:before:h-full hover:before:w-full hover:before:left-0 hover:before:top-0 hover:before:bg-[rgb(0,0,0,0.8)]   overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.29)]">
                <img src="<?php echo $how_we_work_five_column_image['url']; ?>"
                     width="<?php echo $how_we_work_five_column_image['width']; ?>" 
                     height="<?php echo $how_we_work_five_column_image['height']; ?>" 
                     alt="<?php echo $how_we_work_five_column_image['alt']; ?>" 
                      class="w-full lg:h-[310px] md:h-[250px] h-[250px] object-cover">
                    <div class="absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 lg:w-10/12 w-11/12 text-center duration-300 h-9 lg:group-hover:h-1/2  group-hover:h-3/5 overflow-hidden">
                        <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  lg:mb-7 mb-2">
                        <?php echo $how_we_work_five_column_heading; ?></h3>
                        <p class="lg:text-17 text-sm text-white font-bold ">
                        <?php echo $how_we_work_five_column_description; ?></p>
                    </div>
                </div>
            </div>



            <div class="md:col-span-4 col-span-12">
                <div class="group relative hover:before:content-[''] hover:before:absolute hover:before:h-full hover:before:w-full hover:before:left-0 hover:before:top-0 hover:before:bg-[rgb(0,0,0,0.8)]   overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.29)]">
                <img src="<?php echo $how_we_work_six_column_image['url']; ?>"
                     width="<?php echo $how_we_work_six_column_image['width']; ?>" 
                     height="<?php echo $how_we_work_six_column_image['height']; ?>" 
                     alt="<?php echo $how_we_work_six_column_image['alt']; ?>" 
                     class="w-full lg:h-[386px] md:h-[300px] h-[250px] object-cover">
                    <div class="absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 lg:w-10/12 w-11/12 text-center duration-300 h-9 lg:group-hover:h-1/2  group-hover:h-3/5 overflow-hidden">
                        <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  lg:mb-7 mb-2">
                        <?php echo $how_we_work_six_column_heading; ?></h3>
                        <p class="lg:text-17 text-sm text-white font-bold">
                        <?php echo $how_we_work_six_column_description; ?></p>
                    </div>
                </div>
            </div>


            <div class="md:col-span-8 col-span-12">
                <div class="group relative hover:before:content-[''] hover:before:absolute hover:before:h-full hover:before:w-full hover:before:left-0 hover:before:top-0 hover:before:bg-[rgb(0,0,0,0.8)]   overflow-hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.29)]">
                <img src="<?php echo $how_we_work_seven_column_image['url']; ?>"
                     width="<?php echo $how_we_work_seven_column_image['width']; ?>" 
                     height="<?php echo $how_we_work_seven_column_image['height']; ?>" 
                     alt="<?php echo $how_we_work_seven_column_image['alt']; ?>" 
                    class="w-full lg:h-[386px] md:h-[300px] h-[290px] object-cover">
                    <div class="absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 lg:w-10/12 w-11/12 text-center duration-300 h-9 lg:group-hover:h-1/2  group-hover:h-3/5 overflow-hidden">
                        <h3 class="lg:text-2xl text-xl text-white font-michroma uppercase  lg:mb-7 mb-2">ARCH
                        <?php echo $how_we_work_seven_column_heading; ?></h3>
                        <p class="lg:text-17 text-sm text-white font-bold">
                        <?php echo $how_we_work_seven_column_description; ?></p>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex items-center gap-2 justify-center">
            <button class="py-3 md:px-9 group hover:bg-black transition-all px-4 border border-i-primary lg:mt-2.5 mt-1.5"><a href="#" class="group-hover:brightness-[10] group-hover:text-white md:text-17 text-sm bg-no-repeat bg-right font-michroma ">Need help? </a></button>
            <button class="btn-arrow group hover:bg-white transition-all border border-i-primary py-3 md:px-9 px-4  bg-black lg:mt-2.5 mt-1.5"><a href="#" class="group-hover:brightness-[0] group-hover:text-black md:text-17 text-sm bg-no-repeat bg-right brightness-[10] pr-7 font-michroma text-white">Contact us
                </a></button>
        </div>
    </div>
</section>


<section class="why-us lg:pb-100 md:pb-60 pb-10">
    <div class="container m-auto">
        <?php
        $why_choose_us_section_main_heading = get_field('why_choose_us_section_main_heading');
        ?>
        <h2 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-black relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-black">
            <?php echo $why_choose_us_section_main_heading; ?></h2>

        <div class="grid grid-cols-12 lg:gap-x-14 lg:gap-y-16 gap-7 md:gap-y-10  lg:mt-16 md:mt-10 mt-6">
            <?php if (have_rows('why_choose_us_section_all_details')) :

                // Loop through rows.
                while (have_rows('why_choose_us_section_all_details')) : the_row();

                    // Load sub field value.
                    $why_choose_us_section_all_details_image = get_sub_field('why_choose_us_section_all_details_image');
                    $why_choose_us_section_all_details_heading = get_sub_field('why_choose_us_section_all_details_heading');
                    $why_choose_us_section_all_details_description = get_sub_field('why_choose_us_section_all_details_description');
            ?>
                    <div class="lg:col-span-3 md:col-span-6 col-span-12">

                        <div class="text-center">
                            <img src="<?php echo $why_choose_us_section_all_details_image['url']; ?>" width="<?php echo $why_choose_us_section_all_details_image['width']; ?>" height="<?php echo $why_choose_us_section_all_details_image['height']; ?>" alt="<?php echo $why_choose_us_section_all_details_image['alt']; ?>" class="m-auto w-[80px] !h-[80px]">

                            <h3 class="lg:text-17 text-base font-michroma text-black uppercase lg:my-5 md:my-3 my-2">
                                <?php echo $why_choose_us_section_all_details_heading; ?></h3>

                            <p class="text-sm  text-light-grey">
                                <?php echo $why_choose_us_section_all_details_description; ?> </p>
                        </div>

                    </div>
            <?php

                endwhile;
            endif; ?>



        </div>
    </div>
</section>



<?php
$about_us_section_main_heading = get_field('about_us_section_main_heading');
$about_us_section_sub_heading = get_field('about_us_section_sub_heading');
$about_us_section_all_details = get_field('about_us_section_all_details');

$about_us_section_btn_url = get_field('about_us_section_btn_url');
$about_us_section_btn_text = get_field('about_us_section_btn_text');
$about_us_section_main_image = get_field('about_us_section_main_image');
?>
<section class="about-us lg:py-100 md:py-60 py-10">

    <h2 class="lg:text-4xl md:text-3xl  text-2xl font-michroma text-black relative text-center uppercase after:content-[''] after:absolute after:w-24 after:h-[1px] after:bottom-0 lg:pb-6 pb-3 after:left-[50%] after:translate-x-[-50%] after:bg-black">
        <?php echo $about_us_section_main_heading; ?></h2>

    <div class="grid grid-cols-12 lg:gap-0 md:gap-10 gap-5 items-center lg:mt-16 md:mt-10 mt-6">
        <div class="lg:col-span-6 col-span-12 lg:order-1 order-2">

            <div class="border border-black lg:ml-10 lg:mr-0 md:mx-5 mx-3 lg:p-10 md:p-7 p-4 lg:border-r-0">
                <h3 class="lg:text-2xl md:text-xl text-lg uppercase font-michroma text-black ">
                    <?php echo $about_us_section_sub_heading; ?></h3>

                <p class="lg:text-17 md:text-base text-sm text-light-grey md:my-5 my-3">
                    <?php echo $about_us_section_all_details; ?></p>

                <div class="flex justify-between items-center">
                    <button class="group hover:bg-black transition-all btn-arrow  py-3 lg:px-9 md:px-5 px-3 border border-i-primary">
                        <a href="<?php echo $about_us_section_btn_url; ?>" class="group-hover:brightness-[10] group-hover:text-white lg:text-17 text-base bg-no-repeat bg-right pr-7 font-michroma">
                            <?php echo $about_us_section_btn_text; ?> </a></button>

                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_description-small-arrow.svg" width="71" height="15" alt="claire_description-small-arrow" class="md:mb-5 mb-3">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claire_description-big-arrow.svg" width="141" height="16" alt="claire_description-big-arrow">
                    </div>
                </div>

            </div>


        </div>

        <div class="lg:col-span-6 col-span-12 lg:ml-0 lg:mr-0 md:mx-5 mx-3 lg:order-2 order-1">
            <img src="<?php echo $about_us_section_main_image['url']; ?>" width="<?php echo $about_us_section_main_image['width']; ?>" height="<?php echo $about_us_section_main_image['height']; ?>" alt="<?php echo $about_us_section_main_image['alt']; ?>" class="w-full">
        </div>


    </div>

</section>






<?php get_footer(); ?>