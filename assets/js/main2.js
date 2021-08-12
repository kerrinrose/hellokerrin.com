//scroll reveal
ScrollReveal().reveal('.fade-1' , { delay: 00, duration: 1000  });
ScrollReveal().reveal('.header-2' , { delay: 600, duration: 1000 });
ScrollReveal().reveal('.header-3' , { delay: 1200, duration: 1000 });
ScrollReveal().reveal('.about' , {viewFactor: 0.5, duration: 1000 });
ScrollReveal().reveal('header' , {delay: 0, duration: 1000 });

//type change
setTimeout(function(){ 

    var typed = new Typed('#type', {
        strings: ["a UX designer", "multi-disciplinary", "a plant lover", " a digital designer", "a content strategist", "a lefty", "a skier",
                    "a motion designer", "a web developer", "an introvert", "a phenomenal woman", "a book lover", "a vegan", "a jersey girl" ],
        typeSpeed: 70,
        shuffle: true,
        backDelay: 3000,
        fadeOut: true,
        showCursor: false,
        loop: true,
        loopCount: Infinity,
      
      
      });

}, 5000);


//color theme

$( document ).ready(function() {
    var color = Math.floor((Math.random() *3) + 1);
    var theme = "theme-" + color;
    console.log(theme);

    $("body").addClass(theme);
});

