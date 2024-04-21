function checkingGsap() {
  // wait until gsap & ScrollTrigger available
  console.log("function");
  let chck_if_gsap_loaded = setInterval(function () {
    if (window.gsap && window.ScrollTrigger) {
      // register scrolTrigger
      gsap.registerPlugin(ScrollTrigger);

      // ... do your thing
      my_stuff();

      // clear interval
      clearInterval(chck_if_gsap_loaded);
    }
    {
      console.log("not found");
    }
  }, 500);

  function my_stuff() {
    // Define the media query string
    const mediaQuery = window.matchMedia("(max-width: 768px)");

    // Check if the media query matches initially
    if (mediaQuery.matches) {
      const imagesSets = [
        ["http://izi-design.local/wp-content/uploads/2024/04/eds10.jpg"],
        ["http://izi-design.local/wp-content/uploads/2024/04/eds9.jpg"],
        ["http://izi-design.local/wp-content/uploads/2024/04/eds8.jpg"],
        ["http://izi-design.local/wp-content/uploads/2024/04/eds7.jpg"],
        ["http://izi-design.local/wp-content/uploads/2024/04/eds6.jpg"],
        [
          "http://izi-design.local/wp-content/uploads/2024/04/0E8A6377-24-scaled.jpg",
        ],
        [
          "http://izi-design.local/wp-content/uploads/2024/04/0E8A6372-23-scaled.jpg",
        ],
        [
          "http://izi-design.local/wp-content/uploads/2024/04/0E8A6369-21-scaled.jpg",
        ],
        [
          "http://izi-design.local/wp-content/uploads/2024/04/IMG-20230222-WA0007.jpg",
        ],
        [
          "http://izi-design.local/wp-content/uploads/2024/04/IMG-20230222-WA0004.jpg",
        ],
        [
          "http://izi-design.local/wp-content/uploads/2024/04/IMG-20230222-WA0009.jpg",
        ],
        [
          "http://izi-design.local/wp-content/uploads/2024/04/20230301_134425-scaled.jpg",
        ],
        [
          "http://izi-design.local/wp-content/uploads/2024/04/20230214_163124-scaled.jpg",
        ],
        [
          "http://izi-design.local/wp-content/uploads/2024/04/Screenshot_20230726_174509_Samsung-Internet.jpg",
        ],
        // Add more sets if needed
      ];

      let currentSetIndex = 0; // Initialize the index of the current image set

      // Function to change to the next image
      function nextImage() {
        const portfolioImages = document.querySelectorAll(
          ".portfolio-image img"
        );
        portfolioImages.forEach((image, index) => {
          image.style.transition = "opacity 0.5s"; // Set transition duration
          image.style.opacity = 0; // Fade out the current image
          setTimeout(() => {
            const nextIndex = (index + 1) % imagesSets[currentSetIndex].length;
            image.src = imagesSets[currentSetIndex][nextIndex]; // Update image source
            setTimeout(() => {
              image.style.opacity = 1; // Fade in the new image
            }, 20); // Add a slight delay for smoother transition
          }, 500); // Wait for the fade-out transition to complete
        });
        currentSetIndex = (currentSetIndex + 1) % imagesSets.length; // Update the index for the next set of images
      }

      // Function to change to the previous image
      function previousImage() {
        const portfolioImages = document.querySelectorAll(
          ".portfolio-image img"
        );
        portfolioImages.forEach((image, index) => {
          image.style.transition = "opacity 0.5s"; // Set transition duration
          image.style.opacity = 0; // Fade out the current image
          setTimeout(() => {
            let previousIndex = index - 1;
            if (previousIndex < 0) {
              previousIndex = imagesSets[currentSetIndex].length - 1;
            }
            image.src = imagesSets[currentSetIndex][previousIndex]; // Update image source
            setTimeout(() => {
              image.style.opacity = 1; // Fade in the new image
            }, 20); // Add a slight delay for smoother transition
          }, 500); // Wait for the fade-out transition to complete
        });
        currentSetIndex =
          (currentSetIndex - 1 + imagesSets.length) % imagesSets.length; // Update the index for the previous set of images
      }

      const previousSvg = document.getElementById("previous-svg");
      previousSvg.addEventListener("click", previousImage);

      const nextSvg = document.getElementById("next-svg");
      nextSvg.addEventListener("click", nextImage);

      function goToGallery() {
        window.location.href = "http://localhost:3000/galeria/";
      }

      const gallerySvg = document.getElementById("gallery-svg");
      gallerySvg.addEventListener("click", goToGallery);

      function createAboutUsAnimation(target) {
        gsap.from(target, {
          y: 100,
          opacity: 0,
          duration: 1,
          ease: "power4.out",
          scrollTrigger: {
            trigger: target,
            start: "top 90%",
            end: "bottom 10%",
            toggleActions: "play none none reverse",
          },
        });
      }

      const headings = document.querySelectorAll(".about_us__heading");
      const texts = document.querySelectorAll(".about_us__text");

      headings.forEach(createAboutUsAnimation);
      texts.forEach(createAboutUsAnimation);

      gsap.utils.toArray(".services-row").forEach((row, index) => {
        gsap.from(row, {
          opacity: 0,
          y: 20,
          scrollTrigger: {
            trigger: row,
            start: "top 90%",
            end: "bottom bottom", // End animation when bottom of services section reaches the bottom of the viewport
            scrub: 1,
            toggleActions: "play none none reverse",
          },
        });
      });

      gsap.from(".footer__main_heading", {
        opacity: 0,
        y: 20,
        scrollTrigger: {
          trigger: ".footer__main_heading",
          start: "top bottom",
          end: "bottom bottom",
          scrub: 1,
        },
      });

      gsap.utils.toArray(".footer__col, .footer__heading").forEach((col) => {
        gsap.from(col, {
          opacity: 0,
          y: 20,
          scrollTrigger: {
            trigger: col,
            start: "top bottom",
            end: "bottom bottom",
            scrub: 1,
          },
        });
      });

      const footerTimeline = gsap.timeline();

      footerTimeline.to(".footer", {
        opacity: 1,
      });

      ScrollTrigger.create({
        trigger: ".footer",
        start: "top bottom", // Trigger when the top of the contact section hits the bottom of the viewport
        end: "center bottom",
        scrub: true,
        animation: footerTimeline,
      });

      // Animation for form section
      gsap.from(".form", {
        opacity: 0,
        y: 20,
        scrollTrigger: {
          trigger: ".social-media",
          start: "top bottom",
          end: "bottom bottom",
          scrub: 1,
        },
      });

      // Animation for map section
      gsap.from(".mapa", {
        opacity: 0,
        y: 20,
        scrollTrigger: {
          trigger: ".mapa",
          start: "top bottom",
          end: "bottom bottom",
          scrub: 1,
        },
      });
    } else {
      const imagesSets = [
        [
          "http://izi-design.local/wp-content/uploads/2024/04/eds10.jpg",
          "http://izi-design.local/wp-content/uploads/2024/04/eds9.jpg",
          "http://izi-design.local/wp-content/uploads/2024/04/eds8.jpg",
        ],
        [
          "http://izi-design.local/wp-content/uploads/2024/04/eds7.jpg",
          "http://izi-design.local/wp-content/uploads/2024/04/eds6.jpg",
          "http://izi-design.local/wp-content/uploads/2024/04/eds3.jpg",
        ],
        [
          "http://izi-design.local/wp-content/uploads/2024/04/0E8A6372-23-scaled.jpg",
          "http://izi-design.local/wp-content/uploads/2024/04/0E8A6369-21-scaled.jpg",
          "http://izi-design.local/wp-content/uploads/2024/04/0E8A6377-24-scaled.jpg",
        ],
        [
          "http://izi-design.local/wp-content/uploads/2024/04/IMG-20230222-WA0004.jpg",
          "http://izi-design.local/wp-content/uploads/2024/04/IMG-20230222-WA0009.jpg",
          "http://izi-design.local/wp-content/uploads/2024/04/IMG-20230222-WA0007.jpg",
        ],
        [
          "http://izi-design.local/wp-content/uploads/2024/04/20230214_163124-scaled.jpg",
          "http://izi-design.local/wp-content/uploads/2024/04/Screenshot_20230726_174509_Samsung-Internet.jpg",
          "http://izi-design.local/wp-content/uploads/2024/04/Screenshot_20230726_174553_Samsung-Internet.jpg",
        ],

        // Add more sets if needed
      ];

      let currentSetIndex = 0; // Initialize the index of the current image set

      // Function to change to the next image
      function nextImage() {
        const portfolioImages = document.querySelectorAll(
          ".portfolio-image img"
        );
        portfolioImages.forEach((image, index) => {
          image.style.transition = "opacity 0.5s"; // Set transition duration
          image.style.opacity = 0; // Fade out the current image
          setTimeout(() => {
            const nextIndex = (index + 1) % imagesSets[currentSetIndex].length;
            image.src = imagesSets[currentSetIndex][nextIndex]; // Update image source
            setTimeout(() => {
              image.style.opacity = 1; // Fade in the new image
            }, 20); // Add a slight delay for smoother transition
          }, 500); // Wait for the fade-out transition to complete
        });
        currentSetIndex = (currentSetIndex + 1) % imagesSets.length; // Update the index for the next set of images
      }

      // Function to change to the previous image
      function previousImage() {
        const portfolioImages = document.querySelectorAll(
          ".portfolio-image img"
        );
        portfolioImages.forEach((image, index) => {
          image.style.transition = "opacity 0.5s"; // Set transition duration
          image.style.opacity = 0; // Fade out the current image
          setTimeout(() => {
            let previousIndex = index - 1;
            if (previousIndex < 0) {
              previousIndex = imagesSets[currentSetIndex].length - 1;
            }
            image.src = imagesSets[currentSetIndex][previousIndex]; // Update image source
            setTimeout(() => {
              image.style.opacity = 1; // Fade in the new image
            }, 20); // Add a slight delay for smoother transition
          }, 500); // Wait for the fade-out transition to complete
        });
        currentSetIndex =
          (currentSetIndex - 1 + imagesSets.length) % imagesSets.length; // Update the index for the previous set of images
      }

      const previousSvg = document.getElementById("previous-svg");
      previousSvg.addEventListener("click", previousImage);

      const nextSvg = document.getElementById("next-svg");
      nextSvg.addEventListener("click", nextImage);

      function goToGallery() {
        window.location.href = "http://localhost:3000/galeria/";
      }

      const gallerySvg = document.getElementById("gallery-svg");
      gallerySvg.addEventListener("click", goToGallery);

      function createAboutUsAnimation(target) {
        gsap.from(target, {
          y: 100,
          opacity: 0,
          duration: 1,
          ease: "power4.out",
          scrollTrigger: {
            trigger: target,
            start: "top 90%",
            end: "bottom 10%",
            toggleActions: "play none none reverse",
          },
        });
      }

      const headings = document.querySelectorAll(".about_us__heading");
      const texts = document.querySelectorAll(".about_us__text");

      headings.forEach(createAboutUsAnimation);
      texts.forEach(createAboutUsAnimation);

      gsap.utils.toArray(".services-row").forEach((row, index) => {
        gsap.from(row, {
          opacity: 0,
          y: 20,
          scrollTrigger: {
            trigger: row,
            start: "top 90%",
            end: "bottom bottom", // End animation when bottom of services section reaches the bottom of the viewport
            scrub: 1,
            toggleActions: "play none none reverse",
          },
        });
      });

      gsap.from(".footer__main_heading", {
        opacity: 0,
        y: 20,
        scrollTrigger: {
          trigger: ".footer__main_heading",
          start: "top 60%",
          end: "bottom bottom",
          scrub: 1,
        },
      });

      gsap.utils.toArray(".footer__col, .footer__heading").forEach((col) => {
        gsap.from(col, {
          opacity: 0,
          y: 20,
          scrollTrigger: {
            trigger: col,
            start: "top 70%",
            end: "bottom bottom",
            scrub: 1,
          },
        });
      });

      const footerTimeline = gsap.timeline();

      footerTimeline.to(".footer", {
        opacity: 1,
      });

      ScrollTrigger.create({
        trigger: ".footer",
        start: "top bottom", // Trigger when the top of the contact section hits the bottom of the viewport
        end: "center bottom",
        scrub: true,
        animation: footerTimeline,
      });

      // Animation for form section
      gsap.from(".form", {
        opacity: 0,
        y: 20,
        scrollTrigger: {
          trigger: ".form",
          start: "top bottom",
          end: "bottom bottom",
          scrub: 1,
        },
      });

      // Animation for map section
      gsap.from(".mapa", {
        opacity: 0,
        y: 20,
        scrollTrigger: {
          trigger: ".mapa",
          start: "top bottom",
          end: "bottom bottom",
          scrub: 1,
        },
      });
    }

    // Attach event listener to respond to changes in the media query
    mediaQuery.addEventListener("change", (event) => {
      if (event.matches) {
        // Media query matches
        console.log("Viewport width is now less than or equal to 768px");
      } else {
        // Media query does not match
        console.log("Viewport width is now greater than 768px");
      }
    });
  }
}
checkingGsap();
