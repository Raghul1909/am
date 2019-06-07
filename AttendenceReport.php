<?php
include("Config.php");
?>
<?php

  $pagetitle="student Report";
  include "includes/header.php"; 
  ?>
  
  <div class="container">
  <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Attendance Report</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>

	<?php
    $query = "SELECT * FROM tbl"; //You don't need a ; like you do in SQL
$result = mysqli_query($connect,$query);

echo "<table style='width: 1140px; border: 1px solid black; background:white'>"; // start a table tag in the HTML
echo "<tr style=' height:45px; table-align:center; background:
#ff7600; border: 1px solid black;'><th style='border: 1px solid black;'>" . "ID" . "</th><th style='border: 1px solid black;'>" . "NAME" . "</th><th style='border: 1px solid black;'>". "SUBJECT" . "</th><th style='border: 1px solid black;'>". "ATTENDANCE" . "</th><th>". "DATE" . "</th></tr>";
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
  
echo "<tr style='border: 1px solid black; height:25px;'><td style='border: 1px solid black;'>" . $row['id'] . "</td><td style='border: 1px solid black;'>" . $row['stu'] . "</td><td style='border: 1px solid black;'>". $row['sub'] . "</td><td style='border: 1px solid black;'>". $row['attend'] . "</td><td style='border: 1px solid black;'>". $row['Date'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>";

  ?>
