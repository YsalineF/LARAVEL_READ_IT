$(function(){



  $('#posts_index_more').click(function(e){
    e.preventDefault();
    let offset = $('#posts_list .col-md-6').length;

    $.get($(this).data('url'), {
      offset
    }, function(reponse) {
      // Le PHP devrait retourner la vue complète à appender ()
      $('#posts_list').append(reponse)
                      .find('.col-md-6:nth-last-of-type(-n+'+offset+')')
                      .addClass('fadeInUp ftco-animated');
    });

  });

});
