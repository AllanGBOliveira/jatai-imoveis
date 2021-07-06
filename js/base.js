/* global google, YT */

//--Wrapper Height--------------------------------------------------------------------------------//

function wrapperMinHeight() {
    let wrapper = document.getElementById('wrapper'),
        headerHeight = document.getElementById('header').clientHeight,
        footerHeight = document.getElementById('footer').clientHeight,
        wrapperHeight = window.innerHeight - (headerHeight + footerHeight);
    wrapper.style.minHeight = `${wrapperHeight}px`;
}

window.addEventListener('load', wrapperMinHeight);
window.addEventListener('resize', wrapperMinHeight);

//--Sliders---------------------------------------------------------------------------------------//

var swiperTranslations = {
    firstSlideMessage: 'Esse é o primeiro slide',
    lastSlideMessage: 'Esse é o último slide',
    nextSlideMessage: 'Próximo Slide',
    paginationBulletMessage: 'Ir para o slide {{index}}',
    prevSlideMessage: 'Slide Anterior'
};

function setSwiperMessage(msg) {
    swiperTranslations.containerMessage = msg;
    return swiperTranslations;
}

/* eslint-disable no-undef */

//--Banner Home -----------------------------------//
new Swiper('.swiper-banner', {
    a11y: setSwiperMessage('Banner Principal'),
    autoplay: {
        delay: 5000
    },
    keyboard: true,
    lazy: {
        loadPrevNext: true
    },
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    speed: 500,
    breakpoints: {
        992: {
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            }
        }
    }
});

//--Slider Gallery Test----------------------------//

new Swiper('.swiper-gallery-test', {
    a11y: setSwiperMessage('Slider Galeria'),
    lazy: {
        loadPrevNext: true
    },
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    speed: 500
});

//--Make FancyBox integration with Swiper Slider--------------------------------------------------//

let hasGallery = document.querySelectorAll('.swiper-gallery').length;

if (hasGallery) {
    jQuery('.swiper-gallery').each(function (index) {
        var sliderGalleryId = 'sliderGallery' + index;
        this.id = sliderGalleryId;
        jQuery('.swiper-gallery')[index].id = sliderGalleryId;
        var sliderGallery = '#' + sliderGalleryId;

        jQuery().fancybox({
            selector: `${sliderGallery} .swiper-slide:not(.swiper-slide-duplicate)`,
            animationEffect: 'fade',
            backFocus: false
        });

        jQuery(document).on('click', `${sliderGallery} .swiper-slide-duplicate`, function () {
            var $slides = jQuery(this).parent().children(`${sliderGallery} .swiper-slide:not(.swiper-slide-duplicate)`).children();
            $slides.eq((jQuery(this).attr('data-swiper-slide-index') || 0) % $slides.length).trigger('click.fb-start', { $trigger: jQuery(this) });
            return false;
        });
    });
}

/* eslint-enable no-undef */

//--Fancybox 3------------------------------------------------------------------------------------//

jQuery('[data-fancybox]').fancybox({
    animationEffect: 'fade'
});

jQuery('[data-fancybox="video"]').fancybox({
    smallBtn: true
});

//--Custom Input File-----------------------------------------------------------------------------//

document.querySelectorAll('input[type="file"]').forEach(function (e) {
    let label = e.nextElementSibling;

    e.addEventListener('change', function () {
        let fileName = '';

        if (this.files && this.files.length > 1) {
            fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
        } else if (this.value) {
            fileName = this.value.split('\\').pop();
        }
        label.childNodes[1].innerHTML = fileName;
    });
});

//--Switch Password Visibility--------------------------------------------------------------------//

// eslint-disable-next-line
function switchPasswordVisibility(e) {
    let x = e.previousElementSibling;
    x.type = x.type === 'password' ? 'text' : 'password';
}

//--Custom Select---------------------------------------------------------------------------------//

document.querySelectorAll('select').forEach(e => {
    let label = e.nextElementSibling;
    e.addEventListener('change', () => {
        label.childNodes[1].innerHTML = e.options[e.selectedIndex].text;
    });
});

//--State - City----------------------------------------------------------------------------------//

if (document.querySelector('#state')) {
    loadJSON('libs/states-and-cities.json', (response) => {
        let json = JSON.parse(response),
            selectState = document.getElementById('state'),
            selectCity = document.getElementById('city'),
            labelState = selectState.nextElementSibling.childNodes[1],
            labelCity = selectCity.nextElementSibling.childNodes[1],
            labelCityInitialText = labelCity.innerHTML;

        selectState.add(
            new Option(labelState.innerHTML, '')
        );

        json.forEach(e => {
            selectState.add(
                new Option(e.sigla, e.sigla)
            );
        });

        selectState.addEventListener('change', () => {
            selectCity.innerHTML = '';

            let options = `<option value="">${labelCityInitialText}</option>`;
            json.forEach(e => {
                if (e.sigla === selectState.options[selectState.selectedIndex].text) {
                    e.cidades.forEach(c => {
                        options += `<option value="${c}">${c}</option>`;
                    });
                    selectCity.removeAttribute('disabled');
                }
            });
            selectCity.innerHTML = options;
            selectCity.value = '';
            labelCity.innerHTML = labelCityInitialText;
        });
    });
}

function loadJSON(path, callback) {
    var xobj = new XMLHttpRequest();
    xobj.overrideMimeType('application/json');
    xobj.open('GET', path, true);
    xobj.onreadystatechange = function () {
        if (xobj.readyState === 4 && xobj.status === 200) {
            callback(xobj.responseText); // Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
        }
    };
    xobj.send(null);
}

//--iMask Masks-----------------------------------------------------------------------------------//

document.querySelectorAll('.tel-mask').forEach(e => {
    // eslint-disable-next-line
    new IMask(e, {
        mask: [
            { mask: '(00) 0000-0000' },
            { mask: '(00) 0 0000-0000' }
        ]
    });
});

function maskMoney(e) {
    const args = {
        // afterFormat(e) { console.log('afterFormat', e); },
        allowNegative: false,
        // beforeFormat(e) { console.log('beforeFormat', e); },
        negativeSignAfter: false,
        prefix: 'R$ ',
        suffix: '',
        // fixed: true,
        fractionDigits: 2,
        decimalSeparator: ',',
        thousandsSeparator: '.',
    }

    e = SimpleMaskMoney.setMask('.price', args);
}







//--Forms Validation------------------------------------------------------------------------------//

// eslint-disable-next-line
new Bouncer('[data-validate]', {
    messages: {
        missingValue: {
            checkbox: 'Este campo é obrigatório.',
            radio: 'Por favor selecione uma opção.',
            select: 'Por favor selecione uma opção.',
            'select-multiple': 'Por favor selecione ao menos uma opção.',
            default: 'Por favor preencha este campo.'
        },
        patternMismatch: {
            email: 'Por favor insira um email válido.',
            url: 'Por favor entre uma URL válida.',
            number: 'Por favor entre um número.',
            color: 'Por favor entre com o seguinte formato: #rrggbb',
            date: 'Por favor entre a data no formato DD-MM-YYYY.',
            time: 'Por favor use o formato de 24 horas. Ex.: 23:00',
            month: 'Por favor entre o formato MM-YY',
            default: 'Por favor preencha o campo no formato requerido.'
        },
        outOfRange: {
            over: 'Por favor selecione um valor abaixo de {max}.',
            under: 'Por favor selecione um valor acima de {min}.'
        },
        wrongLength: {
            over: 'O texo não pode passar de {maxLength} caracteres.',
            under: 'O texo precisa ter no mínimo {minLength} caracteres.'
        }
    }
});

//--Checkin and Checkout validation---------------------------------------------------------------//

if (document.querySelector('#checkin')) {
    document.querySelector('#checkin').addEventListener('change', e => {
        let checkout = document.querySelector('#checkout');

        checkout.removeAttribute('disabled');
        checkout.setAttribute('min', e.target.value);
        checkout.value = '';
    });
}

//--Parallax--------------------------------------------------------------------------------------//

function parallax() {
    document.querySelectorAll('.parallax').forEach(e => {
        let yPos = -((window.pageYOffset - e.offsetTop) / e.getAttribute('data-speed'));
        let bgpos = '50% ' + yPos + 'px';
        e.style.backgroundPosition = bgpos;
    });
}

if (document.querySelectorAll('.parallax').length) {
    window.addEventListener('load', parallax);
    window.addEventListener('scroll', parallax);
}

//--Fix Modal Bootstrap bug header fixed----------------------------------------------------------//

let nb = document.querySelector('#header'),
    modals = document.querySelectorAll('.modal');

modals.forEach(e => {
    e.addEventListener('show.bs.modal', () => {
        nb.style.width = `${nb.offsetWidth}px`;
    });
    e.addEventListener('hidden.bs.modal', () => {
        nb.style.width = 'auto';
    });
});

//--Scroll Top Button-----------------------------------------------------------------------------//

const buttonScrollTop = document.querySelector('.scroll-top');

window.addEventListener('scroll', () => {
    if (window.pageYOffset >= 600) {
        buttonScrollTop.classList.add('active');
    } else {
        buttonScrollTop.classList.remove('active');
    }
});

buttonScrollTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, left: 0, behavior: 'smooth' });
});

//--Outer Height----------------------------------------------------------------------------------//

function outerHeight(el) { // Calculate the outer height (el + padding + margin) of an element
    const curStyle = el.currentStyle || window.getComputedStyle(el);
    let outerHeight = el.offsetHeight;
    outerHeight += parseInt(curStyle.marginTop);
    outerHeight += parseInt(curStyle.marginBottom);
    return outerHeight;
}

//--Menu Scroll Fixed-----------------------------------------------------------------------------//

let navHeight = outerHeight(document.getElementById('header'));

function menuFixedOnScroll() {
    let windowTop = document.documentElement.scrollTop;
    const nav = document.getElementById('header'),
        wrapper = document.getElementById('wrapper');
    if (nav.classList.contains('white-nav')) {
        if (windowTop > (navHeight + 500)) {
            nav.style.backgroundColor = "white";
            nav.classList.add('nav-small');

        } else {
            nav.style.backgroundColor = "transparent";
            nav.classList.remove('nav-small');

        }
    }
    else {
        if (windowTop > navHeight) {
            nav.classList.add('nav-small');
            wrapper.style.paddingTop = navHeight + 'px';
        } else {
            nav.classList.remove('nav-small');
            wrapper.style.paddingTop = 0;
        }
    }


}

window.addEventListener('scroll', menuFixedOnScroll);

//--Scroll to DIV---------------------------------------------------------------------------------//

let buttonScroll = document.querySelectorAll('.scrollTo');
buttonScroll.forEach(trigger => {
    trigger.onclick = e => {
        e.preventDefault();
        let id = e.target.getAttribute('href'),
            headerCompensate = outerHeight(document.getElementById('header')),
            targetOffset = document.querySelector(id).offsetTop - headerCompensate;
        window.scrollTo({ top: targetOffset, left: 0, behavior: 'smooth' });
    };
});

//--Collapse--------------------------------------------------------------------------------------//

jQuery('.btn-collapse').click(function () {
    jQuery(' .collapse, .collapsed').collapse('hide');
});

//--Facebook Comment Loading----------------------------------------------------------------------//

let selector = jQuery('.fb-comments');
let waitForEl = function (selector, callback) {
    if (jQuery(selector).attr('fb-xfbml-state') === 'rendered') {
        callback();
    } else {
        setTimeout(function () {
            waitForEl(selector, callback);
        }, 100);
    }
};

selector.before('<span class="loading-comments"></span>');

waitForEl(selector, function () {
    jQuery('.loading-comments').remove();
});

//--Skip Link-------------------------------------------------------------------------------------//

// eslint-disable-next-line
function skipLinkMain() {
    document.getElementsByTagName('main')[0].focus();
}

// eslint-disable-next-line
function skipLink(element) {
    if (window.event.code === 'Enter') {
        setTimeout(() => {
            element.focus();
        }, 50);
    }
}

//--Toggle Menu Mobile----------------------------------------------------------------------------//

let isMenuOpen = false;
let sidebarMenu = document.querySelector('#sidebar-menu');
let menuBtn = document.querySelector('#menu-toggle');

let focusableElementsString = 'a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, [tabindex="0"], [contenteditable]';
let focusableElements = sidebarMenu.querySelectorAll(focusableElementsString);
focusableElements = Array.prototype.slice.call(focusableElements);

let firstTabStop = focusableElements[0];
let lastTabStop = focusableElements[focusableElements.length - 1];

document.querySelector('#overlay').addEventListener('click', toggleMenu);

sidebarMenu.addEventListener('keydown', trapTabKey);

function toggleMenu() {
    sidebarMenu.classList.toggle('toggled');
    document.querySelector('#overlay').classList.toggle('active');
    if (isMenuOpen) {
        menuBtn.setAttribute('aria-expanded', 'false');
        document.querySelector('#menu-toggle').focus();
    } else {
        menuBtn.setAttribute('aria-expanded', 'true');
        setTimeout(() => {
            document.querySelector('#submenu-mobile').focus();
        }, 200);
    }
    isMenuOpen = !isMenuOpen;
}

function trapTabKey(e) {
    if (e.key === 'Tab') {
        if (e.shiftKey) {
            if (document.activeElement === firstTabStop) {
                e.preventDefault();
                lastTabStop.focus();
            }
        } else if (document.activeElement === lastTabStop) {
            e.preventDefault();
            firstTabStop.focus();
        }
    }
}

document.addEventListener('keyup', function (e) {
    if (e.key === 'Escape' && isMenuOpen) {
        toggleMenu();
    }
}, false);

//--API Google Maps-------------------------------------------------------------------------------//

// eslint-disable-next-line
function initMap() {
    let marker,
        location = document.getElementById('map').attributes,
        title = location['data-title'].value,
        latitude = parseFloat(location['data-lat'].value),
        longitude = parseFloat(location['data-lng'].value),
        address = location['data-address'].value,
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: { lat: latitude, lng: longitude }
        });

    //let image = '../content/themes/base/assets/imgs/icon-maps.png',
    let image = 'imgs/icon-maps.png',
        icon = {
            url: image,
            scaledSize: new google.maps.Size(70, 60)
        };

    marker = new google.maps.Marker({
        map: map,
        animation: google.maps.Animation.DROP,
        position: { lat: latitude, lng: longitude },
        icon: icon,
        optimized: false,
        title: title
    });

    // Box description
    let contentString =
        '<p style="color: #151E34; text-align: center">' +
        '<b>' + title + '</b>' +
        '<br>' + address +
        '<br><a href="https://www.google.com/maps/place/' + address + '" target="_blank">Visualize no Google Maps</a>' +
        '</p>';
    let infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    marker.addListener('click', function () {
        infowindow.open(map, marker);
    });

    //-----------------------------------------------

    let myoverlay = new google.maps.OverlayView();
    myoverlay.draw = function () {
        this.getPanes().markerLayer.id = 'markerLayer';
    };

    myoverlay.setMap(map);
}

//--Instagram Feed--------------------------------------------------------------------------------//

if ($('#instafeed')[0]) {
    var instafeed = $('#instafeed');
    $.ajax({
        type: 'GET',
        url: '?getinstagramtoken',
        success: function () {
            $.fn.FCInstagram.accessData = {
                // accessToken: data.access_token, // Token
                accessToken: 'IGQVJYRWFUdkJmR1JnbXFZAamJJNzR4OVRHUUNkOEMzMXU1bU5JYmRNYlZAGMUJQYm9RQ25OdDdwWjgwVTY3cTgwTlBETUhVWkEtcV9GLURZAQms0ZAzdRbkRFaDBzc0RjQnNUWklOY0dTUnM5d2dwMmM2bgZDZD'
            };
            $('#instafeed').FCInstagram({
                max: instafeed.data('items'), // A number between 1 and 25 of photos to show. Default: 9
                autoplay: instafeed.data('autoplay'), // Set autoplay video: true/false. Default: false
            });
        },
        error: function (data) {
            console.error(`Erro ao recuperar token do instagram: ${JSON.stringify(data.responseJSON)}`);
        }
    });
}

//--API Youtube Background Video------------------------------------------------------------------//

if ($('#player')[0]) {
    var tag = document.createElement('script');
    tag.src = 'https://www.youtube.com/iframe_api';
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var videoId = jQuery('#player').data('id');
    var player;
}

// eslint-disable-next-line
function onYouTubeIframeAPIReady() {
    var width = jQuery('.video .player').outerWidth();

    if (width < 992) { // Disable in mobile
        return;
    }

    player = new YT.Player('player', {
        videoId: videoId,
        playerVars: {
            playlist: videoId,
            autoplay: 1,
            controls: 0,
            loop: 1,
            mute: 1,
            rel: 0,
            fs: 0,
        },
        events: {
            'onReady': onPlayerReady,
        }
    });
}

function onPlayerReady(event) {
    event.target.setVolume(0);
    event.target.playVideo();
    player.h.setAttribute('tabIndex', '-1');
}

function vidRescale() {
    var w = jQuery(window).width(),
        h = jQuery(window).height() + 200;

    if (w / h > 16 / 9) {
        player.setSize(w, w / 16 * 9);
        jQuery('.video #player').css({ 'left': '0' });
    } else {
        player.setSize(h / 9 * 16, h);
        jQuery('.video #player').css({ 'left': -(jQuery('.video #player').outerWidth() - w) / 2 });
    }
}

jQuery(window).on('load resize', function () {
    if (typeof player !== 'undefined' && jQuery('.video').length) {
        vidRescale();
    }
});



$(function () {
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 300000,
        values: [1000, 150000],
        step: 50,
        slide: function (event, ui) {
            $("#val-1").val(ui.values[0]);
            $("#val-2").val(ui.values[1]);
            $("#label-val-1").html("R$" + ui.values[0]);
            $("#label-0val-2").html("R$" + ui.values[1]);

        }
    });

    $("#label-val-1").html("R$" + $("#slider-range").slider("values", 0));
    $("#label-val-2").html("R$" + $("#slider-range").slider("values", 1));

    $("#val-1").val($("#slider-range").slider("values", 0));
    $("#val-2").val($("#slider-range").slider("values", 1));
}
);
