<?php

/**
 * The header
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap-grid.rtl.min.css" integrity="sha512-IdCHbOHsCrqqXhmvpjhmTgDIwGrF5NMdQZcC/v0Jdle5sYnhSZ0PJPh57i4NgvtjKr/vflogE6lTs2Fk6aclSA==" crossorigin="anonymous" referrerpolicy="no-referrer" defer />
    <script src="https://kit.fontawesome.com/7273ba5046.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div class="container-fluid menu-big-wapper">
                <div class="container">
                    <nav id="site-navigation" class="main-navigation container">
                        <div class="site-branding">
                            <a href="<?php echo get_home_url(); ?>">
                                <img src="http://izi-design.local/wp-content/uploads/2024/04/65562565bc0046000ff95215_optimized_403.webp" alt="" width="150" height="80"></a>
                        </div>
                        <div class="mobile-hamburger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                            </svg>
                        </div>
                        <div class="custom-menu">
                            <?php
                            wp_nav_menu(array('theme_location' => 'primary_menu', 'container_class' => 'nav-menu', 'menu_class' => 'nav-menu'));

                            ?>
                        </div>


                    </nav>
                </div>
            </div>
            <script>
                const hamburger = document.querySelector(".mobile-hamburger");
                const mobileMenu = document.querySelector(".custom-menu");
                const subMenuItem = document.querySelectorAll(".menu-item-has-children");
                const headerMenu = document.querySelector("header");
                const headerlinks = document.querySelectorAll("header ul .menu-item a");


                hamburger.addEventListener("click", () => {
                    mobileMenu.classList.toggle("menu-active");
                });

                headerlinks.forEach(link => {
                    link.addEventListener("click", () => {
                        if (mobileMenu.classList.contains("menu-active")) {
                            mobileMenu.classList.remove("menu-active");
                        }
                    })
                })


                subMenuItem.forEach(sub => {
                    sub.addEventListener("click", function(e) {
                        const subMenu = this.querySelector(".sub-menu");
                        subMenu.classList.toggle("active");
                        e.stopPropagation();
                    });
                });

                // Close the submenu when clicking outside of it
                document.addEventListener("click", () => {
                    const activeSubMenus = document.querySelectorAll(".sub-menu.active");
                    activeSubMenus.forEach(subMenu => {
                        subMenu.classList.remove("active");
                    });
                });


                function uStickyMenu() {
                    if (window.pageYOffset >= 120) {
                        headerMenu.classList.add('go-white');
                        headerlinks.forEach(el => {
                            el.classList.add('go-black');
                        })

                    } else {
                        headerMenu.classList.remove('go-white');
                        headerlinks.forEach(el => {
                            el.classList.remove('go-black');
                        })
                    }
                }

                window.addEventListener('scroll', uStickyMenu);
            </script>
            <script src="https://unpkg.com/@studio-freight/lenis@1.0.33/dist/lenis.min.js"></script>
            <script>
                // <!-- LENIS LIBRARY SCROLL EFFECT SETUP -->

                const lenis = new Lenis();

                function raf(time) {
                    lenis.raf(time);
                    requestAnimationFrame(raf);
                }

                requestAnimationFrame(raf);

                // Grab all lists that have a "page_item" attribute
                const scrollButtons = document.querySelectorAll("li.page_item");
                // For each element, listen to a "click" event
                scrollButtons.forEach((button) => {
                    button.addEventListener("click", (e) => {
                        e.preventDefault();

                        // get the DOM element by the ID (data-target value) here using dummy ID need to be fixed in the future for other elements
                        var target = button.dataset.text,
                            $el = document.getElementsByClassName("about_us");

                        // Use lenis.scrollTo() to scroll the page to the right element
                        lenis.scrollTo($el[0], {
                            offset: 0,
                            immediate: false,
                            duration: 3,
                            easing: (x) =>
                                x < 0.5 ? 4 * x * x * x : 1 - Math.pow(-2 * x + 2, 3) / 2, // https://easings.net
                        });
                    });
                });

                requestAnimationFrame(raf);
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>
            <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Flip.min.js"></script>
            <script>
                src = "js/animation.js"
            </script>
        </header>