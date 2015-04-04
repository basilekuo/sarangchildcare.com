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
      <h1>Schedule</h1>
    </div>

    <div class="row">
      <div class="span6">
        <table class="table table-bordered table-striped">
          <colgroup>
            <col class="span2">
            <col class="span2">
          </colgroup>
          <thead>
            <tr>
              <th>Start</th>
              <th>End</th>
              <th>Activity</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>8:00 AM</td><td>8:30 AM</td><td>Breakfast</td></tr>
            <tr><td>8:30 AM</td><td>9:30 AM</td><td>Free Play</td></tr>
            <tr><td>9:30 AM</td><td>9:50 AM</td><td>Morning Snack</td></tr>
            <tr><td>9:50 AM</td><td>10:15 AM</td><td>Circle Time</td></tr>
            <tr><td>10:15 AM</td><td>11:00 AM</td><td>Music &amp; Movement, Free Play, or Outdoor Play (weather permitting)</td></tr>
            <tr><td>11:00 AM</td><td>11:30 AM</td><td>Arts &amp; Crafts</td></tr>
            <tr><td>11:30 AM</td><td>12:15 PM</td><td>Lunch &amp; Free Play</td></tr>
            <tr><td>12:15 PM</td><td>12:30 PM</td><td>Prepare For Nap</td></tr>
            <tr><td>12:30 PM</td><td>2:30 PM</td><td>Quiet Time</td></tr>
            <tr><td>2:30 PM</td><td>2:45 PM</td><td>Wake Up &amp; Bathroom Time</td></tr>
            <tr><td>2:45 PM</td><td>3:30 PM</td><td>Story Time or Manipulatives</td></tr>
            <tr><td>3:30 PM</td><td>3:50 PM</td><td>Afternoon Snack</td></tr>
            <tr><td>3:50 PM</td><td>4:30 PM</td><td>Learning Time (Korean, Math, Kintergarten readiness)</td></tr>
            <tr><td>4:30 PM</td><td>5:30 PM</td><td>Outdoor Play</td></tr>
            <tr><td>5:30 PM</td><td>6:00 PM</td><td>Prepare For Home</td></tr>
          </tbody>
        </table>
        <p><span class="label label-info">Info</span> Schedule will vary according to weather and time changes, and we frequently visit the neighborhood playground when the weather is nice.</p>
      </div>
      <div class="span6">
        <div id="myCarousel" class="carousel slide">
          <div class="carousel-inner">
            <div class="item active">
              <img src="/assets/images/carousel/001.jpg" alt="">
<!--
              <div class="carousel-caption">
                <h4>First Thumbnail label</h4>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
-->
            </div>
            <div class="item">
              <img src="/assets/images/carousel/002.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/003.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/004.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/005.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/006.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/007.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/008.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/009.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/010.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/011.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/012.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/013.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/014.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/015.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/016.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/017.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/018.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/019.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/020.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/021.jpg" alt="">
            </div>
            <div class="item">
              <img src="/assets/images/carousel/022.jpg" alt="">
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
        </div>
      </div>
    </div>
    <script>$('.carousel').carousel({interval: 3000});</script>
    <hr/>
    <footer class="footer">
      <p>Sa Rang Child Care &copy; Copyright 2012</p>
    </footer>
  </div>
</html>