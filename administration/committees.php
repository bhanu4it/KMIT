<?php 
include '../init.php';
include ROOT_DIR .  '/common/header.php'; ?>
 <!-- <app-committes>-->
  <section  id="committes">
  <div  class="container">
  <div  class="row">
  <div  class="col-md-12">
  
  <h5  class="blue-clr bold" style="font-family:timesnewroman;font-size:160%;">
  Committees
  <hr>
  </h5  >
  </div>
  </div  >
  

<div class="panel-group" id="accordion">
<div class="box">
<!-- Academic Core Committee -->
 <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Academic Core Committee</a>
        </h5>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("academiccorecommittee.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>Name of the Member </th>";
$temp1 .= "<th>Department</th>";
$temp1 .= "<th>Positon</th>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["Academic-Core_Committee"]); $i++)
{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["Academic-Core_Committee"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["Academic-Core_Committee"][$i]["MemberName"] . "</td>";
$temp1 .= "<td>" . $d["Academic-Core_Committee"][$i]["Dept"] . "</td>";
$temp1 .= "<td>" . $d["Academic-Core_Committee"][$i]["Position"] . "</td>";
$temp1 .= "</tr>";
}
 
/*End tag of table*/
$temp1 .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp1;
?>
		</div>
      </div>
    </div>
    </div>

    <div class="box">
<!-- Grievance Redressal Cell -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Grievance Redressal Cell</a>
        </h5>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("grievanceredressalcell.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>Name of the Member </th>";
$temp1 .= "<th>Department</th>";
$temp1 .= "<th>Positon</th>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["Grievance-Redressal-Cell"]); $i++)
{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["Grievance-Redressal-Cell"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["Grievance-Redressal-Cell"][$i]["MemberName"] . "</td>";
$temp1 .= "<td>" . $d["Grievance-Redressal-Cell"][$i]["Dept"] . "</td>";
$temp1 .= "<td>" . $d["Grievance-Redressal-Cell"][$i]["Position"] . "</td>";
$temp1 .= "</tr>";
}
 
/*End tag of table*/
$temp1 .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp1;
?>
		</div>
      </div>
    </div>
</div>

<div class="box">
    <!-- Students Mentoring and Counseling committee -->
 <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Students Mentoring and Counseling Committee</a>
        </h5>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("studentsmentoringandcounselingcommittee.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>Name of the Member </th>";
$temp1 .= "<th>Department</th>";
$temp1 .= "<th>Positon</th>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["Students-Mentoring-and-Counseling-Committee"]); $i++)
{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["Students-Mentoring-and-Counseling-Committee"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["Students-Mentoring-and-Counseling-Committee"][$i]["MemberName"] . "</td>";
$temp1 .= "<td>" . $d["Students-Mentoring-and-Counseling-Committee"][$i]["Dept"] . "</td>";
$temp1 .= "<td>" . $d["Students-Mentoring-and-Counseling-Committee"][$i]["Position"] . "</td>";
$temp1 .= "</tr>";
}
 
/*End tag of table*/
$temp1 .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp1;
?>
		</div>
      </div>
    </div>
</div>

<div class="box">
<!-- Purchase/Stores Committee -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Purchase/Stores Committee</a>
        </h5>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("purchaseandstores.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>Name of the Member </th>";
$temp1 .= "<th>Department</th>";
$temp1 .= "<th>Positon</th>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["Purchase-and-Stores-Committee"]); $i++)
{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["Purchase-and-Stores-Committee"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["Purchase-and-Stores-Committee"][$i]["MemberName"] . "</td>";
$temp1 .= "<td>" . $d["Purchase-and-Stores-Committee"][$i]["Dept"] . "</td>";
$temp1 .= "<td>" . $d["Purchase-and-Stores-Committee"][$i]["Position"] . "</td>";
$temp1 .= "</tr>";
}
 
/*End tag of table*/
$temp1 .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp1;
?>
		</div>
      </div>
    </div>
</div>

<div class="box">
    <!-- Publications Committee -->
 <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Publications Committee</a>
        </h5>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("publicationcommittee.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>Name of the Member </th>";
$temp1 .= "<th>Department</th>";
$temp1 .= "<th>Positon</th>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["Publication-Committee"]); $i++)
{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["Publication-Committee"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["Publication-Committee"][$i]["MemberName"] . "</td>";
$temp1 .= "<td>" . $d["Publication-Committee"][$i]["Dept"] . "</td>";
$temp1 .= "<td>" . $d["Publication-Committee"][$i]["Position"] . "</td>";
$temp1 .= "</tr>";
}
 
/*End tag of table*/
$temp1 .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp1;
?>
		</div>
      </div>
    </div>
</div>

<div class="box">
<!-- Sexual Harassment Eradication Committee -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Sexual Harassment Eradication Committee</a>
        </h5>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("sexualharassmenteradicationcommittee.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>Name of the Member </th>";
$temp1 .= "<th>Department</th>";
$temp1 .= "<th>Positon</th>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["Sexual-Harassment-Eradication-Committee"]); $i++)
{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["Sexual-Harassment-Eradication-Committee"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["Sexual-Harassment-Eradication-Committee"][$i]["MemberName"] . "</td>";
$temp1 .= "<td>" . $d["Sexual-Harassment-Eradication-Committee"][$i]["Dept"] . "</td>";
$temp1 .= "<td>" . $d["Sexual-Harassment-Eradication-Committee"][$i]["Position"] . "</td>";
$temp1 .= "</tr>";
}
 
/*End tag of table*/
$temp1 .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp1;
?>
		</div>
      </div>
    </div>
</div>

<div class="box">
    <!-- Training and Placement committee -->
 <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Training and Placement Committee</a>
        </h5>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("trainingandplacementcommittee.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>Name of the Member </th>";
$temp1 .= "<th>Department</th>";
$temp1 .= "<th>Positon</th>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["TrainingandPlacement-Committee"]); $i++)
{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["TrainingandPlacement-Committee"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["TrainingandPlacement-Committee"][$i]["MemberName"] . "</td>";
$temp1 .= "<td>" . $d["TrainingandPlacement-Committee"][$i]["Dept"] . "</td>";
$temp1 .= "<td>" . $d["TrainingandPlacement-Committee"][$i]["Position"] . "</td>";
$temp1 .= "</tr>";
}
 
/*End tag of table*/
$temp1 .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp1;
?>
		</div>
      </div>
    </div>
</div>

<div class="box">
<!-- Internal Quality Assurance Committee (IQAC) -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Internal Quality Assurance Committee (IQAC)</a>
        </h5>
      </div>
      <div id="collapse8" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("IQAC.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>Name of the Member </th>";
$temp1 .= "<th>Department</th>";
$temp1 .= "<th>Positon</th>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["IQAC_Committee"]); $i++)
{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["IQAC_Committee"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["IQAC_Committee"][$i]["MemberName"] . "</td>";
$temp1 .= "<td>" . $d["IQAC_Committee"][$i]["Dept"] . "</td>";
$temp1 .= "<td>" . $d["IQAC_Committee"][$i]["Position"] . "</td>";
$temp1 .= "</tr>";
}
 
/*End tag of table*/
$temp1 .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp1;
?>
		</div>
      </div>
    </div>
    </div>

    <div class="box">
<!-- College Maintenance committee -->
<div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">College Maintenance committee</a>
        </h5>
      </div>
      <div id="collapse9" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("collegemaintenancecommittee.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>Name of the Member </th>";
$temp1 .= "<th>Department</th>";
$temp1 .= "<th>Positon</th>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["College-Maintenance-Committee"]); $i++)
{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["College-Maintenance-Committee"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["College-Maintenance-Committee"][$i]["MemberName"] . "</td>";
$temp1 .= "<td>" . $d["College-Maintenance-Committee"][$i]["Dept"] . "</td>";
$temp1 .= "<td>" . $d["College-Maintenance-Committee"][$i]["Position"] . "</td>";
$temp1 .= "</tr>";
}
 
/*End tag of table*/
$temp1 .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp1;
?>
		</div>
      </div>
    </div>
</div>

<div class="box">
<!-- NSS Committee -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">NSS Committee</a>
        </h5>
      </div>
      <div id="collapse10" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("NSSCommittee.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>Name of the Member </th>";
$temp1 .= "<th>Department</th>";
$temp1 .= "<th>Positon</th>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["NSS-Committee"]); $i++)
{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["NSS-Committee"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["NSS-Committee"][$i]["MemberName"] . "</td>";
$temp1 .= "<td>" . $d["NSS-Committee"][$i]["Dept"] . "</td>";
$temp1 .= "<td>" . $d["NSS-Committee"][$i]["Position"] . "</td>";
$temp1 .= "</tr>";
}
 
/*End tag of table*/
$temp1 .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp1;
?>
		</div>
      </div>
    </div>
    </div>

    <div class="box">

    <!-- Social Welfare (BC/SC/ST) Committee -->
 <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">Social Welfare (BC/SC/ST) Committee</a>
        </h5>
      </div>
      <div id="collapse11" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("socialwelfarecommittee.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>Name of the Member </th>";
$temp1 .= "<th>Department</th>";
$temp1 .= "<th>Positon</th>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["Social-Welfare-Committee"]); $i++)
{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["Social-Welfare-Committee"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["Social-Welfare-Committee"][$i]["MemberName"] . "</td>";
$temp1 .= "<td>" . $d["Social-Welfare-Committee"][$i]["Dept"] . "</td>";
$temp1 .= "<td>" . $d["Social-Welfare-Committee"][$i]["Position"] . "</td>";
$temp1 .= "</tr>";
}
 
/*End tag of table*/
$temp1 .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp1;
?>
		</div>
      </div>
    </div>
</div>

<div class="box">
<!-- Sports & Games Committee -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">Sports & Games Committee</a>
        </h5>
      </div>
      <div id="collapse12" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("sportsandgamescommittee.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>Name of the Member </th>";
$temp1 .= "<th>Department</th>";
$temp1 .= "<th>Positon</th>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["SportsandGames-Committee"]); $i++)
{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["SportsandGames-Committee"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["SportsandGames-Committee"][$i]["MemberName"] . "</td>";
$temp1 .= "<td>" . $d["SportsandGames-Committee"][$i]["Dept"] . "</td>";
$temp1 .= "<td>" . $d["SportsandGames-Committee"][$i]["Position"] . "</td>";
$temp1 .= "</tr>";
}
 
/*End tag of table*/
$temp1 .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp1;
?>
		</div>
      </div>
    </div>
</div>

<div class="box">
    <!-- Examination & Result Assessment Committee -->
 <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">Examination & Result Assessment Committee</a>
        </h5>
      </div>
      <div id="collapse13" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("examinationandresultassessmentcommittee.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>Name of the Member </th>";
$temp1 .= "<th>Department</th>";
$temp1 .= "<th>Positon</th>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["ExaminationandResult-Assessment-Committee"]); $i++)
{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["ExaminationandResult-Assessment-Committee"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["ExaminationandResult-Assessment-Committee"][$i]["MemberName"] . "</td>";
$temp1 .= "<td>" . $d["ExaminationandResult-Assessment-Committee"][$i]["Dept"] . "</td>";
$temp1 .= "<td>" . $d["ExaminationandResult-Assessment-Committee"][$i]["Position"] . "</td>";
$temp1 .= "</tr>";
}
 
/*End tag of table*/
$temp1 .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp1;
?>
		</div>
      </div>
    </div>
</div>

<div class="box">

<!-- Arts/Cultural Committee -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse14">Arts/Cultural Committee</a>
        </h5>
      </div>
      <div id="collapse14" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("artsandculturalcommittee.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>Name of the Member </th>";
$temp1 .= "<th>Department</th>";
$temp1 .= "<th>Positon</th>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["ArtsandCultural-Committee"]); $i++)
{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["ArtsandCultural-Committee"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["ArtsandCultural-Committee"][$i]["MemberName"] . "</td>";
$temp1 .= "<td>" . $d["ArtsandCultural-Committee"][$i]["Dept"] . "</td>";
$temp1 .= "<td>" . $d["ArtsandCultural-Committee"][$i]["Position"] . "</td>";
$temp1 .= "</tr>";
}
 
/*End tag of table*/
$temp1 .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp1;
?>
		</div>
      </div>
    </div>
</div>

<div class="box">
    <!-- Self Learning Committee -->
 <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse15">Self Learning Committee</a>
        </h5>
      </div>
      <div id="collapse15" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("selflearningcommittee.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>Name of the Member </th>";
$temp1 .= "<th>Department</th>";
$temp1 .= "<th>Positon</th>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["Self-Learning-Committee"]); $i++)
{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["Self-Learning-Committee"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["Self-Learning-Committee"][$i]["MemberName"] . "</td>";
$temp1 .= "<td>" . $d["Self-Learning-Committee"][$i]["Dept"] . "</td>";
$temp1 .= "<td>" . $d["Self-Learning-Committee"][$i]["Position"] . "</td>";
$temp1 .= "</tr>";
}
 
/*End tag of table*/
$temp1 .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp1;
?>
		</div>
      </div>
    </div>
</div>

<div class="box">
<!-- Entrepreneurship Development Cell -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse16">Entrepreneurship Development Cell</a>
        </h5>
      </div>
      <div id="collapse16" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("entrepreneurshipdevelopmentcell.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>Name of the Member </th>";
$temp1 .= "<th>Department</th>";
$temp1 .= "<th>Positon</th>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["Entrepreneurship-Development-Cell"]); $i++)
{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["Entrepreneurship-Development-Cell"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["Entrepreneurship-Development-Cell"][$i]["MemberName"] . "</td>";
$temp1 .= "<td>" . $d["Entrepreneurship-Development-Cell"][$i]["Dept"] . "</td>";
$temp1 .= "<td>" . $d["Entrepreneurship-Development-Cell"][$i]["Position"] . "</td>";
$temp1 .= "</tr>";
}
 
/*End tag of table*/
$temp1 .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp1;
?>
		</div>
      </div>
    </div>
</div>

<div>

</section>
<?php include ROOT_DIR .  '/common/footer.php'; ?>