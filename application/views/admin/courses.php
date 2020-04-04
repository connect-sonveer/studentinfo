<?php include("header.php"); ?>
<body>

    <div id="page-wrapper">
        <div class="container-fluid" style="margin-top: 15px;">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title" >
                                Course Management
                            </h1>
                        </div>
                        <div class="panel-body">
                            <div style="padding-left: 25px;">
                                <h4>List of all Courses</h4>
                                <button type='button' class='btn btn-primary pull-right addCourse' data-toggle='modal' data-target='#addCourseModal'>Add Course</button><br>
                                <div class="form-group form-inline col-lg-8">
                                        <table class="table table table-striped table-bordered" id="courseListDatatable" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Sr No.</th>
                                                    <th>Course Name</th>
                                                    <th>Course Detail</th>
                                                    <th>Course Key</th>
                                                    <th>Edit / Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                //echo"<pre>";
                                                //print_r($result);
                                                //echo"<pre>";
                                                $i=1;
                                                foreach($result as $row){
                                                    echo"<tr><td>".$i."</td>";
                                                    echo"<td>".$row->coursename."</td>";
                                                    echo"<td>".$row->comment."</td>";
                                                    echo"<td>".$row->coursekey."</td><td><button type='button' class='btn btn-sm btn-info editCourse' id='editCourse_".$row->courseid."'>Edit</button> <button type='button' class='btn btn-sm btn-danger deleteCourse' id='deleteCourse_".$row->courseid."'>Delete</button></td></tr>";
                                                $i++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                </div>
                                
                            </div>
                        </div>
                        <!--////////////////ADD COURSE/////////////////////-->
                        <?php 
                            echo form_open('admin/addCourse',array('id' => 'addCourseForm')); 
                        ?>
                        <div id="addCourseModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close close_Course" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Add New Course</h4>
                                    </div>
                                    <!--<form class="well form-horizontal"  id="registration">-->
                                        <div class="modal-body">
                                            <div class="form-group form-inline">
                                                <label for="heading">Course Name:</label>
                                                <label style="padding-left: 25px;">
                                                <input type="text" name="name" class="form-control" id="name">
                                                </label>
                                            </div>
                                            <div class="form-group form-inline">
                                                <label for="heading">Course Detail:</label>
                                                <label style="padding-left: 25px;">
                                                <textarea rows="2" cols="25" name="detail" class="form-control" id="detail"></textarea>
                                                </label>
                                            </div>
                                            <div class="form-group form-inline">
                                                <label for="heading">Course Key:</label>
                                                <label style="padding-left: 40px;">
                                                <input type="text" name="key" class="form-control" id="key">
                                                </label>
                                            </div>
                                            <label style="padding-left: 130px;">
                                                <button type="submit" class="btn btn-primary" id="course_submit" data-backdrop="static" data-toggle="modal" >Submit</button>
                                            </label>
                                            <?php echo form_close(); 
                                            echo "<div class='error_msg'  style='color:red;padding-left:90px;'>";
                                            if (isset($error)) 
                                            {
                                                echo validation_errors();
                                            }
                                            echo "</div>";
                                            ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="" class="btn btn-default close_Course" data-dismiss="modal">Close</button>
                                        </div>
                                    <!--</form>-->
                                </div>
                            </div>
                        </div>
                        <div id="addCourseAlertModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p id="addCourseData">.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default courseClose" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--////////////////EDIT COURSE/////////////////////-->
                        <?php 
                            echo form_open('admin/addCourse',array('id'=>'editCourseForm')); 
                        ?>
                        <div id="editCourseModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit Course</h4>
                                    </div>
                                    <form class="well form-horizontal"  id="Edit_Course">
                                        <div class="modal-body">
                                            <div class="form-group form-inline">
                                                <label for="heading">Course Name:</label>
                                                <label style="padding-left: 25px;">
                                                <input type="text" name="name" class="form-control" id="editname">
                                                </label>
                                            </div>
                                            <div class="form-group form-inline">
                                                <label for="heading">Course Detail:</label>
                                                <label style="padding-left: 25px;">
                                                <textarea rows="2" cols="25" name="detail" class="form-control" id="editdetail"></textarea>
                                                </label>
                                            </div>
                                            <div class="form-group form-inline">
                                                <label for="heading">Course Key:</label>
                                                <label style="padding-left: 40px;">
                                                <input type="text" name="key" class="form-control" id="editkey">
                                                <input type="hidden" name="courseid" class="form-control valid" id="courseid">
                                                </label>
                                            </div>
                                            <label style="padding-left: 130px;">
                                                <button type="submit" class="btn btn-primary" id="course_edit" data-backdrop="static" data-toggle="modal" >Submit</button>
                                            </label>
                                            <?php echo form_close(); 
                                            echo "<div class='error_msg'  style='color:red;padding-left:90px;'>";
                                            if (isset($error)) 
                                            {
                                                echo $error;
                                            }
                                            echo validation_errors();
                                            echo "</div>";
                                            ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default close_Course" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="editCourseAlertModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close close_Course" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p id="editCourseData"></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default courseClose" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--////////////////DELETE COURSE/////////////////////-->
                        <div id="deleteCourseModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete Course</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p id="deleteCourseData">Are you sure! you want to delete this course.</p>
                                        <input type="hidden" name="courseid" class="form-control valid" id="deleteid">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id="courseDelete" class="btn btn-primary" data-dismiss="modal">Delete</button> 
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="deleteCourseAlertModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Message</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p id="deleteCourseAlertData"></p>
                                        <input type="hidden" name="courseid" class="form-control valid" id="deleteid">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default courseClose" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!--////////////////ADD SUBJECT/////////////////////-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title" >
                                Subject Management
                            </h1>
                        </div>
                        <div class="panel-body">
                            <?php 
                                $res = getAllCourse();
                                echo form_open('admin/addSubject'); 
                            ?>
                            <div style="padding-left: 25px;">
                                <h4>Add New Subject</h4><br>
                                    <div class="form-group form-inline">
                                        <label for="CourseName">Course Name:</label>
                                        <label style="padding-left: 25px;">
                                        <select name="courseName" class="form-control" id="courseName">
                                            <option value=''>Select</option>
                                            <?php
                                            foreach($res as $row)
                                            {
                                                echo"<option value='".$row->coursekey."'>".$row->coursekey."</option>";
                                            }
                                            ?>
                                        </select>
                                        </label>
                                    </div>
                                    <div class="form-group form-inline dynamicStream"  style="display:none;">
                                        <label for="CourseName">Stream Name:</label>
                                        <label style="padding-left: 25px;">
                                        <select name="streamName" class="form-control" id="streamName">
                                            <option value='' selected="selected">Select</option>
                                        </select>
                                        </label>
                                    </div>
                                    <div class="form-group form-inline">
                                        <label for="SubjectName">Subject Name:</label>
                                        <label style="padding-left: 25px;">
                                        <input type="text" name="subName" class="form-control" id="subName">
                                        </label>
                                    </div>
                                    <div class="form-group form-inline">
                                        <label for="SubjectDetail">Subject Detail:</label>
                                        <label style="padding-left: 25px;">
                                        <input type="text" name="subDetail" class="form-control" id="subDetail">
                                        </label>
                                    </div>
                                    <div class="form-group form-inline">
                                        <label for="SubjectKey">Semester:</label>
                                        <label style="padding-left: 55px;">
                                            <select name="semester" class="form-control" id="semester">
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                                <option value="5">Five</option>
                                                <option value="6">Six</option>
                                                <option value="7">Seven</option>
                                                <option value="8">Eight</option>
                                            </select>
                                        </label>
                                    </div>
                                    <label style="padding-left: 125px;">
                                    <button type="submit" class="btn btn-default">Submit</button></label>
                                    <?php echo form_close(); 
                                    echo "<div class='error_msg'  style='color:red;padding-left:90px;'>";
                                    if (isset($msg)) 
                                    {
                                        echo $msg;
                                        echo validation_errors();
                                    }
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
        
        $("#courseListDatatable").DataTable({
            "sPaginationType": "full_numbers"
        });
 
        $("#course_submit").on('click',function(){
        //$("form").submit(function(){
            var name = $("input[name=name]").val();
            $('#addCourseForm').validate({
                rules: {
                        name: "required",
                        detail: "required",
                        key:"required"
                },
                messages:{
                        name: "Please enter Course Name",
                        detail: "Please enter Course Detail",
                        key: "Please enter Course Key"
                },
                submitHandler: function() {

                        var name = $("#name").val();
                        var detail = $("#detail").val();
                        var key = $("#key").val();
                        //alert(detail);
                        $.ajax({
                                url:"<?php echo base_url(); ?>" + "admin/addCourse",
                                dataType: 'json',
                                type:'POST',
                                data:{
                                           'name':name,
                                           'detail':detail,
                                           'key':key,
                                        },
                                success:function(data){
                                        if(data.success == true){
                                                //console.log(data.data);
                                                $("#addCourseForm")[0].reset();
                                                $("#addCourseModal").modal("hide");
                                                $('#addCourseAlertModal').modal('show');
                                                $("#addCourseData").text(data.data);
                                        }else{
                                            console.log(data);
                                        }
                                },
                                error:function(error){
                                        console.log('error');
                                        console.log(error);
                                },
                        });
                }
            });
        });
        
        $(".courseClose").click(function(){
            window.location.reload();
        });
        
        $(".close_course").click(function(){
            var validator = $('#addCourseForm').validate({});
            validator.resetForm();
        });
        
        $("#courseListDatatable").on('click','.editCourse',function(){
            $("#editCourseModal").modal("show");
            var id = $(this).attr( "id" );
            id = id.split("_");
            //alert(id[1]);
            $("#courseid").val(id[1]);
            $.ajax({
                url:"<?php echo base_url(); ?>" + "admin/getCourseDetail",
                dataType: 'json',
                type:'POST',
                data:{
                           'id':id[1]
                        },
                success:function(data){
                        if(data.success == true){
                            //console.log(data.data[0].coursename);
                            $("#editname").val(data.data[0].coursename);
                            $("#editdetail").val(data.data[0].comment);
                            $("#editkey").val(data.data[0].coursekey);
                        }
                },
                error:function(error){
                        console.log('error');
                        console.log(error);
                },
            });
        });
        
        $("#course_edit").click(function(){
            $('#editCourseForm').validate({
                rules: {
                        name: "required",
                        detail: "required",
                        key:"required"
                },
                messages:{
                        name: "Please enter Course Name",
                        detail: "Please enter Course Detail",
                        key: "Please enter Course Key"
                },
                submitHandler: function() {

                    var name = $("#editname").val();
                    var detail = $("#editdetail").val();
                    var key = $("#editkey").val();
                    var courseid = $("#courseid").val();
                    //alert(courseid);
                    $.ajax({
                            url:"<?php echo base_url(); ?>" + "admin/updateCourse",
                            dataType: 'json',
                            type:'POST',
                            data:{
                                       'name':name,
                                       'detail':detail,
                                       'key':key,
                                       'courseid':courseid,
                                    },
                            success:function(data){
                                    if(data.success == true){
                                        console.log(data.data);
                                        $("#editCourseModal").modal("hide");
                                        $('#editCourseAlertModal').modal('show');
                                        $("#editCourseData").text(data.data);
                                    }else{
                                        console.log(data);
                                        $("#editCourseModal").modal("hide");
                                        $('#editCourseAlertModal').modal('show');
                                        $("#editCourseData").text(data.data);
                                    }
                            },
                            error:function(error){
                                    console.log('error');
                                    console.log(error);
                            },
                    });
                }
            });
        });
        $("#courseListDatatable").on('click','.deleteCourse',function(){
            $('#deleteCourseModal').modal('show');
            var id = $(this).attr( "id" );
            id = id.split("_");
            //alert(id[1]);
            $("#deleteid").val(id[1]);
        });
        
        $("#courseDelete").click(function(){
           var deleteid = $("#deleteid").val();
           $.ajax({
                    url:"<?php echo base_url(); ?>" + "admin/deleteCourse",
                    dataType: 'json',
                    type:'POST',
                    data:{
                               'deleteid':deleteid,
                            },
                    success:function(data){
                            if(data.success == true){
                                console.log(data);
                                $("#deleteCourseModal").modal("hide");
                                $('#deleteCourseAlertModal').modal('show');
                                $("#deleteCourseAlertData").text(data.data);
                            }else{
                                console.log(data);
                            }
                    },
                    error:function(error){
                            console.log('error');
                            console.log(error);
                    },
            });
        });
        
        $(document).on('change','#courseName',function(){
           var coursename = $("#courseName").find(":selected").text();
           $.ajax({
                    url:"<?php echo base_url(); ?>" + "admin/getStreamByCourse",
                    dataType: 'json',
                    type:'POST',
                    data:{
                               'coursename':coursename,
                            },
                    success:function(data){
                            if(data.success == true){
                                //console.log(data.data);
                                $(".dynamicStream").show();
                                $("option").show();
                                $("#streamName").text("");
                                $("#streamName").append('<option value="">Select</option>');
                                $.each(data.data,function(key,value){
                                    $("#streamName").append('<option value="'+value.stream_key+'">'+value.stream_name+'</option>');
                                });
                            }else{
                                $(".dynamicStream").show();
                                $("#streamName").text("");
                                $("#streamName").append('<option value="">No Stream Found</option>');
                                    
                            }
                    },
                    error:function(error){
                            console.log('error');
                            console.log(error);
                    },
            });
        });
        
    });
</script>
</html>

    