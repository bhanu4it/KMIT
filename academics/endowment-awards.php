<?php 
include '../init.php';
include ROOT_DIR .  '/common/header.php'; ?>
 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
            .embed360 {
                height: 350px;
                max-width: 700px;
            }
</style>
        <center>
     <div class="embed360" data-rotation="0 90 -10">
       
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=First slide"
         alt="Second slide [800x400]" 
         src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_175abec181c%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_175abec181c%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3125%22%20y%3D%22217.7%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" 
         data-holder-rendered="true">

         <div class="carousel-caption d-none d-md-block">
            <h5>Test 1</h5>
            <p>Description</p>
        </div>
     <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
         alt="Second slide [800x400]" 
         src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_175abec181c%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_175abec181c%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3125%22%20y%3D%22217.7%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" 
         data-holder-rendered="true">

         <div class="carousel-caption d-none d-md-block">
            <h5>Test 2</h5>
            <p>Description</p>
        </div>
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
         alt="Second slide [800x400]" 
         src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_175abec181c%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_175abec181c%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3125%22%20y%3D%22217.7%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" 
         data-holder-rendered="true">
         <div class="carousel-caption d-none d-md-block">
            <h5>Test 3</h5>
            <p>Description</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   

</div>
    </center>
    <script>
    embed360('.embed360');
    </script>
-->
  <section  id="endowment-awards">
  <div  class="container">
  <div  class="row">
  <div class="col-md-12">
  <header class="section-header">
  <h4 class="blue-clr bold" style="font-family:timesnewroman;font-size:200%;color:brown;">Endowment Awards</h4>
  </header>

 <div class="panel-group" id="accordion">
 <div class="box">
 <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Endowment Awards -2019</a>
        </h5>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_d = file_get_contents("endowmentawards.json");
$d = json_decode($str_d, true);
 
/*Initializing temp variable to design table dynamically*/

$temp1 = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp1 .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp1 .= "<th>RollNumber</th>";
$temp1 .= "<th>Name of the Student</th>";
$temp1 .= "<th>Award Name</th>";
$temp1 .= "<th>Award For</th></tr>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($d["Endowment Awards-2019"]); $i++)

{
$temp1 .= "<tr>";
$temp1 .= "<td>" . $d["Endowment Awards-2019"][$i]["id"] . "</td>";
$temp1 .= "<td>" . $d["Endowment Awards-2019"][$i]["RollNumber"] . "</td>";
$temp1 .= "<td>" . $d["Endowment Awards-2019"][$i]["StudentName"] . "</td>";
$temp1 .= "<td>" . $d["Endowment Awards-2019"][$i]["AwardName"] . "</td>";
$temp1 .= "<td>" . $d["Endowment Awards-2019"][$i]["AwardFor"] . "</td>";
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
    <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Endowment Awards -2018</a>
        </h5>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_data = file_get_contents("endowmentawards.json");
$data = json_decode($str_data, true);
 
/*Initializing temp variable to design table dynamically*/

$temp = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp .= "<th>RollNumber</th>";
$temp .= "<th>Name of the Student</th>";
$temp .= "<th>Award Name</th>";
$temp .= "<th>Award For</th></tr>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($data["Endowment Awards-2018"]); $i++)
{
$temp .= "<tr>";
$temp .= "<td>" . $data["Endowment Awards-2018"][$i]["id"] . "</td>";
$temp .= "<td>" . $data["Endowment Awards-2018"][$i]["RollNumber"] . "</td>";
$temp .= "<td>" . $data["Endowment Awards-2018"][$i]["StudentName"] . "</td>";
$temp .= "<td>" . $data["Endowment Awards-2018"][$i]["AwardName"] . "</td>";
$temp .= "<td>" . $data["Endowment Awards-2018"][$i]["AwardFor"] . "</td>";
$temp .= "</tr>";
}
 
/*End tag of table*/
$temp .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp;
?>
		</div>
      </div>
    </div>
	</div>
	<div class="box">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title" style="font-family:verdana;font-size:120%;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Endowment Awards -2017</a>
        </h5>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
/*Fetching JSON file content using php file_get_contents method*/
$str_data = file_get_contents("endowmentawards.json");
$data = json_decode($str_data, true);
 
/*Initializing temp variable to design table dynamically*/

$temp = "<table class='table table-striped'>";
 
/*Defining table Column headers depending upon JSON records*/
$temp .= "<tr style='background-color:#005960;color:white;'><th>S.No</th>";
$temp .= "<th>RollNumber</th>";
$temp .= "<th>Name of the Student</th>";
$temp .= "<th>AwardName</th>";
$temp .= "<th>AwardFor</th></tr>";
 
/*Dynamically generating rows & columns*/
for($i = 0; $i < sizeof($data["Endowment Awards-2017"]); $i++)
{
$temp .= "<tr>";
$temp .= "<td>" . $data["Endowment Awards-2017"][$i]["id"] . "</td>";
$temp .= "<td>" . $data["Endowment Awards-2017"][$i]["RollNumber"] . "</td>";
$temp .= "<td>" . $data["Endowment Awards-2017"][$i]["StudentName"] . "</td>";
$temp .= "<td>" . $data["Endowment Awards-2017"][$i]["AwardName"] . "</td>";
$temp .= "<td>" . $data["Endowment Awards-2017"][$i]["AwardFor"] . "</td>";
$temp .= "</tr>";
}
 
/*End tag of table*/
$temp .= "</table>";
 
/*Printing temp variable which holds table*/
echo $temp;
?>
		</div>
      </div>
    </div>
	</div>
   <!-- <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Endowment Awards -2016</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">KMIT Awards</div>
      </div>
    </div>-->
  </div> 
  </div>
  </div>
  </div>
  </div>
  </section>
 
  
  <?php include ROOT_DIR .  '/common/footer.php'; ?>