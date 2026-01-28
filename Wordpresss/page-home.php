<?php get_header(); ?>

<div id="content" class="site-content">
    <div id="primary "class="site-main">
        <main id="main" class="site-main">
        <section class="hero">
            hero

        </section>
        <section class="services">
            <h2>Services</h2>
            <div class="container">
                <div class="services-item">
                    <?php
                    if(is_active_sidebar('sidebar-1')){
                        dynamic_sidebar('services-1');
                    }
                    ?>

                </div>
                <div class="services-item">
                    <?php
                    if(is_active_sidebar('sidebar-2')){
                        dynamic_sidebar('services-2');
                    }
                    ?>

                </div>
                <div class="services-item">
                    <?php
                    if(is_active_sidebar('sidebar-3')){
                        dynamic_sidebar('services-3');
                    }
                    ?>
                </div>
            </div>
        </section>
        <section class="home-blog">
            <h2>latest news</h2>

            <div class="container">
                <?php
                $args = array(
                    'post_type'=>'post',
                    'postst_per_page'=> 5,
                    'category_in'=> array(9,10,15),
                    'category_not_in'=> array(1)
                );
                $postlist = new WP_Query($args);

                if($postlist -> have_posts());
                while($postlist -> have_posts()): $postlist -> the_post();
                get_template_part('parts/content','latest-news');
            endwhile;
            wp_reset_postdata();
        else:?>
        <p>nothing yet to be displayed</p>




               <?php endif; ?>
            </div>
                </section>
</main>
    </div>

</div>

<?php get_footer();?>