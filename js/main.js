const availableCities = new Set(['Saint Catherine', 'Nuweiba', 'Ras Sheetan', 'Taba', 'Dahab']);
const packagesMap = new Map([
    ['Dahab 1', {
        campName: 'Zouqaq',
        place: 'Dahab',
        durationDays: 5,
        persons: 2,
        price: 4200,
        description: `
            You will enjoy your holiday in Zouqaq Camp in a simple way; This package contain:
            -Room with 2 beds & bathroom.
            -Trip for Lagonna.
            -Visit the 3 pools.
            -Safari.
        `
    }],
    ['Dahab 2', {
        campName: 'Zouqaq',
        place: 'Dahab',
        durationDays: 5,
        persons: 2,
        price: 4500,
        description: `
            You will enjoy your holiday in Zouqaq Camp in a simple way; This package contain:
            -Room with 1 beds & bathroom.
            -Visit the Blue Lagon.
            -Visit the Blue Hole.
            -Visit AbuGaloum.
        `
    }],
    ['Dahab 3', {
        campName: 'Zouqaq',
        place: 'Dahab',
        durationDays: 5,
        persons: 2,
        price: 4700,
        description: `
            You will enjoy your holiday in Zouqaq Camp in a simple way; This package contain:
            -Room with 2 beds & bathroom.
            -Trip for Lagonna.
            -A Trip Full Board in the sea at yachit.
            -Safari
        `
    }],
    ['Nuweiba 1', {
        campName: 'Zouqaq',
        place: 'Nuweiba',
        durationDays: 5,
        persons: 2,
        price: 4200,
        description: `
            You will enjoy your holiday in Zouqaq Camp in a simple way; This package contain:
            -Room with 2 beds & bathroom.
            -Trip for Lagonna.
            -Visit the 3 pools.
            -Safari.
        `
    }],
    ['Nuweiba 2', {
        campName: 'Zouqaq',
        place: 'Nuweiba',
        durationDays: 5,
        persons: 2,
        price: 4500,
        description: `
            You will enjoy your holiday in Zouqaq Camp in a simple way; This package contain:
            -Room with 1 beds & bathroom.
            -Visit the Blue Lagon.
            -Visit the Blue Hole.
            -Visit AbuGaloum.
        `
    }],
    ['Nuweiba 3', {
        campName: 'Zouqaq',
        place: 'Nuweiba',
        durationDays: 5,
        persons: 2,
        price: 4700,
        description: `
            You will enjoy your holiday in Zouqaq Camp in a simple way; This package contain:
            -Room with 2 beds & bathroom.
            -Trip for Lagonna.
            -A Trip Full Board in the sea at yachit.
            -Safari
        `
    }],
    ['Taba 1', {
        campName: 'Zouqaq',
        place: 'Taba',
        durationDays: 5,
        persons: 2,
        price: 4200,
        description: `
            You will enjoy your holiday in Zouqaq Camp in a simple way; This package contain:
            -Room with 2 beds & bathroom.
            -Trip for Lagonna.
            -Visit the 3 pools.
            -Safari.
        `
    }],
    ['Taba 2', {
        campName: 'Zouqaq',
        place: 'Taba',
        durationDays: 5,
        persons: 2,
        price: 4500,
        description: `
            You will enjoy your holiday in Zouqaq Camp in a simple way; This package contain:
            -Room with 1 beds & bathroom.
            -Visit the Blue Lagon.
            -Visit the Blue Hole.
            -Visit AbuGaloum.
        `
    }],
    ['Taba 3', {
        campName: 'Zouqaq',
        place: 'Taba',
        durationDays: 5,
        persons: 2,
        price: 4700,
        description: `
            You will enjoy your holiday in Zouqaq Camp in a simple way; This package contain:
            -Room with 2 beds & bathroom.
            -Trip for Lagonna.
            -A Trip Full Board in the sea at yachit.
            -Safari
        `
    }],
    ['Ras Sheetan 1', {
        campName: 'Zouqaq',
        place: 'Ras Sheetan',
        durationDays: 5,
        persons: 2,
        price: 4200,
        description: `
            You will enjoy your holiday in Zouqaq Camp in a simple way; This package contain:
            -Room with 2 beds & bathroom.
            -Trip for Lagonna.
            -Visit the 3 pools.
            -Safari.
        `
    }],
    ['Ras Sheetan 2', {
        campName: 'Zouqaq',
        place: 'Ras Sheetan',
        durationDays: 5,
        persons: 2,
        price: 4500,
        description: `
            You will enjoy your holiday in Zouqaq Camp in a simple way; This package contain:
            -Room with 1 beds & bathroom.
            -Visit the Blue Lagon.
            -Visit the Blue Hole.
            -Visit AbuGaloum.
        `
    }],
    ['Ras Sheetan 3', {
        campName: 'Zouqaq',
        place: 'Ras Sheetan',
        durationDays: 5,
        persons: 2,
        price: 4700,
        description: `
            You will enjoy your holiday in Zouqaq Camp in a simple way; This package contain:
            -Room with 2 beds & bathroom.
            -Trip for Lagonna.
            -A Trip Full Board in the sea at yachit.
            -Safari
        `
    }],
    ['Saint Catherine 1', {
        campName: 'Zouqaq',
        place: 'Saint Catherine',
        durationDays: 5,
        persons: 2,
        price: 4200,
        description: `
            You will enjoy your holiday in Zouqaq Camp in a simple way; This package contain:
            -Room with 2 beds & bathroom.
            -Trip for Lagonna.
            -Visit the 3 pools.
            -Safari.
        `
    }],
    ['Saint Catherine 2', {
        campName: 'Zouqaq',
        place: 'Saint Catherine',
        durationDays: 5,
        persons: 2,
        price: 4500,
        description: `
            You will enjoy your holiday in Zouqaq Camp in a simple way; This package contain:
            -Room with 1 beds & bathroom.
            -Visit the Blue Lagon.
            -Visit the Blue Hole.
            -Visit AbuGaloum.
        `
    }],
    ['Saint Catherine 3', {
        campName: 'Zouqaq',
        place: 'Saint Catherine',
        durationDays: 5,
        persons: 2,
        price: 4700,
        description: `
            You will enjoy your holiday in Zouqaq Camp in a simple way; This package contain:
            -Room with 2 beds & bathroom.
            -Trip for Lagonna.
            -A Trip Full Board in the sea at yachit.
            -Safari
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