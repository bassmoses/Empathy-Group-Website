$(window).scroll(function() {
    var navbar = $('.navbar');
    if ($(window).scrollTop() >= 100) {
      navbar.addClass('opaque');
    } else {
      navbar.removeClass('opaque');
    }
  });
  