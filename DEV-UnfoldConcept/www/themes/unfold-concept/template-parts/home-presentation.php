<section id="presentation" class="container block-parts">

    <h2 class="presentation_main--title"><?php the_field('titre_majeur') ;?></h2>

    <div class="row presentation_content">

        <div class="col-lg-6 presentation_content-desc">

                <ul>
                    <li><i class="fas fa-angle-double-right"></i><?php the_field('premier_item_list') ;?></li>
                    <li><i class="fas fa-angle-double-right"></i><?php the_field('second_item_list') ;?></li>
                    <li><i class="fas fa-angle-double-right"></i><?php the_field('third_item_list') ;?></li>
                </ul>

        </div>

        <div class="col-lg-6 presentation_content-thumbnail" style="background:url(<?php the_post_thumbnail_url() ;?>);">

<!--            <img src="" alt="">-->

        </div>

    </div>

</section>