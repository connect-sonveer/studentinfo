<!DOCTYPE html>
<?php include("header.php"); ?>
<body id="page2">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Student's site</a></h1>
      <nav>
        <ul>
          <li><a href="<?php echo base_url(); ?>" class="m1">Home Page</a></li>
          <li class="current"><a href="<?php echo base_url(); ?>about" class="m2">About Us</a></li>
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
        <h2>About <span>team</span></h2>
        <ul class="list">
          <li><img src="<?php echo base_url(); ?>public/images/2page-img1.jpg">
            <h4>Team Member One</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu.</p>
          </li>
          <li><img src="<?php echo base_url(); ?>public/images/2page-img2.jpg">
            <h4>Another Team Member </h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu.</p>
          </li>
          <li class="last"><img src="<?php echo base_url(); ?>public/images/2page-img3.jpg">
            <h4>Another Team Member </h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu.</p>
          </li>
        </ul>
        <h2>About <span>Website</span></h2>
        <div class="img-box"><img src="<?php echo base_url(); ?>public/images/2page-img4.jpg"><span class="txt1">Nemo enim ipsam voluptatem</span> quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore aliquam. </div>
        <p class="p0"><span class="txt1">Quis autem vel eum</span> iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptasaut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
      </div>
    </section>
  </div>
</div>
<?php include("footer.php"); ?>
<!-- END PAGE SOURCE -->
</body>
</html>
