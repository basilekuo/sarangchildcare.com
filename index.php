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
    <div class="hero-unit">
      <h1 lang="ko">사랑 유아원에 오신 걸 환영합니다!</h1>
      <p>Welcome to Sa Rang Child Care! Our goal is to provide young children with a home away from home in the San Francisco Bay Area where they can identify with their Korean heritage.</p>
    </div>

    <div class="page-header">
      <h1>Why Choose Us?</h1>
    </div>

    <div class="row">
      <div class="span4">
        <h2>Cultural Awareness</h2>
        <p>Children are immersed in Korean language and culture through songs, stories, and lessons as well as daily interactions with Korean-speaking teachers and friends. </p>
      </div>
      <div class="span4">
        <h2>Individualized Enrichment</h2>
        <p>Consistent staff and low student to teacher ratio accommodate the child's own developmental level and pace. Emergent curriculum is evolved out of the child's experiences and interests.</p>
     </div>
      <div class="span4">
        <h2>Intimate Family Setting</h2>
        <p>Family grouping of children encourage younger kids to learn from older kids and older kids to develop a sense of responsibility and caring behaviors.</p>
      </div>
    </div>

    <div class="row">
      <div class="span4">
        <h2>Parent Community</h2>
        <p>Be part of the Sa Rang community of parents who are like minded in raising a bilingual child.</p>
      </div>
      <div class="span4">
        <h2>Korean Food</h2>
        <p>Delicious and nutritious homemade meals and snacks. Some of our children's favorites include 미역국 (seaweed soup), 갈비탕 (beef short ribs soup), California rolls, curry rice, and omurice (omelette rice).</p>
      </div>
      <div class="span4"></div>
    </div>
    <hr/>
    <footer class="footer">
      <p>Sa Rang Child Care &copy; Copyright 2012</p>
    </footer>
  </div>
</html>