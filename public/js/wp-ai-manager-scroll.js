(function( $ ) {
  $(window).ready(() => {
    const dif = $(document).height() - $(window).height();
    $(document).on('scroll', () => {
      console.log($(window).scrollTop() * 100 / dif)
    })
  })
})( jQuery );
