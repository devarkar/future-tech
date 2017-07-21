<?php
  $page = 'contact';
  include('header.php');
?>

<div class="parallax-container" style="min-height:50%">
  <div class="parallax">
    <img src="img/contact_parallax_min50per.jpg" alt="contact banner" class="responsive-img">
  </div>
</div>

<div class="container">
    <div class="section">
          <div class="row"> <!-- first row -->
            <div class="col s12 center">
              <h1>Contact Us</h1>
            </div> <!-- end of col s12 center -->

            <p align = "justify">
              You can contact us using the following information or filling the form below to send an email to us.
            </p>

            <div class="col s12">
              <b>Show Room Address:</b> <br>
              No.16 (A-3), Shan Kone St, Myaynigone (N), Sanchaung Tsp, Yangon, Myanmar.
              <p> <br/> <br/>

              <b>Office Address:</b> <br>
              No.16 (A-3), Shan Kone St, Myaynigone (N), Sanchaung Tsp, Yangon, Myanmar.
              
                <ul>
                  <li> <b> Phone: </b> </li>
                  <li> <a class="black-text" href="tel:+951516687">+95 1 516 687</a> </li>
                  <li> <a class="black-text" href="tel:+9597080296">+95 9 730 802 96</a> </li>
                  <br>
                  <li> <b> E-mail: </b> </li>
                  <li> <a class="black-text" href="mailto:futuretech-it@myanmar.com.mm">futuretech-it@myanmar.com.mm</a> </li>
                  <li> <a class="black-text" href="sales-marketing@futuretech.com.mm">sales-marketing@futuretech.com.mm</a> </li>
                </ul>
              </p>
            </div> <!-- end of col s12 -->

          </div> <!-- end of first row -->

          <div class="divider"></div>

          <div class="row center-align"> <!-- second row -->
            <div class="col s12 m6 l6 offset-m3 offset-l3"> <!-- contact form -->
              <form action="//formspree.io/devarkarmg2015@gmail.com" method = "POST">

                <div class="row"> <!-- row for name -->
                  <div class="input-field">
                    <input id="icon_prefix" name = "name" type="text" class="validate">
                    <label for="icon_prefix">Name</label>
                  </div>
                </div> <!-- end of name -->

                <div class="row"> <!-- row for email -->
                  <div class="input-field">
                      <input id="email" name = "_replyto" type="email" class="validate">
                      <label for="email">Email</label>
                  </div>
                </div> <!-- end of email -->

                <div class="row"> <!-- row for phone no -->
                  <div class="input-field">
                    <input id="icon_prefix" name = "phone" type="text" class="validate">
                    <label for="icon_prefix">Phone No</label>
                  </div>
                </div> <!-- end of name -->

                <div class="row">
                  <div class="input-field">
                    <textarea id="icon_prefix2" name = "message" class="materialize-textarea"></textarea>
                    <label for="icon_prefix2">Message</label>
                  </div>
                </div>

                <input type="text" name="_gotcha" style="display:none" />

                <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>

              </form>

              <script>
                  var contactform =  document.getElementById('contactform');
                  contactform.setAttribute('action', '//formspree.io/' + 'devarkarmg2015' + '@' + 'gmail' + '.' + 'com');
              </script>

            </div> <!-- end of contact form -->
          </div> <!-- end of second row -->

          <div class="row"> <!-- third row -->
            <div class="col s12"> <!-- map -->
              <!-- Map -->

              <style>
                    #map-canvas {
                      width: auto;
                      height: 400px;
                    }
                  </style>
                  <script src="https://maps.googleapis.com/maps/api/js"></script>
                  <script>
                  function initialize() {
                  var myLatlng = new google.maps.LatLng(16.8059111, 96.1374320);
                  var mapOptions = {
                  zoom: 16,
                  center: myLatlng
                  }
                  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                  var marker = new google.maps.Marker({
                  position: myLatlng,
                  map: map,
                  title: 'Hello World!'
                  });
                  }

                  google.maps.event.addDomListener(window, 'load', initialize);
                  </script>
                <div id = "map-canvas"></div>

            </div> <!-- end of map -->
          </div> <!-- end of third row -->

    </div> <!-- end of section -->
</div> <!-- end of container -->


<?php include('footer.php'); ?>
