jQuery(document).ready(function ($) {

    // start-smoth-scrolling
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
    });

    //script-for sticky-nav
    var navoffeset = $(".agileits_header").offset().top;
    $(window).scroll(function () {
        var scrollpos = $(window).scrollTop();
        if (scrollpos >= navoffeset) {
            $(".agileits_header").addClass("fixed");
        } else {
            $(".agileits_header").removeClass("fixed");
        }
    });

    // Bootstrap Core JavaScript
    $(".dropdown").hover(
        function () {
            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
            $(this).toggleClass('open');
        },
        function () {
            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
            $(this).toggleClass('open');
        }
    );

    // here stars scrolling icon

    /*
           var defaults = {
           containerID: 'toTop', // fading element id
           containerHoverID: 'toTopHover', // fading element hover id
           scrollSpeed: 1200,
           easingType: 'linear'
           };
       */
    $().UItoTop({easingType: 'easeOutQuart'});

    //Zoom
    $('#example').okzoom({
        width: 150,
        height: 150,
        border: "1px solid black",
        shadow: "0 0 5px #000"
    });

});

// flexSlider
$(window).load(function () {
    $('.flexslider').flexslider({
        animation: "slide",
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
});

paypal.minicart.render();

paypal.minicart.cart.on('checkout', function (evt) {
    var items = this.items(),
        len = items.length,
        total = 0,
        i;

    // Count the number of each item in the cart
    for (i = 0; i < len; i++) {
        total += items[i].get('quantity');
    }

    if (total < 3) {
        alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
        evt.preventDefault();
    }
});


/* Cart */

function showCart(cart) {
    $('#modal-cart .modal-body').html(cart);
    $('#modal-cart').modal();

    let cartSum = $('#cart-sum').text() ? $('#cart-sum').text() : '$0';
    if (cartSum) {
        $('.cart-sum').text(cartSum);
    }
}

function getCart()
{
    $.ajax({
        url: 'cart/show',
        type: 'GET',
        success: function (res) {
            if (!res) alert('Ошибка добавления товара');
            showCart(res);
        },
        error: function () {
            alert('Error')
        }
    });
}

$('.add-to-cart').on('click', function () {
    let id = $(this).data('id');

    $.ajax({
        url: 'cart/add',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            if (!res) alert('Ошибка добавления товара');
            showCart(res);
        },
        error: function () {
            alert('Error')
        }
    });
    return false;
});

/* cart */