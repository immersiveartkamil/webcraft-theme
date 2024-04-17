<div class="container-fluid banner" style="background-image:url('<?php the_field('img'); ?>')">
    <div class="container">
        <div class="row">
            <?php if (get_field('custom_title')) : ?>
                <div>
                    <h1 class="banner__title"><?php the_field('custom_title') ?></h1>
                <?php else : ?>
                    <h1 class="banner__title"><?php the_title(); ?></h1>
                <?php endif; ?>
                <p class="banner__subtitle"><?php the_field('subtitle'); ?></p>
                </div>

        </div>
    </div>
</div>