$(document).ready(function() {
  
  var scrollLink = $('.scroll');
  
  // Smooth scrolling
  scrollLink.click(function(e) {
    e.preventDefault();
    $('body,html').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000 );
  });
  
  // Active link switching
  $(window).scroll(function() {
    var scrollbarLocation = $(this).scrollTop();
    
    scrollLink.each(function() {
      
      var sectionOffset = $(this.hash).offset().top - 20;
      
      if ( sectionOffset <= scrollbarLocation ) {
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
      }
    })
    
  })
  
})

$(function () {
    var iframe = $('.main-content iframe')[0],
        menu_links = $('.items li a'),
        selected_link,
        href;


    $(window).on('hashchange', function() {

        if(window.location.hash){
            href = window.location.hash.substring(1);
            selected_link = $('a[href$="'+href+'"]');

            // Check if the hash is valid - it should exist as one of the menu items.
            if(selected_link.length){
                iframe.contentWindow.location.replace(href + '.html');

                menu_links.removeClass('active');
                selected_link.addClass('active');
            }
        }
        else{
            iframe.contentWindow.location.replace('Footer-with-logo.html');
            menu_links.removeClass('active');
            $(menu_links[0]).addClass('active');
        }

    });


    if(window.location.hash){
        $(window).trigger('hashchange');
    }


    menu_links.on('click', function (e) {
        e.preventDefault();

        window.location.hash = $(this).attr('href');
    });


    $('#template-select').on('change', function (e) {
        e.preventDefault();

        window.location.hash = $(this).find(':selected').data('href');
    });

});

