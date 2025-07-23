// Cookie //
function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

let applyParallax = section => {
    window.addEventListener('mousemove', e => {
        let { width, height } = section.getBoundingClientRect();
        let offX = e.pageX - (width * 0.5);
        let offY = e.pageY - (height * 0.5);

        for (let layer of document.querySelectorAll('.layer')) {
            let speed = layer.getAttribute('data-speed')
            let x = (offX * speed) / 100;
            let y = (offY * speed) / 100;
            layer.style.transform = `translateX(${x}px) translateY(${y}px)`
        }
    });
};

function setCookie(name, value, options = {}) {

    options = {
      path: '/',
      'max-age': 604800,
      ...options
    };
  
    if (options.expires instanceof Date) {
      options.expires = options.expires.toUTCString();
    }
  
    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);
  
    for (let optionKey in options) {
      updatedCookie += "; " + optionKey;
      let optionValue = options[optionKey];
      if (optionValue !== true) {
        updatedCookie += "=" + optionValue;
      }
    }
  
    document.cookie = updatedCookie;
}

function deleteCookie(name) {
    setCookie(name, "", {
      'max-age': -1
    })
}
// Cookie end //

function num_word(value, words){  
	value = Math.abs(value) % 100; 
	var num = value % 10;
	if(value > 10 && value < 20) return words[2]; 
	if(num > 1 && num < 5) return words[1];
	if(num == 1) return words[0]; 
	return words[2];
}

function getTime(time) {
    var floorTime = Math.floor((time / 20) / 3600);
    return floorTime + ' ' + num_word(floorTime, ['час', 'часа', 'часов']);
}

if (getCookie('theme') == undefined) {
    setCookie('theme', 'orange');
    $('html').attr('data-theme', 'orange');
} else {
    if (getCookie('theme') == 'light') {
        $('html').attr('data-theme', 'light');
    } else if (getCookie('theme') == 'orange') {
        $('html').attr('data-theme', 'orange');
    } else {
        $('html').attr('data-theme', 'dark');
    }
}


$(window).on('load', function(){
    $('.loading-splash').addClass('hidden');
});

$(function(){
    $('.dropdown').on('click', function(){
        if ($(this).hasClass('active')){
            $('.dropdown, .dropdownData').removeClass('active');
        } else {
            $('.dropdown, .dropdownData').removeClass('active');
            $(this).addClass('active');
            $('.dropdownData[data-dropname="' + $(this).data('dropname') + '"]').addClass('active');
        }
    });

    $('.changeTheme').on('click', function(){
        let currentTheme = $('html').attr('data-theme');
        
        if (currentTheme == 'dark') {
            $('html').attr('data-theme', 'light');
            setCookie('theme', 'light');
        } else if (currentTheme == 'light') {
            $('html').attr('data-theme', 'orange');
            setCookie('theme', 'orange');
        } else {
            $('html').attr('data-theme', 'dark');
            setCookie('theme', 'dark');
        }
    });
    

    $('.card-wrapper > img').on('click', function() {
        $('.pop-up').addClass('active');
        $('.pop-up > img').attr('src', $(this).attr('src'));
    });

    $('.pop-up').on('click', function(){
        $(this).removeClass('active');
    });

    $('.open-menu').on('click', function() {
        if ($('.menuButtons').hasClass('active')) {
            $('.menuButtons').removeClass('active');
        } else {
            $('.menuButtons').addClass('active');
        }
    });

    $('.move-to').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href');
        var top = $(id).offset().top;
        $('body, html').animate({scrollTop: top}, 800);
    });

    $('.open-account-actions').on('click', function() {
        if ($('.account-actions').hasClass('active')) {
            $('.account-actions').removeClass('active');
        } else {
            $('.account-actions').addClass('active');
        }
    });

    $('.moreinfo').on('click', function(){
        if ($(this).parent().hasClass('active')){
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().addClass('active');
        }
    });
});