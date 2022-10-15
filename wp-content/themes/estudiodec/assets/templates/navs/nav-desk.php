<style>
    <?php include get_template_directory() . '/assets/templates/navs/nav.css'; ?>
</style>

<nav id="site-navigation" class="navbar navbar-expand-lg navbar-light nav-desk d-none d-sm-none d-md-block">
    <!---conatiner-->
    <div class="container-fluid">
        <!---row-->
        <div class="row w-100">
            <!---navbrand-->
            <div class="navbar-brand col-6 col-md-1">

            <?php the_custom_logo();?>

            </div>
           
            <div class="collapse navbar-collapse col-12 col-md-8" id="navbarSupportedContent">
                <?php //OPCIÓN MENU 1 SIMPLE CON BOOTSTRAP
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-superior',
                        'menu_id'        => 'navbar',
                        'menu_class'     => 'navbar-nav m-auto nav-menu d-flex justify-content-between w-100 px-3',
                        'container_class' => 'nav col-12 col-md-8',
                    )
                );
                ?>


            </div>
        </div>
    </div>
</nav>