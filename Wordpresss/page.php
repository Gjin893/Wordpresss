<?php get_header(); ?>
<div class="content" class="site-contant">
    <div class="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
            <?php 
            while(have_posts()): the_post();
            get_template_part('parts/content', 'page');

            if(comment_open()|| get_comments_number()){
                comments_template();
            }

        endwhile;
        
            ?>

        </main>
    </div>
    </div>
</div>
<?php get_footer();?>