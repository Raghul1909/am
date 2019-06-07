<?php  $pagetitle="AttendenceForm";
  include "includes/header.php"; 
?>
 <div class="container">
              <div class="row">
                 <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Attendance Form</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                  </div>
                </div>
<?php  
error_reporting(E_ALL ^ E_DEPRECATED);
include("config.php");?>
<div class="form-container">
    <form method="post" action="saveattendence.php" role="form">
     <!-- <div class="container"> -->
     <div class="col-lg-3">
      <div class="form-group">
<?php
    
      $i=1;
      $qs=mysqli_query($connect,"select student_name from std_entry where i=$i"); 
      $stid=mysqli_fetch_assoc($qs);      
      $stid=$stid['student_name'];
            echo "<select class='form-control' name='stid'>";
      echo"<option>Select Name</option>";
      while($stid!="")
      {
         
      $i++;
       echo"<option>$stid</option>"; 
      $qs=mysqli_query($connect,"select student_name from std_entry where i=$i");
      $stid=mysqli_fetch_assoc($qs);      
      $stid=$stid['student_name'];
      }
      echo "</select>"."<br>";
      ?>
      </div>
      </div> <!--col-lg-4-->
       <div class="col-lg-3">
      <?php
      $i=1;
      $qs=mysqli_query($connect,"select subname from subject_entry where id=$i"); 
      $st=mysqli_fetch_assoc($qs);      
      $st=$st['subname'];
            echo "<select class='form-control' name='st' >";
                  echo"<option>Select Subject Name</option>";
      while($st!="")
      { 
       echo"<option>$st</option>"; 
      $i++;
      $qs=mysqli_query($connect,"select subname from subject_entry where id=$i");
      $st=mysqli_fetch_assoc($qs);      
      $st=$st['subname'];
      }
      echo "</select>"."<br>";
      ?>
      </div> <!--col-lg-4-->
      <input type="radio" name="present" value="Present"/>Present
      <input type="radio" name="present" value="Absent"/>Absent
      <button type="submit" name="save" value="Save" class="btn btn-success btn-sm">Save</button>





   
 </form>
 </div> <!--form-container-->
</div><!--container-->


<?php include "includes/footer.php"; ?>