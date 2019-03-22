<?php
/** Template Name: Accueil
 */

//header
get_header();

        //Main Nav
        get_template_part('template-parts/nav','main');

        //Banner Header
        get_template_part('template-parts/header','banner') ;

        //Présentation
        get_template_part('template-parts/home', 'presentation');

    //Banner CTA
    get_template_part('template-parts/home','banner-cta') ;

    //Skills
    get_template_part('template-parts/home', 'skills');

    //Portfolio
    get_template_part('template-parts/home', 'portfolio');


    //Contact
    get_template_part('template-parts/home', 'gmap-contact');

    //Testimonials
    get_template_part('template-parts/home', 'testimonials');


//footer
get_footer();