<?php include("header.php"); ?>
<body>

    <div id="page-wrapper" style="height:100%;">
        <div class="container-fluid" style="margin-top: 15px;">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title" >
                                News Management
                            </h1>
                        </div>
                        <div class="panel-body">
                            <?php 
                                echo form_open('admin/news',array('id'=>'newsRegistration')); 
                            ?>
                            <div style="padding-left: 25px;">
                                <h4>Add News Article</h4><br>
                                    <div class="form-group form-inline">
                                        <label for="heading">Heading:</label>
                                        <label style="padding-left: 25px;">
                                        <input type="text" name="heading" class="form-control" id="heading">
                                        </label>
                                    </div>
                                    <div class="form-group form-inline">
                                        <label for="article">Article:</label>
                                        <label style="padding-left: 40px;">
                                        <textarea class="form-control" rows="5" name="article" id="article"></textarea>
                                        </label>
                                    </div>
                                    <label style="padding-left: 90px;">
                                    <button type="submit" id="newsSubmit" class="btn btn-default">Submit</button></label>
                                    <?php echo form_close(); 
                                    echo "<div class='error_msg'  style='color:red;padding-left:90px;'>";
                                    echo validation_errors();
                                    echo "</div>";
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
</body>
<script type = "text/javascript" language = "javascript">
$(document).ready(function(){
        $("#newsSubmit").click(function(){
        //$("form").submit(function(){
            $('#newsRegistration').validate({
                rules: {
                        heading: "required",
                        article:"required"
                },
                messages:{
                        heading: "Please enter Course Name",
                        article:"Please enter article detail"
                },
                submitHandler: function() {

                        var heading = $("#heading").val();
                        var article = $("#article").val();
                        //alert(heading);
                        $.ajax({
                                url:"<?php echo base_url(); ?>" + "admin/add_news",
                                dataType: 'json',
                                type:'POST',
                                data:{
                                           'heading':heading,
                                           'article':article,
                                },
                                success:function(data){
                                        if(data.success == true){
                                                console.log(data);
                                                alert(data.data);
                                        }else{
                                            console.log(data);
                                            alert(data.data);
                                        }
                                },
                                error:function(error){
                                        console.log('error');
                                        console.log(error);
                                }
                        });
                }
            });
       });
});
</script>
</html>

    