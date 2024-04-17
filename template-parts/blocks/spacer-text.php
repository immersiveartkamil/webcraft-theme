<div class="container-fluid spacer_text">
    <div class="spacer_text__wrapper">
        <?php
        if (have_rows('texts_in_spacer')) :
            while (have_rows('texts_in_spacer')) : the_row(); ?>
                <div class="spacer_text__single flex-row-center">
                    <span class="spacer_text__icon"><?php echo get_sub_field('icon'); ?></span>
                    <span class="spacer_text__text"><?php echo get_sub_field('text'); ?></span>
                </div>

        <?php endwhile;
        endif; ?>
    </div>
</div>