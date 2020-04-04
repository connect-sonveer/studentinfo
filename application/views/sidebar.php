
    <form action="#" id="search-form">
        <fieldset>
          <div class="rowElem">
            <input type="text">
            <a href="#">Search</a></div>
        </fieldset>
      </form>
    </div>
  </header>
  <div class="container">
    <aside>
      <h3>Categories</h3>
      <ul class="categories">
        <li><span><a href="#">Programs</a></span></li>
        <li><span><a href="<?php echo base_url(); ?>student">Student Info</a></span></li>
        <li><span><a href="#">Teachers</a></span></li>
        <li><span><a href="#">Descriptions</a></span></li>
        <li><span><a href="#">Administrators</a></span></li>
        <li><span><a href="#">Basic Information</a></span></li>
        <li><span><a href="#">Vacancies</a></span></li>
        <li class="last"><span><a href="#">Calendar</a></span></li>
      </ul>
      <div id="newsletter-form" style='padding-bottom: 15px'>
        <fieldset>
          <div class="rowElem">
            <h2>Newsletter</h2>
            <?php echo form_open('index/subscription'); ?>
            <input type="email" name="email" placeholder="Enter Your Email Here"><input type="hidden" name="page" value="<?php echo $_SERVER["REQUEST_URI"]; ?>">
            <div class="clear"><a href="index/unsubscribe" class="fleft">Unsubscribe</a><button type="submit" class="btn btn-default fright">Submit</button></div>
            <?php echo form_close(); ?>
          </div>
        </fieldset>
      </div>
        <?php
            echo "<div class='newsletter_error_msg'  style='color:red;padding-bottom: 10px;'>";
            if (isset($msg)) 
            {
                echo $msg;
                echo validation_errors();
            }
            
            echo "</div>";
        ?>
      <h2>Fresh <span>News</span></h2>
      <ul class="news">
          <?php if (isset($query_result))
         foreach ($query_result as $row): ?>
            <li>
                <strong>
                    <?php 
                    $originalDate = $row['created_on'];
                    $newDate = date("F j, Y", strtotime($originalDate));
                    echo $newDate; ?>
                </strong>
                <h4><a href="#"><?php echo $row['title']; ?></a></h4>
                <?php echo $row['news_content']; ?>
            </li>
        <?php endforeach; 
        else
        {
         ?>
            <li>
                <h4><?php if (isset($error))echo $error; ?></h4>
            </li>
            <?php
        }
        ?>
      </ul>
    </aside>