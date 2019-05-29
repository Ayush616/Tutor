$(document).ready(function(){  
                  $('#city').keyup(function(){  
                       var query = $(this).val();  
                       if(query != '')  
                       {  
                            $.ajax({  
                                 url:"autocomplete.php",  
                                 method:"POST",  
                                 data:{query:query},  
                                 success:function(data)  
                                 {  
                                      $('#cityList').fadeIn();  
                                      $('#cityList').html(data);  
                                 }  
                            });  
                       }  
                  });  
                  $(document).on('click', 'li', function(){  
                       $('#city').val($(this).text());

                       $('#cityList').fadeOut();  
                  });  

              
             }); 
        
          $('input').click(function(){
              
              $('#cityList').css("display", "none");
          });