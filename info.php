<?php include('inc/header.php'); ?>
            <header class="wrapper clearfix">
                <h1 class="title"><a href="index.html">FestiFall</a></h1>
                <nav class="nav-primary">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="lineup.php">The Line-up</a></li>
                        <li class="current"><a href="info.php">Info</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="tickets.php">Tickets</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>How do I get to FestiFall?</h1>
                        <p>FestiFall is held in the open fields of Alfheim Stadium. We're not that difficult to find, but you can find directions to us below on Google Maps.<img src="img/Alfheim.jpg" alt="Alfheim Stadium"></p>
                        <h3>Directions from the Tromsø Airport, Langnes</h3>
                        <p>Follow Flyplassvegen for 350m<br>
                         Follow Rv862 and Kvaløyvegen for 1.8km to Langnesvegen<br>
                         Continue on Langnesvegen. Drive to Stadionvegen for 2.7km<br>
                         Exit the roundabout onto Langnesvegen, continue for 1.9km.<br>
                         Turn RIGHT onto Kirkegårdsvegen, continue for 290m<br>
                         Then turn LEFT to stay on Kirkegårdsvegen for 220m<br>
                         Turn right onto Oscar Larsens veg, stay on it for 180m<br>
                         Turn left onto Stadionvegen and the Stadium will be on the right.</p>
                        <p>Alfheim Stadium
                          <br>Stadionvegen 3
                          <br>9007 Tromsø
                          <br>Norway
                        </p>
                    </header>
                    <section>
                        <div id="map_canvas"></div>
                    </section>
                </article>
                <aside class="newsbox">
                  <h3>FAQ</h3>
                  <strong>What are the age restrictions?</strong>
                  <p>Under 18’s must be accompanied by an adult aged 21 or over.   One adult can accompany up to 3 under 18s.</p>
                  <strong>What is the line up?</strong>
                  <p>The full schedule will be announced closer to the event and updates will be posted on the <a href="lineup.html">line-up</a> page.</p>
                  <strong>When does the site open?</strong>
                  <p>Entry at AROUND 10am on August Bank Holiday, 25th August
2014</p>
                  <strong>Can I purchase a VIP upgrade once I have purchased a general ticket?</strong>
                  <p>Yes, you can! Just click on the "Buy Tickets" link on the website.</p>
                </aside>
                <aside class="newsbox" id="hotels">
                    <h2>Lodging</h2>
                    <strong>Want to stay the night or weekend in Tromsø but don't know where? Check out our recommended hotels here, all withing half a mile from the festival grounds!</strong>
                    <p><a href="http://www.cityliving.no/en/vare-hoteller-en/city-living-hotel-tromso-en">City Living Hotel, Tromsø</a> has a 4.3/5 rating.</p>
                    <p><a href="https://www.rica-hotels.com/hotels/tromso/rica-grand-hotel-tromso/?lcn=en?emc_pr=2">Rica Grand Hotel Tromsø</a> has a 4.1/5 rating.</p>
                    <p><a href="http://www.st-elisabeth.no/affordable-low-budget-hotel-rooms/">St-Elisabeth Hotell Og Helsehus</a> has a 3.8/5 rating.</p>
                    <p><a href="http://vikinghotell.no/en/">Viking Hotell</a> has a 3.7/5 rating.</p>
                </aside>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <strong><span>© FestiFall</span></strong>
                <p>Alfheim Stadium Image <a href="http://en.wikipedia.org/wiki/File:Alfheim_stadion_facade.JPG">Wiki</a> | Background Image <a href="http://patio.am/arm/rw_common/themes/Lightning/images/backgrounds/beige-grunge.jpg">Patio</a>
                </p>
				<p><a href="http://www.cems.uwe.ac.uk/w3c-validator/check?uri=http%3A%2F%2Fwww.cems.uwe.ac.uk%2F~a2-dwight%2Fitwpassignment2%2Finfo.php"><img src="img/html5.png" alt="HTML5 Validation"></a></p> <!--The only error is the X-UA-Compatible meta tag, although this is required for Internet Explorer compatibility -->
            </footer>
        </div>


<!-- Below is the script for loading the map-->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(69.6482592, 18.93181), //Specified the Latitude and Longitude for the Stadium's location
          zoom: 16, //adjusted the zoom so that it zooms in on the desired location
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
<!-- Deleted the google analytics script here that came with the boilerplate-->
    </body>
</html>
