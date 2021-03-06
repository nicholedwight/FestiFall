<?php include('inc/header.php'); ?>

<?php

require_once( './dbconnect.php');
$db = connectToDatabase();
?>



    <header class="wrapper clearfix">
      <h1 class="title"><a href="index.html">FestiFall</a></h1>
      <nav class="nav-primary">
        <ul>
          <li><a href="index.html">Home</a>
          </li>
          <li><a href="lineup.php">The Line-up</a>
          </li>
          <li><a href="info.php">Info</a>
          </li>
          <li><a href="news.php">News</a>
          </li>
          <li><a href="gallery.php">Gallery</a>
          </li>
          <li><a href="tickets.php">Tickets</a>
          </li>
          <li class="current"><a href="contact.php">Contact Us</a>
          </li>
        </ul>
      </nav>
    </header>
  </div>

  <div class="main-container">
    <div class="main wrapper clearfix">
      <h1>Contact Us</h1>
      <article id="formarticle" class="newsbox">
        <header>
          <?php
            if ($_POST) {
              $name = mysqli_real_escape_string($db, $_POST['name']);//Prevents MySQL injections
              $email = $_POST['email'];
              $topic = $_POST['topic'];
              $question = $_POST['question'];
              $query = "INSERT INTO `qa` (`name`, `email`, `topic`, `question`, `date`)
                        VALUES ('" . $name . "',
                                '" . $email . "',
                                '" .  $topic . "',
                                '" . $question . "',
                                '" . date('Y-m-d H:i:s', time()) . "')"; //Inserts the user input into the correct sections of the MYSQL table in the database.

              if ($result = $db->query($query)) {
                echo "Thanks! Your question has been received successfully!!";
              }
              else {
                echo "Whoops! Sorry, your question got lost in the abyss!";
				echo $db->error; // there was an SQL error if this happened
              }
            }
          ?>

          <form id="contact_form" method="POST">
            <p>Thank you for you interest in FestiFall Music Festival! Please fill out the form and an event organiser will be in touch with you shortly.</p>
            <p>Fields marked with * are required.</p>
            <div>
              <div>
                <label for="name">Name*</label>
                <span id="name_error" class="error"></span>
                <br>
                <input type="text" class="form-control" name="name" value="" id="name">
              </div>
            </div>
            <div>
              <div>
                <label for="email">Email*</label>
                <span id="email_error" class="error"></span>
                <br>
                <input type="text" class="form-control" name="email" value="" id="email">
              </div>
            </div>
            <div>
              <div>
                <label for="topic">Topic*</label>
                <span id="topic_error" class="error"></span>
                <br>
                <select id="topic" class="col-md-12" name="topic">
                  <option>Change Shipping Address</option>
                  <option>Payment Issue</option>
                  <option>General Festival Question</option>
                  <option>Talent, Vendor, or Sponsorship Inquiry</option>
                  <option>Festival Ticket or Upgrade</option>
                  <option>Other</option>
                </select>
              </div>
            </div>
            <div>
              <div>
                <label for="question">Question</label>
                <span id="question_error" class="error"></span>
                <br>
                <textarea name="question" id="question" rows="6"></textarea>
              </div>
            </div>
            <br/>
            <button type="submit" class="submit">Submit</button> <!-- this submits the information given into a MYSQL table on phpmyadmin.-->
          </form>
        </header>
      </article>
    </div>
    <!-- #main -->
  </div>
  <!-- #main-container -->

  <div class="footer-container">
    <footer class="wrapper">
      <strong><span>© FestiFall</span></strong>
      <p>
        Background Image <a href="http://patio.am/arm/rw_common/themes/Lightning/images/backgrounds/beige-grunge.jpg">Patio</a>
      </p>
	  <p><a href="http://www.cems.uwe.ac.uk/w3c-validator/check?uri=http%3A%2F%2Fwww.cems.uwe.ac.uk%2F~a2-dwight%2Fitwpassignment2%2Fcontact.php"><img src="img/html5.png" alt="HTML5 Validation"></a></p> <!--The only error is the X-UA-Compatible meta tag, although this is required for Internet Explorer compatibility -->
    </footer>
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')
  </script>

  <script src="js/main.js"></script>
<!-- Deleted the google analytics script here that came with the boilerplate-->
</body>

</html>
