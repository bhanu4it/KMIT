<?php 
include '../init.php';
include ROOT_DIR .  '/common/header.php'; ?>

  <br>
<section id="regulations">
<div class="container">
<div class="row">
<div class="col-md-12">
<header class="section-header">
<h4 class="blue-clr bold" style="font-family:timesnewroman;font-size:200%;color:brown;">Regulations</h4></header>
<p style="text-align:justify;font-size:90%;font-family:verdana;">The departments of the KMIT are responsible for the academic activities which include Teaching, Research and Industrial Consultancy. The courses of study are organized on semester basis. The medium of instruction is English. 
</p>
<p style="text-align:justify;font-size:90%;font-family:verdana;">Students are evaluated on a continuous basis each academic year which consists of two semesters with each semester providing a minimum of seventeen weeks of instructions. Evaluation comprises of Continuous Internal Evaluation(CIE) ans Semester End Examination (SEE). The rigours of academic study at each level are balanced with a number of other related activities which include co-curricular activities. </p>
<p style="text-align:justify;font-size:90%;font-family:verdana;">Special lectures on varied topic of academic relevance are held under the Extra Mural Lecture series. A number of conferences, symposia and workshops are organized by the faculty which attract participation from scholars from all corners of India and abroad Guest lectures and industrial visits complement classroom interactions. </p>
<p style="text-align:justify;font-size:90%;font-family:verdana;">The academic atmosphere at the Institute is a rare blend of modern day technical skills and the traditional emphasis on imparting knowledge. All the academic activities at institute are monitored by Dean Academic Affairs and can be viewed through the academic calendar, time tables of individual programmes, examination schedules and yearly college diary. 
</p>
<h6 class="blue-clr bold"style="font-family:timesnewroman;font-size:150%;color:brown;">
Academic Regulations of B.Tech Program:</h6>
<div class="table-responsive">
<table class="table table-striped">
<thead style="background-color:#006E6D;color:white;font-size:90%;">
<tr>
<th>S.No</th>
<th>Academic Regulations</th>
<th>Regulation</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td><a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="calendars/R18B.TECHAcademicRegulations2.pdf">
B.Tech R18 Academic Regulations
</a></td>
<td>R18</td>
</tr>
<tr>
<td>2</td>
<td><a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="calendars/R16B.TECHAcademicRegulations.pdf">
B.Tech R16 Academic Regulations
</a></td>
<td>R16</td>
</tr>
<tr>
<td>3</td>
<td><a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="calendars/R15AcadRegulationsRevisedB.Tech2015_16.pdf">
B.Tech R15 Academic Regulations
</a></td>
<td>R15</td>
</tr>
<tr>
<td>4</td>
<td><a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="calendars/R13RevisedAcademicRegulationsforB.Tech.pdf">
B.Tech R13 Academic Regulations
</a></td>
<td>R13</td>
</tr>
</tbody>
</table>
</div>
<h6 class="blue-clr bold"style="font-family:timesnewroman;font-size:150%;color:brown;">
Academic Year wise Regulations</h6>
<div class="table-responsive">
<table class="table table-striped">
<thead style="background-color:#006E6D;color:white;font-size:90%;">
<tr>
<th scope="col">S.No</th>
<th scope="col">Academic Year</th>
<th scope="col">I Year</th>
<th scope="col">II Year</th>
<th scope="col">III Year</th>
<th scope="col">IV Year</th>
</tr>
</thead>
<tbody>
<tr style="font-family:verdana;">
<td>1</td>
<td>2020-21</td>
<td>NA</td>
<td>R18</td>
<td>R18</td>
<td>R16</td></tr>
<tr style="font-family:verdana;">
<td>2</td>
<td>2019-20</td>
<td>R18</td>
<td>R18</td>
<td>R16</td>
<td>R16</td></tr>
<tr style="font-family:verdana;">
<td>3</td>
<td>2018-19</td>
<td>R18</td>
<td>R16</td>
<td>R16</td>
<td>R15</td>
</tr>
<tr style="font-family:verdana;">
<td>4</td>
<td>2017-18</td>
<td>R16</td>
<td>R16</td>
<td>R15</td>
<td>R13</td>
</tr>
<tr style="font-family:verdana;">
<td>5</td>
<td>2016-17</td>
<td>R16</td>
<td>R15</td>
<td>R13</td>
<td>R13</td>
</tr>
</tbody>
</table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="width:100%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Academic Regulations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="example1"></div>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</div></section>
<script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var pdf = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.id').text(pdf)
  PDFObject.embed(pdf, "#example1");
})
</script>
  
<?php include ROOT_DIR .  '/common/footer.php'; ?>