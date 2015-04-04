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
      <h1>Staff</h1>
    </div>
    <div class="row">
      <div class="span6">
        <a href="#" class="thumbnail">
          <img src="/assets/images/staff/mrsji.jpg"/>
        </a>
        <h2>Mrs. Ji (aka 선생님)</h2>
        <p>Sa Rang Child Care was founded in 1997 by Mrs. Ji. After having worked in various fields of occupation since she immigrated to the U.S. in 1994, she decided it was finally time to pursue her passion in early childhood education and open up a home daycare. She earned all the Early Childhood Education units by attending the International Christian Education College in Los Angeles, CA. On weekends, she enjoys playing golf with her husband and getting involved with church ministries.</p>
      </div>
      <div class="span6">
        <a href="#" class="thumbnail">
          <img src="/assets/images/staff/gracejichang.jpg"/>
        </a>
        <h2>Grace Ji Chang (aka 이모)</h2>
        <p>After graduating from UCSB, Grace worked at Papillion Preschool in Burlingame, CA while earning her ECE units for her Child Development Site Supervisor Permit. She then teamed up with her Mother in educating young minds in 2006. She enjoys spending the weekend exploring museums, amusement parks, and other kid-friendly venues with her husband and two daughters (5 and 3).</p>
      </div>
    </div>
    <hr/>
    <footer class="footer">
      <p>Sa Rang Child Care &copy; Copyright 2012</p>
    </footer>
  </div>
</html>