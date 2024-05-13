<?php include 'inc/header.php'; ?>

<section class="banner_top_section">
        <div class="container">
            <div class="row">
                <!-- BG Star annimation Star -->
                    <div class="bg-animation">
                        <div id="stars"></div>
                        <div id="stars2"></div>
                        <div id="stars3"></div>
                        <div id="stars4"></div>
                    </div>
            <!-- BG Star annimation End -->
                <div class="col-md-10 mx-auto">
                    <h1 class="store">Let’s Meet</h1>
                    <p class="store_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div> 
            </div>
        </div>
    </section>
<div class="main_body_bg">

<section class="lets_meet_section">
    <div class="container">
   
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="meeting">Meeting Form</h3>
                        <img  src="images/file.png" class="img-fluid star">
                        <img  src="images/file.png" class="img-fluid star_two">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="select_heading">Select The Purpose Of Meeting</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-lg-4 col-md-6 mx-auto">
                        <div class="blog_boxes aniamted_calendar">
                        <img  src="images/file.png" class="img-fluid star_three">
                        <img  src="images/file.png" class="img-fluid star_four">
                            <div class="blogs_card_img"><img class="post_image img-fluid" src="images/meeting1.png"></div>
                            <div class="reading_cards_headings ">
                                <h5 class="reading_cards">Tarot Card Reading</h5>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-lg-4 col-md-6 mx-auto">
                        <div class="blog_boxes animated_fields">
                            <div class="blogs_card_img"><img class="post_image img-fluid" src="images/meeting2.png"></div>
                            <div class="reading_cards_headings_two">
                                <h5 class="reading_cards">Transit Calendar</h5>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-lg-4 col-md-6 mx-auto">
                        <div class="blog_boxes aniamted_clock">
                            <div class="blogs_card_img"><img class="post_image img-fluid" src="images/meeting3.png"></div>
                            <div class="reading_cards_headings_three">
                                <h5 class="reading_cards">Birth Chart Reading</h5>
                                <img src="images/file.png" class="img-fluid star_twenty ">
                                
                            </div>
                        </div>
                    </div>
                </div>
        
           
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="select_heading">Meeting Channel Preference</h3>
                            <img  src="images/file.png" class="img-fluid star_twentythree">
                        </div>
                        <div class="all_radio_btns animated_fields" >
                            <span class="radio_btns"><input type="radio" class="custom_checkbox" name="exampleRadios" id="exampleRadios1" checked/> <p class="m-0">Email</p> </span>
                            <span class="radio_btns"><input type="radio" name="exampleRadios" id="exampleRadios2" class="custom_checkbox"/> <p class="m-0">SMS</p> </span>
                            <span class="radio_btns"><input type="radio" name="exampleRadios" id="exampleRadios3" class="custom_checkbox"/> <p class="m-0">Phone Call</p> </span>
                            <span class="radio_btns"><input type="radio" class="custom_checkbox" name="exampleRadios" id="exampleRadios4"/> <p class="m-0">Video Call</p> </span>
                        </div>
                        
                    </div>
                    <div class="row">
                                <div class="col-md-12">
                                    <h3 class="select_heading">Contact Information</h3>                                   
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group animated_fields">
                                        <label for="exampleInputEmail1" class="email_label">Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="John Doe">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group animated_fields">
                                        <label for="exampleInputEmail1" class="email_label">E-mail</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Johndoe@example.com">
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group animated_fields">
                                        <label for="exampleInputEmail1" class="email_label">Phone No</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1111-222-3333-44">
                                        </div>
                                    </div>
                                </div>
                                
                        </div>
           
</section>


<section>
        <div class="container">
          <div class="row ">
                <div class="col-md-6">
                    <div class="pt-5">
                        
                            <div id="basic" class="">
                            <div class="calendar aniamted_calendar"></div>
                            </div>

                    </div>
                    <img src="images/file.png" class="img-fluid star_twentyone">
                </div>
                <div class="col-md-6">
                    <div class="pt-5">
                        
                        <div>
                            <input class="form-control time_selection_box aniamted_clock" type="text" id="datetime" placeholder="Select Time" />              
                        </div>
                        <img  src="images/file.png" class="img-fluid star_twentytwo">

                    </div>
                </div>

          </div>
        </div>
      </section>

<?php include 'inc/footer.php'; ?>



<script>

      $(function () {

      function onSelectHandler(date, context) {

        var $element = context.element;
        var $calendar = context.calendar;
        var $box = $element.siblings('.box').show();
        var text = 'You selected date ';

        if (date[0] !== null) {
          text += date[0].format('YYYY-MM-DD');
        }

        if (date[0] !== null && date[1] !== null) {
          text += ' ~ ';
        }
        else if (date[0] === null && date[1] == null) {
          text += 'nothing';
        }

        if (date[1] !== null) {
          text += date[1].format('YYYY-MM-DD');
        }

        $box.text(text);
      }

      $('.calendar').pignoseCalendar({
        select: onSelectHandler
      });

      $('.menu .item').tab();
    });

      </script>
      <script>
     
        $('#datetime').datetimepicker({
            format: 'hh:mm:ss a'
        });
    </script>