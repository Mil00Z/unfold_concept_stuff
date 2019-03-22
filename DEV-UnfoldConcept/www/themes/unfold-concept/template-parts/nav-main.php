<div class="container-fluid">

        <nav id="main-nav" class="navbar">


            <?php

            if(has_nav_menu('main-nav') ) {

                wp_nav_menu(array(
                        'theme_location'=>'main-nav',
                        'menu'=>'main-nav',
                        'menu_class'=>'navbar-nav',
                        'link_class'=>"nav-link debeug"
                    ));
            }

            ;?>
<!--            <ul class="navbar-nav">-->
<!---->
<!--                <li class="nav-item active"><a href="#" class="nav-link">Lien 1</a></li>-->
<!--                <li class="nav-item"><a href="#" class="nav-link">Lien 2</a></li>-->
<!--                <li class="nav-item"><a href="#" class="nav-link">Lien 3</a></li>-->
<!--                <li class="nav-item"><a href="#" class="nav-link">Lien 4</a></li>-->
<!---->
<!--            </ul>-->
    
        </nav>

</div>