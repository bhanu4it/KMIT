<?php 
include '../init.php';
include ROOT_DIR .  '/common/header.php'; ?>

<section  ="faculty-eie">
<div class="container">
<div class="row">
<div class="col-md-12"><br>
<header class="section-header">
<h5 class="blue-clr bold" style="font-family:timesnewroman;font-size:160%;color:brown;" >
Faculty EIE
</h4>
</header>
</div><div class="col-md-12">
<!--<h5  class="assist-prof-header">Assitant Professors &amp; Assistant Assitant Professors</h5>-->
<div class="table-responsive">
<br>

<table class="table table-striped sss" style="text-transform:capitalize;">
<thead   class="thead-blue" style="background-color:#008080;font-family:timesnewroman;font-size:110%;color:white;">
<tr>
<th style="white-space:nowrap">S.No</th>
<th style="white-space:nowrap">Name of the faculty</th>
<th style="white-space:nowrap">Designation</th>

<th style="white-space:nowrap">Qualification</th>
</tr>
</thead>
<tbody style="font-family:timesnewroman;font-size:120;text-transform: capitalize;" >


<tr>
<td >1</td>

<td><a href="../administration/hod.php"   target="_self">Ms.SWAPNA BANDARI</a></td>
<td >Assistant Professor & H.O.D</td>
<td>M.Tech</td></tr>
<tr >
<td >2</td>
<td ><a type="button" class="button" data-whatever="profiles/EIE/2.pdf" data-toggle="modal" data-target="#exampleModal">Mr.L AMARENDER REDDY </a></td>
<td >Assitant Professor </td>
<td>M.Tech </td>
</tr>

<tr>
<td >3</td>
<td><a type="button" class="button" data-whatever="profiles/EIE/3.pdf" data-toggle="modal" data-target="#exampleModal">Ms.G NAGASREE SUMA </td>
<td > Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td >4</td>
<td><a type="button" class="button" data-whatever="profiles/EIE/4.pdf" data-toggle="modal" data-target="#exampleModal">Ms.T SWETHA</td>
<td > Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td >5</td>
<td><a type="button" class="button" data-whatever="profiles/EIE/5.pdf" data-toggle="modal" data-target="#exampleModal">Mr.m.KIRAN KUMAR</td>
<td > Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td >6</td>
<td><a type="button" class="button" data-whatever="profiles/EIE/6.pdf" data-toggle="modal" data-target="#exampleModal">Ms.FATIMA</td>
<td >Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td >7</td>
<td><a type="button" class="button" data-whatever="profiles/EIE/7.pdf" data-toggle="modal" data-target="#exampleModal">Ms.SUMALATHA VANGARA</td>
<td > Assitant Professor</td>
<td>M.Tech</td>
</tr>

<tr>
<td >8</td>
<td><a type="button" class="button" data-whatever="profiles/EIE/8.pdf" data-toggle="modal" data-target="#exampleModal">Mr.SINGARAIAH Y</td>
<td > Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td >9</td>
<td><a type="button" class="button" data-whatever="profiles/EIE/9.pdf" data-toggle="modal" data-target="#exampleModal">Ms.NASREEN SULTANA</td>
<td > Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td >10</td>
<td><a type="button" class="button" data-whatever="profiles/EIE/10.pdf" data-toggle="modal" data-target="#exampleModal">Mr.RAJA SATEESH KUMAR</td>
<td >Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td >11</td>
<td><a type="button" class="button" data-whatever="profiles/EIE/11.pdf" data-toggle="modal" data-target="#exampleModal">Mr.B SREENU</td>
<td >Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td >12</td>
<td><a type="button" class="button" data-whatever="profiles/EIE/12.pdf" data-toggle="modal" data-target="#exampleModal">Mr.S RATNA KUMAR</td>
<td >Assitant Professor</td>
<td>M.Tech</td>
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
        <h5 class="modal-title" id="exampleModalLabel">Faculty Profile</h5>
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

<section  id="faculty-eie">
<div class="container">
<div class="row">
<div class="col-md-12"><br>
<header class="section-header">
<h5 class="blue-clr bold" style="font-family:timesnewroman;font-size:160%;color:brown;" >
Non-Teaching Faculty EIE
</h4>
</header>
</div><div class="col-md-12">
<!--<h5  class="assist-prof-header">Assitant Professors &amp; Assistant Assitant Professors</h5>-->
<div class="table-responsive">
<br>

<table class="table table-striped sss" style="text-transform:capitalize;">
<thead class="thead-blue" style="background-color:#008080;font-family:timesnewroman;font-size:110%;color:white;">
<tr >
<th style="white-space:nowrap">S.No</th>
<th style="white-space:nowrap">Name of the faculty</th>
<th style="white-space:nowrap">Designation</th>
</tr>
</thead>
<tbody style="font-family:timesnewroman;font-size:120;text-transform: capitalize;" >

<tr><td >1</td>

<td>Mr.Ramesh Mande</td>
<td >lab assistant</td>
</tr>
<tr><td >2</td>

<td>Mr.P Prabhakar Despande</td>
<td >lab assistant</td>
</tr>
<tr><td >3</td>

<td>Mr.Srikanth Chary Challapuram</td>
<td >lab assistant</td>
</tr>
<tr><td >4</td>

<td>Ms.ArunJyothi</td>
<td >lab assistant</td>
</tr>


</tbody>
</table></div></div></div></div></section>






<?php include ROOT_DIR .  '/common/footer.php'; ?>