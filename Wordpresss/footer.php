<footer class="site-footer">
    <div class="container">
        <nav class="footer-menu">
<?php wp_nav_menu(array('theme_location'->'wp_devs_footer_menu','depth'=>1)); ?>
        </nav>

    </div>

</footer>



<?php wp_footer(); ?>
</body>
</html>
<?php
if(!is_page('landing-page')):?>
<section class="menu-area">

<div class="container">


<nav class="main-menu">
    <button class ="check-button">
        <div class="menu-icon">
            <div class="bar1"></div>
              <div class="bar2"></div>
                <div class="bar3"></div>
        </div>

    </button>
    <?php wp_nav_menu(array('theme_location'->'wp_devs_main_menu','depth'=>1)); ?>

</nav>

</div>

</section>
