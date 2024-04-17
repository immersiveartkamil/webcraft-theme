document.addEventListener("DOMContentLoaded", function () {
  var header = document.querySelector(".site-header");
  const page = document.querySelector(".content-area");
  const openMenuButton = document.getElementById("openmenu");

  window.addEventListener("scroll", function () {
    page.classList.remove("menuopen");
    if (window.scrollY >= 100) {
      header.classList.add("w-sticky");
    } else {
      header.classList.remove("w-sticky");
    }
  });

  // Event listener to remove the w-sticky class when the button is clicked

  openMenuButton.addEventListener("click", function () {
    header.classList.remove("w-sticky");
    page.classList.add("menuopen");
  });

  var links = document.querySelectorAll('a[href^="#"]');

  links.forEach(function (link) {
    link.addEventListener("click", function (event) {
      // Prevent the default action
      event.preventDefault(); // Get the target element

      var targetId = this.getAttribute("href");
      var targetElement = document.querySelector(targetId); // Smooth scroll to target

      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: "smooth",
        });
      }
    });
  });
});

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

  function my_stuff() {}
}
checkingGsap();
