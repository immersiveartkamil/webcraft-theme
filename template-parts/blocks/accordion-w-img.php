<div class="row_flex accordion_wrapper container" style="margin-top:2em;">
    <div class="row_inner">
        <div class="col-lg-12 col-md-12 col-sm-12 accordion">
            <?php
            if (have_rows('accordion_items')) :
                while (have_rows('accordion_items')) : the_row();
                    $heading = get_sub_field('heading');
                    $text = get_sub_field('text');
            ?>
                    <div class="accordion accordion-single">
                        <div class="accordion_intro">
                            <p><?php echo $heading; ?></p>
                        </div>
                        <div class="accordion_content">
                            <img src="" class="accordion_image">
                            <p style="margin-top:20px;"><?php echo $text; ?></p>
                        </div>
                    </div>
            <?php endwhile;
            endif;
            ?>
        </div>
    </div>

    <div class="row_inner accordion_images">
        <?php
        if (have_rows('accordion_items')) :
            while (have_rows('accordion_items')) : the_row();
                $img = get_sub_field('img');
        ?>

                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="" style="max-width:100%;">


        <?php endwhile;
        endif;
        ?>

    </div>

</div>













<script>
    const accordions = document.querySelectorAll(".accordion");
    const accordionImages = document.querySelector(".accordion_images"); // Get the accordion_images container

    const openAccordion = (accordion) => {
        const content = accordion.querySelector(".accordion_content");
        accordion.classList.add("accordion_active");
        content.style.maxHeight = content.scrollHeight + 40 + "px";
    };

    const closeAccordion = (accordion) => {
        const content = accordion.querySelector(".accordion_content");
        accordion.classList.remove("accordion_active");
        content.style.maxHeight = null;
    };

    const activateImages = (index) => {
        const images = accordionImages.querySelectorAll("img");
        images.forEach((img, i) => {
            if (i === index - 1) {
                img.classList.add("active");
            } else {
                img.classList.remove("active");
            }
        });
    };

    accordions.forEach((accordion, index) => {
        const intro = accordion.querySelector(".accordion_intro");
        const content = accordion.querySelector(".accordion_content");

        intro.onclick = () => {
            if (content.style.maxHeight) {
                closeAccordion(accordion);
                activateImages(-1);
            } else {
                accordions.forEach((accordion) => closeAccordion(accordion));
                openAccordion(accordion);
                activateImages(index);
            }
        };
    });

    //default click first accordion
    const firstAccordion = document.querySelectorAll(".accordion_intro")[0];
    firstAccordion.click();
</script>