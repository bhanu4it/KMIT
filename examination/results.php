<?php 
include '../init.php';
include ROOT_DIR .  '/common/header.php'; ?>

<br>


<section  id="downloads">

<div  class="container">
<div  class="row">
<div class="col-md-12">
<!--academic year data -->
<h5 class="blue-clr bold" style="font-family:timesnewroman;font-size:150%;color:brown;" >
B.Tech Examination Results</h5>
<hr/>

<div  class="table-responsive">

<table  class="table table-striped" style="table-layout:auto;font-family:verdana;">

<thead class="thead-blue" style="background-color:#008080;font-family:timesnewroman;font-size:110%;color:white;">
<tr >
<th  scope="col">Examination Results</th>
<th  scope="col">Date of Posted</th>

</tr>
</thead>

<tbody style="font-family:verdana;font-size:90%;">

<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech IV Year II sem (R16) Regular Examinations </b>
 </b>
 </a>
 </td>
<td> 01.11.2020</td>
</tr>


<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech IV Year II sem (R15) Supplementary Examinations </b>
 </b>
 </a>
 </td>
<td> 01.11.2020</td>
</tr>


<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech IV Year II sem (R13) Supplementary Examinations </b>
 </b>
 </a>
 </td>
<td> 01.11.2020</td>
</tr>


<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech IV Year II sem (R09) Supplementary Examinations </b>
 </b>
 </a>
 </td>
<td> 01.11.2020</td>
</tr>

<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech I Year I sem (R18) Regular Examinations </b>
 </b>
 </a>
 </td>
<td> 03.03.2020</td>
</tr>

<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech I Year I sem (R16) Supplementary Examinations </b>
 </b>
 </a>
 </td>
<td> 03.03.2020</td>
</tr>


<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech I Year (R15) Supplementary Examinations </b>
 </b>
 </a>
 </td>
<td> 03.03.2020</td>
</tr>
<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech I Year (R13) Supplementary Examinations </b>
 </b>
 </a>
 </td>
<td> 03.03.2020</td>
</tr>
<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech I Year (R09) Supplementary Examinations </b>
 </b>
 </a>
 </td>
<td> 03.03.2020</td>
</tr>
<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech III Year  II Sem (R16) Supplementary Examinations </b>
 </b>
 </a>
 </td>
<td> 20.02.2020</td>
</tr>

<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech III Year  II Sem (R15) Supplementary Examinations </b>
 </b>
 </a>
 </td>
<td> 20.02.2020</td>
</tr>
<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech III Year  II Sem (R13) Supplementary Examinations </b>
 </b>
 </a>
 </td>
<td> 20.02.2020</td>
</tr>

<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech III Year  II Sem (R09) Supplementary Examinations </b>
 </b>
 </a>
 </td>
<td> 20.02.2020</td>
</tr>
<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech II Year  II Sem (R16) Supplementary Examinations </b>
 </b>
 </a>
 </td>
<td> 20.02.2020</td>
</tr>

<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech II Year  II Sem (R15) Supplementary Examinations </b>
 </b>
 </a>
 </td>
<td> 20.02.2020</td>
</tr>
<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech II Year  II Sem (R13) Supplementary Examinations </b>
 </b>
 </a>
 </td>
<td> 20.02.2020</td>
</tr>

<tr>
<td ><a href="http://results.jntuh.ac.in" target="_blank">
 <b> B.Tech II Year  II Sem (R09) Supplementary Examinations </b>
 </b>
 </a>
 </td>
<td> 20.02.2020</td>
</tr>











</tbody>
</table>
</div>
</div>
</div>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="width:80%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
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

</section>
<br>
  <script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var pdf = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('id').text(pdf)
  PDFObject.embed(pdf, "#example1");
})
</script>



  
  <?php include ROOT_DIR .  '/common/footer.php'; ?>