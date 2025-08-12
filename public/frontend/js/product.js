
$(document).ready(function () {
    // Quantity selector
    $(".increase-btn").click(function () {
        let currentVal = parseInt($(".quantity-input").val());
        $(".quantity-input").val(currentVal + 1);
    });

    $(".decrease-btn").click(function () {
        let currentVal = parseInt($(".quantity-input").val());
        if (currentVal > 1) {
            $(".quantity-input").val(currentVal - 1);
        }
    });
});
var main = document.querySelector("body");
var cursor = document.querySelector(".cursor");

main.addEventListener("mousemove", function (dets) {
    gsap.to(cursor, {
        x: dets.clientX - 0, // Subtract half of cursor width (40px/2)
        y: dets.clientY - 0, // Subtract half of cursor height (40px/2)
        duration: 1,
        ease: "back.out",
    });
});

// Example hover effect
document.querySelectorAll("a, button").forEach((el) => {
    el.addEventListener("mouseenter", () => {
        gsap.to(".cursor", { scale: 1.5 });
    });
    el.addEventListener("mouseleave", () => {
        gsap.to(".cursor", { scale: 1 });
    });
});
$(document).ready(function () {
    $(".productBannerSlider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        dots: false,
        asNavFor: ".productMinibannerSlider",
    });

    // Thumbnail Slider
    $(".productMinibannerSlider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: ".productBannerSlider",
        dots: false,
        arrows: true,
        focusOnSelect: true,
        vertical: true,
        verticalSwiping: true,
        // Target only the arrows related to this slider
        prevArrow: $(".productMinibannerSlider").parent().find(".slick-prev"),
        nextArrow: $(".productMinibannerSlider").parent().find(".slick-next"),
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    vertical: false,
                    verticalSwiping: false,
                    slidesToShow: 3,
                },
            },
        ],
    });
});
