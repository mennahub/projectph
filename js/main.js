const availableCities = new Set(['Saint Catherine', 'Nuweiba', 'Ras Shetaan', 'Taba', 'Dahab']);
const packagesMap = new Map([
    ['Dahab 1', {
        campName: 'Zouqaq',
        place: 'Dahab',
        durationDays: 5,
        persons: 2,
        price: 4200,
        description: `<br>
            -Room with 2 beds & bathroom.<br>
            -Trip for Lagonna.<br>
            -Visit the 3 pools.<br>
            -Safari.<br>
            -Transportation.
        `
    }],
    ['Dahab 2', {
        campName: 'Zouqaq',
        place: 'Dahab',
        durationDays: 5,
        persons: 2,
        price: 4500,
        description: `<br>
        -Room with 1 beds & bathroom.<br>
            -Visit the Blue Lagon.<br>
            -Visit the Blue Hole.<br>
            -Visit AbuGaloum.<br>
            -Transportation.
        `
    }],
    ['Dahab 3', {
        campName: 'Zouqaq',
        place: 'Dahab',
        durationDays: 5,
        persons: 2,
        price: 4700,
        description: `<br>
            -Room with 2 beds & bathroom.<br>
            -Trip for Lagonna.<br>
            -A Trip Full Board in the sea at yachit.<br>
            -Safari.<br>
            -Transportation.
        `
    }],
    ['Nuweiba 1', {
        campName: 'Magarra',
        place: 'Nuweiba',
        durationDays: 5,
        persons: 2,
        price: 2650,
        description: `<br>
        -Room with 2 beds & bathroom.<br>
        -Trip for Wadi el Washwashi.<br>
        -Visit the Coloured Canyon.<br>
        -Snorkeling.<br>
        -Transportation.
        `
    }],
    ['Nuweiba 2', {
        campName: 'Magarra',
        place: 'Nuweiba',
        durationDays: 5,
        persons: 2,
        price: 2800,
        description: `<br>
        -Room with 1 beds & bathroom.<br>
        -Visit Abu Hamada Canyon.<br>
        -Visit Nawamis Area.<br>
        -Safari.<br>
        -Transportation.
        `
    }],
    ['Nuweiba 3', {
        campName: 'Magarra',
        place: 'Nuweiba',
        durationDays: 5,
        persons: 2,
        price: 2950,
        description: `<br>
        -Room with 2 beds & bathroom.<br>
        -Snorkeling.<br>
        -Visit the Nuweiba Castle.<br>
        -Visit Al Tarabin Castle.<br>
        -Transportation.
        `
    }],
    ['Taba 1', {
        campName: 'Run Away',
        place: 'Taba',
        durationDays: 5,
        persons: 2,
        price: 2300,
        description: `<br>
        -Room with 2 beds & bathroom.<br>
        -Scuba Diving.<br>
        -Visit Coloured Cayon.<br>
        -Castle Zaman.<br>
        -Transportaion.
        `
    }],
    ['Taba 2', {
        campName: 'Run Away',
        place: 'Taba',
        durationDays: 5,
        persons: 2,
        price: 2500,
        description: `<br>
        -Room with 2 beds & bathroom.<br>
        -Visit Wishwashi Canyon.<br>
        -Visit Pharaoh's island.<br>
        -Visit Ras Mohammed Park.<br>
        -Transportaion.
        `
    }],
    ['Taba 3', {
        campName: 'Run Away',
        place: 'Taba',
        durationDays: 5,
        persons: 2,
        price: 2950,
        description: `<br>
        -Room with 2 beds & bathroom.<br>
        -Full day at Fajod Bay.<br>
        -Scuba Diving.<br>
        -Visit Ras Mohammed Park.<br>
        -Transportaion.
        `
    }],
    ['Ras Shetaan 1', {
        campName: 'Mixer',
        place: 'Ras Shetaan',
        durationDays: 5,
        persons: 2,
        price: 2250,
        description: `<br>
        -Room with 2 beds & bathroom.<br>
        -Diving in Ras Mamlish.<br>
        -Visit the Coloured Canyon.<br>
        -Tranportations.
        `
    }],
    ['Ras Shetaan 2', {
        campName: 'Mixer',
        place: 'Ras Sheetan',
        durationDays: 5,
        persons: 2,
        price: 2350,
        description: `<br>
        -Room with 2 beds & bathroom.<br>
        -Diving in Dense.<br>
        -Trip for Sayedeen Village.<br>
        -Tranportations.
        `
    }],
    ['Ras Shetaan 3', {
        campName: 'Mixer',
        place: 'Ras Sheetan',
        durationDays: 5,
        persons: 2,
        price: 2500,
        description: `<br>
        -Room with 2 beds & bathroom.<br>
        -Trip for Sayedeen Village.<br>
        -Visit the Nuwamis.<br>
        -Tranportations.
        `
    }],
    ['Saint Catherine 1', {
        campName: 'Gebal',
        place: 'Saint Catherine',
        durationDays: 3,
        persons: 1,
        price: 400,
        description: `<br>
        -Trip for 3 Pools.<br>
        -Hiking to Gabal Mousa.<br>
        -Transportation.
        `
    }],
    ['Saint Catherine 2', {
        campName: 'Gebal',
        place: 'Saint Catherine',
        durationDays: 3,
        persons: 1,
        price: 500,
        description: `<br>
        -Trip for 3 Pools & Safari.<br>
        -Hiking to Gabal Mousa.<br>
        -Transportation.
        `
    }],
    ['Saint Catherine 3', {
        campName: 'Gebal',
        place: 'Saint Catherine',
        durationDays: 3,
        persons: 1,
        price: 700,
        description: `<br>
        -Trip for 3 Pools & Safari.<br>
        -Hiking to Gabal Mousa.<br>
        -A night at Gabl Al Tawelaat.<br>
        -Transportation.
        `
    }],
]);

(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    //login,signup
    
})(jQuery);
var modal = document.getElementById('id01');
            window.onclick = function(event) {
                if (event.target ==modal) {
                    modal.style.display ="none";
                }
            }
var modal = document.getElementById('id02');
            window.onclick = function(event) {
                if (event.target ==modal) {
                    modal.style.display ="none";
                }
            }
    
            
            function linkToPackage() {
                const city = $('#city-input').val()
                
                switch(city) {
                    case 'Saint Catherine':
                        window.location = 'saint.html';
                        break;
                    case 'Dahab':
                        window.location = 'da.html';
                        break;
                    case 'Nuweiba':
                        window.location = 'nu.html';
                        break;
                    case 'Ras Sheetan':
                        window.location = 'ras.html';
                        break;
                    case 'Taba':
                        window.location = 'ta.html';
                        break;
                    default:
                        window.location = '404.html'
                }
            }

            $('#city-search').on('click', linkToPackage)
            $('#city-input').on('keypress', (e) => {
                if(e.code === 'Enter') linkToPackage();
            })
            $('#city-input').on('change', (e) => {
                const city = e.target.value
                if (availableCities.has(city)) linkToPackage()
            })
