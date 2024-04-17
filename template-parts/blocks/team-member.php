<div class="container-fluid">
    <div class="row team">
        <div class="col-lg-6 col-md-6 col-sm-12 team__image"><img src="<?php echo get_field('image')['url'] ?>" alt="<?php echo get_field('image')['alt'] ?>"></div>
        <div class="col-lg-6 col-md-6 col-sm-12 flex-col-center team__info">
            <p class="team__name"><?php the_field('name'); ?></p>
            <p class="team__role"><?php the_field('role'); ?></p>
            <p class="team__description"><?php the_field('description'); ?></p>
        </div>
    </div>
</div>