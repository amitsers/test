var $height_w   = jQuery(window).height();
          function saveContact() {
            if(!$('#mobileNo').val()) {
              $('.mobileError').html('Please enter your mobile number');
              return false;
            }
            if($('#mobileNo').val().length != 10){
              $('.mobileError').html('Please enter a valid number');
              return false;
            }
            $.ajax({
              url: 'save-contact.php',
              type: 'POST',
              data: {
                mobile_no: $('#mobileNo').val()
              },
              success: function(res) {
                $('.mobileError').html('Thanks we will contact you soon');
              }
            });
            
            return false;
          }
          

          jQuery('.noo-countdown').css('height',$height_w+'px');
          jQuery(window).resize(function(){
                var $height_w = jQuery(window).height();
                jQuery('.noo-countdown').css('height',$height_w+'px');
          });
            jQuery(function () {
              $.ajax({
                url: 'track.php',
                type: 'POST',
                data: {
                  page: 'index',
                  ref: getQueryParameter('ref')
                },
                success: function(res) {
                  // console.log(res);
                }
              });
              $('body').on('click', '.register-now', function() {
              $("html, body").animate({
                  scrollTop: $('.come-to-footer').outerHeight()
              }, 800);
              return false;
          });

                jQuery('.full-background li:first-child').show();
                var myVar = '';
                clearInterval(myVar);
                myVar = setInterval(function(){
                    jQuery('.full-background li:first-child').fadeOut(1200).next('li').fadeIn(1200).end().appendTo('.full-background');
                },3500);
              
                                  
              austDay = new Date(2016, 5 - 1,  31);
              // jQuery('#defaultCountdown').countdown({until: austDay});
              jQuery('#year').text(austDay.getFullYear());
            });

          function getQueryParameter(queryParam) {
            var allQueryParam = location.search.substr(1).split("&");
            for(var i=0; i<allQueryParam.length; i++) {
              if(allQueryParam[i].split('=')[0]===queryParam) {
                return allQueryParam[i].split('=')[1];
              }
            }
            return '';
          }