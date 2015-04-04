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
      <h1>Enroll <small>2012-2013 Monthly Rate</small></h1>
    </div>
    <div class="row">
      <div class="span12">
        <table class="table table-bordered table-striped">
          <colgroup>
            <col class="span3">
            <col class="span3">
            <col class="span3">
            <col class="span3">
          </colgroup>
          <thead>
            <tr>
              <th></th>
              <th>2 years and up</th>
              <th>1 year old</th>
              <th>Infant</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>5 days/week</td><td>$900</td><td>$1,000</td><td>$1,200</td></tr>
            <tr><td>3 days/week</td><td>$800</td><td colspan="2">$900</td></tr>
            <tr><td>2 days/week</td><td>$650</td><td colspan="2">$750</td></tr>
            <tr><td>AM class (8:30-12:30 PM)</td><td>$550</td><td colspan="2">Not Available</td></tr>
          </tbody>
        </table>
        <p><span class="label label-info">Hours</span> Sa Rang Child Care is open from 8 AM to 6 PM, Monday through Friday.</p>
      </div>
    </div>
    <hr/>
    <footer class="footer">
      <p>Sa Rang Child Care &copy; Copyright 2012</p>
    </footer>
  </div>
</html>