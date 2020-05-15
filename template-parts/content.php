<div class="contentBox">
	<div class="innerBox">
        <?php 
            if(have_posts()):
                while(have_posts()): the_post();
        ?>

    	<div class="contentTitle">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>       
        </div>
        <div class="contentText">
            <?php

                if(is_home()){
                    the_excerpt();
                    echo "<a href=".get_permalink().">read more...</a>";
                } else {
                    the_content();
                }

            ?>
        </div>

        <?php 
                endwhile;
            endif;
        ?>
    </div>

</div>