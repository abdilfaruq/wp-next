document.addEventListener("DOMContentLoaded", function () {
  // Wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", function () {
    /* ================= > Front Page - Animations < ================= */

    if (document.querySelector(".about_section")) {
      const animationObject = document.querySelector(".about_section");
      gsap.from(animationObject.querySelectorAll("h2"), {
        scrollTrigger: {
          trigger: animationObject,
          start: "top 80%",
          toggleActions: "play none none none",
          
        },
        autoAlpha: 0,
        y: 200,
        opacity: 0,
        duration: 1.0,
      
      });
    }

    if (document.querySelector(".hero_section")) {
      const animationObject = document.querySelector(".hero_section");
      gsap.from(animationObject.querySelectorAll("img"), {
        scrollTrigger: {
          trigger: animationObject,
          start: "top 80%",
          toggleActions: "play none none none",
        },
        autoAlpha: 0,
        y: 200,
        opacity: 0,
        duration: 1.0,
      
      });
    }


    if (document.querySelector(".about_section")) {
      const animationObject = document.querySelector(".hero_section");
      gsap.from(animationObject.querySelectorAll("h2, p"), {
        scrollTrigger: {
          trigger: animationObject,
          start: "top 80%",
          toggleActions: "play none none none",
        },
        autoAlpha: 0,
        y: 200,
        opacity: 0,
        duration: 1.0,
        
      });
    }

    if (document.querySelector(".video_group")) {
      const animationObject = document.querySelector(".video_group");
      gsap.from(animationObject.querySelectorAll("h2, p"), {
        scrollTrigger: {
          trigger: animationObject,
          start: "top 80%",
          toggleActions: "play none none none",
        },
        autoAlpha: 0,
        y:-100,
        opacity: 0,
        duration: 1.5,
       
      });
    }

    if (document.querySelector(".intro_section")) {
      const animationObject = document.querySelector(".intro_section");
      gsap.from(animationObject.querySelectorAll("h2"), {
        scrollTrigger: {
          trigger: animationObject,
          start: "top 80%",
          toggleActions: "play none none none",
       
        },
        autoAlpha: 0,
        x:200,
        opacity: 0,
        duration: 1.5,
       
      });
    }

    if (document.querySelector(".our_articles")) {
      const animationObject = document.querySelector(".our_articles");
      gsap.from(animationObject.querySelectorAll("h2, p"), {
        scrollTrigger: {
          trigger: animationObject,
          start: "top 80%",
          toggleActions: "play none none none",
        },
        autoAlpha: 0,
        y:-200,
        x: -50,
        opacity: 0,
        duration: 1.5,
     
      });
    }

    if (document.querySelector(".about_free")) {
      const animationObject = document.querySelector(".about_free");
      gsap.from(animationObject.querySelectorAll("h2, p"), {
        scrollTrigger: {
          trigger: animationObject,
          start: "top 80%",
          toggleActions: "play none none none",
        },
        autoAlpha: 0,
        y:-200,
        x: -50,
        opacity: 0,
        duration: 1.5,
     
      });
    }


    /* ================= > Front Page - Animations < ================= */
  });
});
