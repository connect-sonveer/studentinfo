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
          <li class=""><a href="<?php echo base_url(); ?>contact" class="m4">Contact Us</a></li>
          <li class="last"><a href="<?php echo base_url(); ?>sitemap" class="m5">Sitemap</a></li>
        </ul>
      </nav>
    
    <?php include ('sidebar.php'); ?>
    <section id="content">
      <div id="banner">
        <h2>Professional <span>Online Education <span>Since 1992</span></span></h2>
      </div>
      
      <div class="inside">
        <h2>Search <span>By Name and Course</span></h2>
        
        <?php 
            $res = getAllCourse();
            echo form_open('students/studentDetail',array('id'=>"searchStudent")); 
        ?>
          <fieldset id="contacts-form">
            <div class="field">
              <label>Student Name:</label>
              <input type="text" name="studentName" value="" id="studentName" />
            </div>
            <div class="field">
              <label>Course Name:</label>
              <select name="courseName" id="courseName">
                    <?php
                    foreach($res as $row)
                    {
                        echo"<option value='".$row->coursekey."'>".$row->coursekey."</option>";
                    }
                    ?>
              </select>
            </div>
            <button type="submit" class="btn btn-default"style="margin-left:122px">Submit</button>
          </fieldset>
        <?php 
            echo form_close();
            echo "<div class='contact_error_msg'  style='color:red;padding-left:120px;padding-top: 20px;'>";
            if(isset($error)){
                echo $error;
            }
            echo validation_errors();
            echo "</div>";
            if(isset($result)){
        ?>
                <table width="650" class="studentInfo" style="border: 1px solid;margin-top: 50px">
                <tr>
                  <td width="30"><strong>ID</strong></td>
                  <td width="150"><strong>Name</strong></td>
                  <td width="200"><strong>Fathers Name</strong></td>
                  <td width="70"><strong>Semester</strong></td>
                  <td width="100"><strong>View Result</strong></td>
                </tr>
                <?php
                foreach($result as $row)
                {
                ?><tr>
                    <td><?php echo $result[0]["id"];?></td>
                    <td><?php echo $result[0]["studfname"]. " ". $result[0]["studlname"];?></td>
                    <td><?php echo $result[0]["fathername"];?></td>
                    <td><?php echo $result[0]["semester"];?></td>
                    <td><a href="result.php?resid=<?php echo $result[0]["id"];?>"><img src="<?php echo base_url(); ?>public/images/view.png" width="26" height="21"></a></td>
                  </tr>
                <?php
                }
        }
        ?>
            </table>
      </div>
    </section>
  </div>
</div>
<?php include("footer.php"); ?>
<!-- END PAGE SOURCE -->
</body>
</html>
