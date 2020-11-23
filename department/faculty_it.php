<?php 
include '../init.php';
include ROOT_DIR .  '/common/header.php'; ?>

<section _ id="faculty-cse">
<div class="container">
<div class="row">
<div class="col-md-12"><br>
<header class="section-header">
<h5 class="blue-clr bold" style="font-family:timesnewroman;font-size:160%;color:brown;" >
Faculty IT
</h4>
</header>
</div><div class="col-md-12">
<!--<h5  class="assist-prof-header">Assitant Professors &amp; Assistant Assitant Professors</h5>-->
<div class="table-responsive">
<br>

<table class="table table-striped sss;">
<thead class="thead-blue" style="background-color:#008080;font-family:timesnewroman;font-size:100%;color:white;">
<tr>
<th align="center">S.No</th>
<th align="center">Name of the faculty</th>
<th align="center">Designation</th>
<th align="center">Qualification</th>
</tr>
</thead>
<tbody style="font-family:timesnewroman;font-size:120;">

<tr>
<td >1</td>

<td><a href="../administration/hod.php"   target="_self">Dr.K.BHARGAVI</td>
<td >Professor & H.O.D</td>
<td>Ph.D</td>
</tr>
<tr>
<td>2</td>
<td><a type="button" class="button" data-whatever="profiles/IT/2.pdf" data-toggle="modal" data-target="#exampleModal">Mr.NEIL GOGTE
 </a>
 </td>
<td>Professor </td>
<td>M.Tech </td>
</tr>

<tr>
<td >3</td>
<td><a type="button" class="button" data-whatever="profiles/IT/3.pdf" data-toggle="modal" data-target="#exampleModal">Mr.K.SHIVARAMA KRISHNA </td>
<td > Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td >4</td>
<td><a type="button" class="button" data-whatever="profiles/IT/4.pdf" data-toggle="modal" data-target="#exampleModal">Mr.G.RAKESH REDDY</td>
<td> Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td >5</td>
<td><a type="button" class="button" data-whatever="profiles/IT/5.pdf" data-toggle="modal" data-target="#exampleModal">Ms.B.MANASA</td>
<td > Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td >6</td>
<td><a type="button" class="button" data-whatever="profiles/IT/6.pdf" data-toggle="modal" data-target="#exampleModal">Ms.POOJA DIXIT</td>
<td>Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td >7</td>
<td>
<a type="button" class="button" data-whatever="profiles/IT/7.pdf" data-toggle="modal" data-target="#exampleModal">Mr.NELLORE SUDHAKAR</td>
<td>Assitant Professor</td>
<td>M.Tech</td>
</tr>

<tr>
<td >8</td>
<td><a type="button" class="button" data-whatever="profiles/IT/8.pdf" data-toggle="modal" data-target="#exampleModal">Ms.M.CHANDANA</td>
<td > Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td >9</td>
<td><a type="button" class="button" data-whatever="profiles/IT/9.pdf" data-toggle="modal" data-target="#exampleModal">Ms.P.ZOHANA</td>
<td > Assitant Professor</td>
<td>M.Tech</td>
</tr>

<tr>
<td >10</td>
<td><a type="button" class="button" data-whatever="profiles/IT/10.pdf" data-toggle="modal" data-target="#exampleModal">Ms.HIMABINDU SREE</td>
<td >Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td>11</td>
<td><a type="button" class="button" data-whatever="profiles/IT/11.pdf" data-toggle="modal" data-target="#exampleModal">Ms.NIKITHA</td>
<td >Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td>12</td>
<td><a type="button" class="button" data-whatever="profiles/IT/12.pdf" data-toggle="modal" data-target="#exampleModal">Ms.SWARAJYA LAKSHMI</td>
<td>Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td>13</td>
<td><a type="button" class="button" data-whatever="profiles/IT/13.pdf" data-toggle="modal" data-target="#exampleModal">Ms.HIMABINDU</td>
<td>Assitant Professor</td>
<td>M.Tech</td>
</tr>
<tr>
<td>14</td>
<td><a type="button" class="button" data-whatever="profiles/IT/14.pdf" data-toggle="modal" data-target="#exampleModal">Ms.NIDHI SRIVASTAVA</td>
<td >Assitant Professor</td>
<td>M.Tech.</td>
</tr>
<tr>
<td >15</td>
<td><a type="button" class="button" data-whatever="profiles/IT/15.pdf" data-toggle="modal" data-target="#exampleModal">Ms.M.KEERTHI</td>
<td >Assitant Professor</td>
<td>M.Tech</td>
</tr>
</tbody>
</table></div>
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





<?php include ROOT_DIR .  '/common/footer.php'; ?>