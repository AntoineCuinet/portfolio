// loading page
const loader = document.querySelector('#loader');

window.addEventListener("load", function () {
    
    loader.classList.add('fondu-out');
    this.setTimeout(() => {
        loader.style.display = "none";
    }, 400);

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
});