 $("#primeiro-membro").fadeTo('slow', 1, function() {
                    $("#segundo-membro").fadeTo('slow', 1, function() {
                        $("#terceiro-membro").fadeTo('slow', 1, function() {
                            $("#quarto-membro").fadeTo('slow', 1, function() {
                                
                            }); 
                        }); 
                    });  
                }); 
            
              $(window).on('scroll', function() {

                  var y_scroll_pos = window.pageYOffset;
                  
                  var scroll_pos_test = 150;

                  if(y_scroll_pos > scroll_pos_test) {

                  $("#titulo-beneficios").removeClass('hidden');
               
                
                  $("#titulo-beneficios").addClass('animated fadeInUp');
                

                 scroll_pos_test = 190;

                 if(y_scroll_pos > scroll_pos_test) {
                  $("#ben1").removeClass('hidden');
                  $("#txt-ben1").removeClass('hidden');
                  $("#txt-ben12").removeClass('hidden');
                  $("#txt-ben13").removeClass('hidden');

                  $("#ben1").addClass('op animated fadeInUp');
                  $("#txt-ben1").addClass('animated fadeInUp');
                  $("#txt-ben12").addClass('animated fadeInUp');
                  $("#txt-ben13").addClass('animated fadeInUp');}
                 

                 scroll_pos_test = 700;

                 if(y_scroll_pos > scroll_pos_test) {
                  $("#ben2").removeClass('hidden');
                  $("#txt-ben2").removeClass('hidden');
                  $("#txt-ben22").removeClass('hidden');
                  $("#txt-ben23").removeClass('hidden');

                  $("#ben2").addClass('op animated fadeInUp');
                  $("#txt-ben2").addClass('animated fadeInUp')
                  $("#txt-ben22").addClass('animated fadeInUp')
                  $("#txt-ben23").addClass('animated fadeInUp');}
                 

                 scroll_pos_test = 1150;

                 if(y_scroll_pos > scroll_pos_test) {
                  $("#ben3").removeClass('hidden');
                 
                  $("#txt-ben32").removeClass('hidden');
                  $("#txt-ben33").removeClass('hidden');
                   $("#txt-ben3").removeClass('hidden');

                  $("#ben3").addClass('op animated fadeInUp');
                  $("#txt-ben3").addClass('animated fadeInUp');
                  $("#txt-ben32").addClass('animated fadeInUp');
                  $("#txt-ben33").addClass('animated fadeInUp');}

                  }   
              });

              $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').focus()
              })

             
             