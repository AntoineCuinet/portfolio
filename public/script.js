/* 'as' permet de changer le nom, nomDefault est l'export par défaut                                */
/* Ceci permet d'inporter ici les fichiers necessaires afin de couper le code en plusieurs fichiers */
//import nomDefault, {nomExport1 as newName, nomExport2} from "./assets/scripts/nomFichier.js"



// loading page
const loader = document.querySelector('#loader');


window.addEventListener("load", function () {
    
    loader.classList.add('fondu-out');
    this.setTimeout(() => {
        loader.style.display = "none";
    }, 400);


    /* btn */
    // $(function() {  
    //     $('.btn')
    //       .on('mouseenter', function(e) {
    //               var parentOffset = $(this).offset(),
    //                 relX = e.pageX - parentOffset.left,
    //                 relY = e.pageY - parentOffset.top;
    //               $(this).find('span').css({top:relY, left:relX})
    //       })
    //       .on('mouseout', function(e) {
    //               var parentOffset = $(this).offset(),
    //                 relX = e.pageX - parentOffset.left,
    //                 relY = e.pageY - parentOffset.top;
    //           $(this).find('span').css({top:relY, left:relX})
    //       });
    //   });
      


    /* slider */
    const carousel = document.querySelector(".carousel");
    const wrapper = document.querySelector(".container-slider");
    const arrawBtns = document.querySelectorAll(".container-slider i");
    const firstCardWidth = document.querySelector(".carousel li").offsetWidth;
    const carouselChildrens = [...carousel.children];
    let isDragging = false, startX, startScrollLeft, timeoutId;
    let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

    carouselChildrens.slice(-cardPerView).reverse().forEach( card => {
        carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
    });
    carouselChildrens.slice(0, cardPerView).forEach( card => {
        carousel.insertAdjacentHTML("beforeend", card.outerHTML);
    });

    arrawBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            carousel.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
        })
    });

    const dragStart = (e) => {
        isDragging = true;
        carousel.classList.add("dragging");
        startX = e.pageX;
        startScrollLeft = carousel.scrollLeft;
    }
    const dragging = (e) => {
        if(!isDragging) return;
        carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
    }
    const dragStop = () => {
        isDragging = false;
        carousel.classList.remove("dragging");
    }

    const autoPlay = () => {
        if(this.window.innerWidth < 800) return;
        timeoutId = this.setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
    }
    autoPlay();

    const infiniteScroll = () => {
        if(carousel.scrollLeft === 0) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
            carousel.classList.remove("no-transition");
        } else if (Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.offsetWidth;
            carousel.classList.remove("no-transition");
        }
        this.clearTimeout(timeoutId);
        if(!wrapper.matches(":hover")) autoPlay();
    }
    
    carousel.addEventListener("mousedown", dragStart);
    carousel.addEventListener("mousemove", dragging);
    document.addEventListener("mouseup", dragStop);
    carousel.addEventListener("scroll", infiniteScroll);
    wrapper.addEventListener("mouseenter", () => this.clearTimeout(timeoutId));
    wrapper.addEventListener("mouseleave", autoPlay);




    /* nav-bar (hamburger) */
    const hamburgerToggler = document.querySelector(".hamburger");
    const navLinksContainer = document.querySelector(".navlinks-container");

    // let startX; // Position X au début du touch
    let distance; // Distance de glissement nécessaire pour fermer le menu

    const toggleNav = () => {
        hamburgerToggler.classList.toggle("open");

        const ariaToggle = hamburgerToggler.getAttribute("aria-expanded") === "true" ? "false" : "true";
        hamburgerToggler.setAttribute("aria-expanded", ariaToggle);

        navLinksContainer.classList.toggle("open");
    }
    hamburgerToggler.addEventListener("click", toggleNav);


    /* fermer le menu aux slides vers la gauche */
    document.addEventListener("touchstart", function (e) {
        startX = e.touches[0].clientX;
        distance = 120; //ajuster la valeur aux besoins
    });
    document.addEventListener("touchmove", function (e) {
        if (startX) {
            const currentX = e.touches[0].clientX;
            const deltaX = startX - currentX;
            // Si le glissement dépasse la distance définie, fermez le menu
            if (deltaX > distance) {
                navLinksContainer.classList.remove("open");
                hamburgerToggler.classList.remove("open");
                startX = null; // Réinitialisez la position de départ
            }

            // Si le glissement dépasse la distance définie dans l'autre sens, ouvrez le menu
            if (deltaX < -distance) {
                navLinksContainer.classList.add("open");
                hamburgerToggler.classList.add("open");
                startX = null; // Réinitialisez la position de départ
            }
        }
    });
    // Réinitialisez la position de départ lorsque le doigt est levé
    document.addEventListener("touchend", function () {
        startX = null;
    });

    
    /* fermer le menu si clic n'importe où sur le document */
    document.addEventListener("click", function (event) {
        // Vérifiez si le clic a eu lieu à l'extérieur du menu
        if (!navLinksContainer.contains(event.target) && !hamburgerToggler.contains(event.target)) {
            // Si c'est le cas, fermez le menu en retirant la classe "open"
            navLinksContainer.classList.remove("open");
            hamburgerToggler.classList.remove("open");
        }
    });

    new ResizeObserver(entries => { //gérer la transition du menu hamburger
        if(entries[0].contentRect.width <= 800){
            navLinksContainer.style.transition = "transform 0.3s ease-out";
        } else {
            navLinksContainer.style.transition = "none";
        }
    }).observe(document.body);


    /* button of scroll to top and navbar animatation */
    const header = document.querySelector('#navbar');
    const toTopBtn = document.querySelector("#to-top-btn");
    window.addEventListener("scroll", () => {
        header.classList.toggle("sticky", window.scrollY > 0);

        if(document.documentElement.scrollTop > window.innerHeight * 0.7)
            toTopBtn.classList.add("active");
        else 
            toTopBtn.classList.remove("active");
    });
    toTopBtn.addEventListener("click", () => {
        if (toTopBtn.classList.contains("active")) {
            window.scrollTo({
                top: 0
            });
        }
    });
});