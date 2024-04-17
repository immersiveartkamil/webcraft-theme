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
    // Define an array of image URLs
    const images = [
      "http://izi-design.local/wp-content/uploads/2024/04/IMG_1661photo.jpg",
      "http://izi-design.local/wp-content/uploads/2024/04/IMG_1642photo.jpg",
      "http://izi-design.local/wp-content/uploads/2024/04/IMG_1555photo.jpg",
      "http://izi-design.local/wp-content/uploads/2024/04/0E8A6331-4-scaled.jpg",
      "http://izi-design.local/wp-content/uploads/2024/04/0E8A6326-2-scaled.jpg",
      "http://izi-design.local/wp-content/uploads/2024/04/0E8A6363-17-scaled.jpg",
    ];

    let currentIndex = 0; // Initialize the index of the current image

    // Function to change to the next image

    function nextImage() {
      // Loop through each portfolio-image element
      const portfolioImages = document.querySelectorAll(".portfolio-image img");
      portfolioImages.forEach((image, index) => {
        // Update the image source based on the next index
        const nextIndex = (currentIndex + index + 1) % images.length;
        image.src = images[nextIndex];
      });
      currentIndex = (currentIndex + 1) % images.length; // Update the index
    }

    // Add event listener to the next-svg
    const nextSvg = document.getElementById("next-svg");
    nextSvg.addEventListener("click", nextImage);
  }
}
checkingGsap();
