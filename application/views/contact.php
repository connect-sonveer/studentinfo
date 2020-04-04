<!DOCTYPE html>
<?php include("header.php"); ?>
<body id="page5">
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
          <li class="current"><a href="<?php echo base_url(); ?>contact" class="m4">Contact Us</a></li>
          <li class="last"><a href="<?php echo base_url(); ?>sitemap" class="m5">Sitemap</a></li>
        </ul>
      </nav>
    
    <?php include ('sidebar.php'); ?>
    <section id="content">
      <div id="banner">
        <h2>Professional <span>Online Education <span>Since 1992</span></span></h2>
      </div>
      
      <div class="inside">
        <h2>Our <span>Contacts</span></h2>
        <div class="address">
          <address>
          <strong>Zip Code:</strong>50122<br>
          <strong>Country:</strong>USA<br>
          <strong>Telephone:</strong>+354 5635600<br>
          <strong>Fax:</strong>+354 5635610
          </address>
          <div class="extra-wrap">
            <h4>Miscellaneous info:</h4>
            <p>If you have query regarding the college, admission procedure, campus life, placement, entrance test, fee structure, number of departments and scholarships, you can contact us on the following address. You can drop a mail or call us. We will be happy to assist you in best possible way.</p>
          </div>
        </div>
        
        <h2>Contact <span>Form</span></h2>
        <?php 
            echo form_open('contact/contactus'); 
        ?>
          <fieldset id="contacts-form">
            <div class="field">
              <label>Your Name:</label>
              <input type="text" name="name" value="" />
            </div>
            <div class="field">
              <label>Your E-mail:</label>
              <input type="email" name="email" value="" />
            </div>
            <div class="field">
              <label>Mobile No</label>
              <input type="text" name="mobile" value=""/>
            </div>
            <div class="field">
              <label>Subject</label>
              <input type="text" name="subject" value=""/>
            </div>
            <div class="field extra"style="height:150px;">
              <label>Your Message:</label>
              <textarea name="msg" cols="1" rows="1" style="width:278px;height:130px;" ></textarea>
            </div>
            <button type="submit" class="btn btn-default"style="margin-left:122px">Submit</button>
          </fieldset>
        <?php 
            echo form_close(); 
            echo "<div class='contact_error_msg'  style='color:red;padding-left:120px;padding-top: 20px;'>";
            if (isset($error)) 
            {
                echo $error;
                echo validation_errors();
            }
            
            echo "</div>";
        ?>
      </div>
    </section>
  </div>
</div>
<?php include("footer.php"); ?>
<!-- END PAGE SOURCE -->
</body>
</html>
