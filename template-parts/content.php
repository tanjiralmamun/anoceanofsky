<div class="contentBox">
	<div class="innerBox">
        <?php 
            if(have_posts()):
                while(have_posts()): the_post();
        ?>

    	<a href="<?php the_permalink(); ?>" class="contentTitle"><?php the_title(); ?></a>
        <div class="contentText"><?php the_excerpt(); ?></div>

        <?php 
                endwhile;
            endif;
        ?>
    </div>

</div>