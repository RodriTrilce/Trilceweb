if (document.querySelector('.blog.swiper-container')) {
    var blogSlider = document.querySelector('.blog.swiper-container');
    var mobileItemsSelector = blogSlider.dataset.mobileItems;
    var tabItemsSelector = blogSlider.dataset.tabItems;
    var desktopItemsSelector = blogSlider.dataset.desktopItems;
    
    
} else{
    var blogSlider = 'test';
    var mobileItemsSelector = 3;
    var tabItemsSelector = 2;
    var desktopItemsSelector = 1;
}
if (document.querySelector('.rt-case-study-box.swiper-container')) {
    var curseSlider = document.querySelector('.rt-case-study-box.swiper-container');
    var mobileItemsSelector2 = curseSlider.dataset.mobileItems;
    var tabItemsSelector2 = curseSlider.dataset.tabItems;
    var desktopItemsSelector2 = curseSlider.dataset.desktopItems;
    
    
}
var swiper = new Swiper('.blog.swiper-container', {
    slidesPerView: mobileItemsSelector,
    spaceBetween: 30,
    loop: true,
    // init: false,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: mobileItemsSelector,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: tabItemsSelector,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: desktopItemsSelector,
            spaceBetween: 30,
        },
    }
});

var swiper = new Swiper('.rt-case-study-box.swiper-container', {
    slidesPerView: mobileItemsSelector2,
    spaceBetween: 30,
    loop: true,
    // init: false,
    pagination: {
        el: '.swiper-pagination2',
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: mobileItemsSelector2,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: tabItemsSelector2,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: desktopItemsSelector2,
            spaceBetween: 30,
        },
    }
});

if (document.querySelector('.clients.swiper-container')) {
    var clientSlider = document.querySelector('.clients.swiper-container');
    var mobileItemsSelector3 = clientSlider.dataset.mobileItems;
    var tabItemsSelector3 = clientSlider.dataset.tabItems;
    var desktopItemsSelector3 = clientSlider.dataset.desktopItems;
    
    
}

var swiper = new Swiper('.clients.swiper-container', {
    slidesPerView: mobileItemsSelector3,
    spaceBetween: 30,
    loop: true,
    // init: false,
    pagination: {
       // el: '.swiper-pagination3',
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: mobileItemsSelector3,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: tabItemsSelector3,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: desktopItemsSelector3,
            spaceBetween: 30,
        },
    }
});

if (document.querySelector('.rt-event.element-two.swiper-container')) {
    var eventSlider = document.querySelector('.rt-event.element-two.swiper-container');
    var mobileItemsSelector4 = eventSlider.dataset.mobileItems;
    var tabItemsSelector4 = eventSlider.dataset.tabItems;
    var desktopItemsSelector4 = eventSlider.dataset.desktopItems;
    
    
}

var swiper = new Swiper('.rt-event.element-two.swiper-container', {
    slidesPerView: mobileItemsSelector4,
    spaceBetween: 30,
    loop: true,
    // init: false,
    pagination: {
       el: '.swiper-pagination3',
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: mobileItemsSelector4,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: tabItemsSelector4,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: desktopItemsSelector4,
            spaceBetween: 30,
        },
    }
});

if (document.querySelector('.coursecat.swiper-container')) {
    var coursecatSlider = document.querySelector('.coursecat.swiper-container');
    var mobileItemsSelector5 = coursecatSlider.dataset.mobileItems;
    var tabItemsSelector5 = coursecatSlider.dataset.tabItems;
    var desktopItemsSelector5 = coursecatSlider.dataset.desktopItems;
    
    
}

var swiper = new Swiper('.coursecat.swiper-container', {
    slidesPerView: mobileItemsSelector5,
    spaceBetween: 30,
    loop: true,
    // init: false,
    pagination: {
        el: '.swiper-pagination5',
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: mobileItemsSelector5,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: tabItemsSelector5,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: desktopItemsSelector5,
            spaceBetween: 30,
        },
    }
});