      <footer class="colophon site-info come-to-footer">
        <div class="colophon wigetized">
          <div class="background-footer"></div>
          <div class="container">
            <div class="row noo-footer-main">
              <div class="col-md-4 col-sm-6">
                <div class="widget widget_text">
                  <h4 class="widget-title">Other <span>Details</span></h4>
                  <div class="textwidget">
                    <p>
                      Please feel free to reach us for any type of queries. Like our facebook page for more updates.
                    </p>
                    <p>
                      
                    </p>
                  </div>
                </div>
              </div>  
              <div class="col-md-4 col-sm-6">
                <div class="widget tribe-events-adv-list-widget">
                  <h4 class="widget-title">Important <span>Dates</span></h4>
                  <div class="tribe-mini-calendar-event">
                    <div class="list-date">
                      <span class="list-dayname">--</span>
                      <span class="list-daynumber">-</span>
                    </div>
                    <div class="list-info">
                      <h2 class="entry-title summary">
                        Audition Start Date
                      </h2>
                      <div class="duration">
                        <span class="date-start dtstart">@if(isset($season_start_date)) {{{$season_start_date}}} @endif</span>
                       <!--  -
                        <span class="date-end dtend">October 31-10:00 pm</span> -->
                      </div>
                    </div>  
                  </div>
                  <div class="tribe-mini-calendar-event">
                    <div class="list-date">
                      <span class="list-dayname">--</span>
                      <span class="list-daynumber">-</span>
                    </div>
                    <div class="list-info">
                      <h2 class="entry-title summary">
                        Audition End Date
                      </h2>
                      <div class="duration">
                        <span class="date-start dtstart">@if(isset($season_end_date)) {{{$season_end_date}}} @endif</span>
                        <!-- -
                        <span class="date-end dtend">October 31-10:30 pm</span> -->
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="widget mailchimp-widget">
                  <h4 class="widget-title">Number <span>Please</span></h4>
                  <form class="mc-subscribe-form" onSubmit="return saveContact()">
                    <label>Please mention your mobile number here. Our team will contact you. We'll not spam your inbox.</label>
                    <div class="input-mail">
                      <input type="text" name="mc_email" id="mobileNo" class="mc-email" value="" placeholder="Enter your number here..."/>
                      <span class="mobileError"></span>
                      <i class="fa fa-envelope-o icon-mc-email"></i>
                    </div>
                    <input type="submit" name="sendMob" value="Send now"/>
                  </form>
                </div>
              </div>
            </div>  
            <div class="noo-footer-bottom">
              <div class="widget widget_noo_infomation">
                <ul class="noo-infomation">
                  <li>
                    <a href="http://fb.com">
                      <span class="fa fa-facebook infomation-left"></span>
                      <address>Follow us on facebook</address>
                    </a>
                  </li>
                  <li class="info-phone">
                    <span class="fa fa-whatsapp infomation-left"></span> OR
                    <span class="fa fa-phone infomation-left"></span>
                    <span>+91 123 456 789</span>
                  </li>
                  <li class="info-mail">
                    <span class="fa fa-envelope-o infomation-left"></span>
                    <span><a href="mailto:admin@onlineaudition.xyz">admin@onlineaudition.xyz</a></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>  
        </div>  
      </footer>