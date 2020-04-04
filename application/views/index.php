
<!DOCTYPE html>
<?php include("header.php"); ?>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Student's site</a></h1>
      <nav>
        <ul>
          <li class="current"><a href="<?php echo base_url(); ?>" class="m1">Home Page</a></li>
          <li><a href="<?php echo base_url(); ?>about" class="m2">About Us</a></li>
          <li><a href="<?php echo base_url(); ?>articles" class="m3">Our Articles</a></li>
          <li><a href="<?php echo base_url(); ?>contact" class="m4">Contact Us</a></li>
          <li class="last"><a href="<?php echo base_url(); ?>sitemap" class="m5">Sitemap</a></li>
        </ul>
      </nav>
      
      


    <?php include ('sidebar.php'); ?>
    <section id="content">
      <div id="banner">
        <h2>Professional <span>Online Education <span>Since 1992</span></span></h2>
      </div>
      
      
      
      
      <div class="inside">
        <h2>Recent <span>Articles</span></h2>
        <ul class="list">
          <li><span><img src="<?php echo base_url(); ?>public/images/icon1.png"></span>
            <h4>Vision</h4>
            <p>To be an outstanding institution in the country imparting technical education, providing need based, value based and career based programmes and producing self-reliant, self-sufficient technocrats, capable of meeting new challenges.</p>
          </li>
          <li><span><img src="<?php echo base_url(); ?>public/images/icon2.png"></span>
            <h4>Mission</h4>
            <p>To educate young aspirants in various technical fields to fulfill global requirement of human resources by providing sustainable quality education, training and invigorating environment, also molding them into skilled competent.</p>
          </li>
          <li class="last"><span><img src="<?php echo base_url(); ?>public/images/icon3.png"></span>
            <h4>Background</h4>
            <p>  The society was the results of initiatives taken by Late Shri Chandra Sen Agarwal who was a great educationist and spent all his life towards the cause of education.
</p>
          </li>
        </ul>
        <h2>Move Forward <span>With Your Education</span></h2>
        <p><span class="txt1">Student Information System</span> are the primary systems for operating colleges. </p>
        <div class="img-box"><img src="<?php echo base_url(); ?>public/images/1page-img.jpg">The Student Information System is a student-level data collection system that allows the Department to collect and analyze more accurate and comprehensive information.</div>
        <p class="p0">Student information systems provide capabilities for entering student records, tracking student attendance, and managing many other student-related data needs in a college or university.</p>
      </div>
    </section>
  </div>
</div>
<?php include("footer.php"); ?>
<!-- END PAGE SOURCE -->
</body>
</html>
