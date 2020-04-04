<!DOCTYPE html>
<?php include("header.php"); ?>
<body id="page3">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Student's site</a></h1>
      <nav>
        <ul>
          <li><a href="<?php echo base_url(); ?>" class="m1">Home Page</a></li>
          <li><a href="<?php echo base_url(); ?>about" class="m2">About Us</a></li>
          <li class="current"><a href="<?php echo base_url(); ?>articles" class="m3">Our Articles</a></li>
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
        <h2>Articles</h2>
        <ul class="articles">
          <li><img src="<?php echo base_url(); ?>public/images/icon1.png">
            <h4><a href="article.html">Article 1</a></h4>
            Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</li>
          <li><img src="<?php echo base_url(); ?>public/images/icon2.png">
            <h4><a href="#">Article 2</a></h4>
            Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</li>
          <li><img src="<?php echo base_url(); ?>public/images/icon3.png">
            <h4><a href="#">Article 3</a></h4>
            Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</li>
          <li><img src="<?php echo base_url(); ?>public/images/icon4.png">
            <h4><a href="#">Article 4</a></h4>
            Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</li>
          <li><img src="<?php echo base_url(); ?>public/images/icon5.png">
            <h4><a href="#">Article 5</a></h4>
            Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</li>
          <li><img src="<?php echo base_url(); ?>public/images/icon6.png">
            <h4><a href="#">Article 6</a></h4>
            Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</li>
        </ul>
      </div>
    </section>
  </div>
</div>
<?php include("footer.php"); ?>
<!-- END PAGE SOURCE -->
</body>
</html>
