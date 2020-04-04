<!DOCTYPE html>
<?php include("header.php"); ?>
<body id="page6">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Student's site</a></h1>
      <nav>
        <ul>
          <li><a href="<?php echo base_url(); ?>" class="m1">Home Page</a></li>
          <li><a href="<?php echo base_url(); ?>about" class="m2">About Us</a></li>
          <li><a href="<?php echo base_url(); ?>articles" class="m3">Our Articles</a></li>
          <li><a href="<?php echo base_url(); ?>contact" class="m4">Contact Us</a></li>
          <li class="last current"><a href="sitemap" class="m5">Sitemap</a></li>
        </ul>
      </nav>
      
     
    <?php include ('sidebar.php'); ?>
    <section id="content">
      <div id="banner">
        <h2>Professional <span>Online Education <span>Since 1992</span></span></h2>
      </div>
      
      
      
      
      <div class="inside">
        <h2>Site <span>Map</span></h2>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
        <ul class="sitemap">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Articles</a>
            <ul>
              <li><a href="article.html">Article 1</a></li>
              <li><a href="#">Article 2</a></li>
              <li><a href="#">Article 3</a></li>
            </ul>
          </li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Site Map</a></li>
        </ul>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
        <p class="p0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
      </div>
    </section>
  </div>
</div>
<?php include("footer.php"); ?>
<!-- END PAGE SOURCE -->
</body>
</html>
