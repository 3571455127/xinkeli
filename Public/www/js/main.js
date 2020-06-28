$(function () {
    // index testimonial-section
    var mySwiper = new Swiper('.testimonial-section .swiper-container', {
        autoplay: true,
        loop: true,
        speed: 1200,
        pagination: {
            el: '.testimonial-section .swiper-pagination',
            clickable: true
        }
    })
    // index-news
    var mySwiper = new Swiper('.index-news .swiper-container', {
        autoplay: true,
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        speed: 1200,
    })
    // index partners
    var mySwiper = new Swiper('.partners .swiper-container', {
        autoplay: true,
        slidesPerView: 5,
        spaceBetween: 20,
        loop: true,
        speed: 1200,
    })


    // about-who
    var mySwiper = new Swiper('.about-who .swiper-container', {
        autoplay: true,
        loop: true,
        speed: 1200,
        pagination: {
            el: '.about-who .swiper-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.about-who .swiper-button-next',
            prevEl: '.about-who .swiper-button-prev',
        },
    })
    // about-swiper
    var mySwiper = new Swiper('.about-swiper .swiper-container', {
        autoplay: true,
        loop: true,
        speed: 1200,
        pagination: {
            el: '.about-swiper .swiper-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.about-swiper .swiper-button-next',
            prevEl: '.about-swiper .swiper-button-prev',
        },
    })
    // recommend
    var mySwiper = new Swiper('.recommend .swiper-container', {
        autoplay: true,
        loop: true,
        speed: 1200,
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: '.recommend .swiper-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.recommend .swiper-button-next',
            prevEl: '.recommend .swiper-button-prev',
        },
    })
    // pro-related
    var mySwiper = new Swiper('.pro-related .swiper-container', {
        autoplay: true,
        loop: true,
        speed: 1200,
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: '.pro-related .swiper-button-next',
            prevEl: '.pro-related .swiper-button-prev',
        },
    })
    // section-spacing
    var swiper = new Swiper('.section-spacing .swiper-container', {
        slidesPerView: 4,
        spaceBetween: 0,
        loop: true,
    });
    // top
    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            $(".top-bar").hide();
            $(".header-one").hide();
            $("header .navs").addClass("fixed");
            $(".scroll-top").slideDown(600);
        } else {
            $(".top-bar").show();
            $(".header-one").show();
            $("header .navs").removeClass("fixed");
            $(".scroll-top").hide(600);
        }
    });
    $(".scroll-top").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 1000);
    });

    // 头部导航
    $(".level>li").hover(function () {
        $(this).find(".secondary").slideDown(500)
    }, function () {
        $(".secondary").hide()
    });
    $(".secondary>li").hover(function () {
        $(this).find(".third").slideDown(500)
    }, function () {
        $(".third").hide()
    });
    //ico切换 
    $("#icos .first-nav li a").click(function () {
        var iclassname = $(this).children("i")
        var a = iclassname.hasClass("fa-angle-down");
        a ? iclassname.removeClass("fa-angle-down") : iclassname.addClass("fa-angle-down")
    })

    // news二级导航
    $(".first-nav>li>a").click(function () {
        var flag = $(this).next().is(':hidden');
        console.log(flag);
        flag ? $(this).next().slideDown(500) : $(this).next().slideUp(500);

    })
    // news三级导航
    $(".second-nav>li>a").click(function () {
        var flag1 = $(this).next().is(':hidden');
        flag1 ? $(this).next().slideDown(500) : $(this).next().slideUp(500);
    })

    // product-show
    var gallerySwiper = new Swiper('.gallery-top', {
        spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: {
                loop: true,
                el: '.gallery-thumbs',
                spaceBetween: 10,
                slidesPerView: 4,
                watchSlidesVisibility: true,/*避免出现bug*/
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            },
        }
    })
})

var submitcount2 = 0;

function beforeSubmit2(form) {

    if (form.name.value == '') {
        alert('Name can not be empty');
        form.name.focus();
        return false;
    } else if (form.email.value == '') {
        alert('Please enter the correct email format');
        form.email.focus();
        return false;
    } else if (form.email.value.indexOf('@') < 0) {
        alert('The email is wrong');
        form.email.focus();
        return false;
    } else if (form.company.value == '') {
        alert('The company can not be empty');
        form.company.focus();
        return false;
    } else if (form.message.value == '') {
        alert('The message can not be empty');
        form.message.focus();
        return false;
    } else {

        if (submitcount2 == 0) {
            submitcount2++;
            return true;
        } else {
            alert("Message is being sent, please wait!");
            return false;

        }
    }

}