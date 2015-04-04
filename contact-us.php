<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Language" content="en-us">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Korean, Korean immersion, preschool, daycare, child care, San Francisco, SF, Bay Area, Peninsula">
    <meta name="description" content="Our goal is to provide young children with a home away from home in the San Francisco Bay Area where they can identify with their Korean heritage.">
    <title>Sa Rang Child Care</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link href="http://fonts.googleapis.com/css?family=Coming+Soon" rel="stylesheet" type="text/css">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"> -->
    <link href="assets/base.css" rel="stylesheet">
    <script src="assets/jquery-1.7.2.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-32378126-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
  </head>
  <div class="navbar navbar-fixed-top">
    <div class="container">
      <a class="site" href="index.php">Sa Rang Child Care</a>
    </div>
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="nav-collapse collapse">
          <?php $page = basename($_SERVER['PHP_SELF']); ?>
          <ul class="nav">
            <li class="<?php if ($page == "index.php") { ?>active<?php } ?>">
              <a href="index.php">Home</a>
            </li>
            <li class="<?php if ($page == "enroll.php") { ?>active<?php } ?>">
              <a href="enroll.php">Enroll</a>
            </li>
            <li class="<?php if ($page == "schedule.php") { ?>active<?php } ?>">
              <a href="schedule.php">Schedule</a>
            </li>
            <li class="<?php if ($page == "staff.php") { ?>active<?php } ?>">
              <a href="staff.php">Staff</a>
            </li>
            <li class="">
              <a href="contact-us.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="page-header">
      <h1>Contact Us</h1>
    </div>

    <div class="row">
      <div class="span8">
        <a href="https://maps.google.com/maps?q=64+Westpark+Drive,+Daly+City,+CA+94015" class="thumbnail"><img border="0" src="http://maps.googleapis.com/maps/api/staticmap?center=67%20Westdale%20Drive,%20Daly%20City,%20CA%2094015&markers=color:red%7C64%20Westpark%20Drive,%20Daly%20City,%20CA%2094015&zoom=15&size=760x268&sensor=false" alt="Sa Rang Child Care"></a>
      </div>
      <div class="span4">
        <p><a href="https://maps.google.com/maps?q=64+Westpark+Drive,+Daly+City,+CA+94015">64 Westpark Drive, Daly City, CA 94015</a></p>
        <p>Sa Rang Child Care is conveniently located near the <strong>Daly City Bart Station</strong> and <strong>Highway 280</strong>.</p>
        <p><a href="mailto:sarangchildcare@gmail.com">sarangchildcare@gmail.com</a></p>
        <p><span class="label label-info">English</span> (650) 515-6812</p>
        <p><span class="label label-info">Korean</span> (650) 992-4245</p>
      </div>
    </div>
    <hr/>
    <footer class="footer">
      <p>Sa Rang Child Care &copy; Copyright 2012</p>
    </footer>
  </div>
</html>