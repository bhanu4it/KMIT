<?php 
include '../init.php';
include ROOT_DIR .  '/common/header.php'; ?>
<style>
.bestpracticeskmit div:hover,
.bestpracticeskmit .first,.bestpracticeskmit .first a{
background:teal !important;
color:#fff !important;cursor:pointer;
}
</style>

<br>
<section id="academic-calender">
<div class="container">
<div class="row">
<div class="col-md-12">
<header class="section-header">
<h4 class="blue-clr bold" style="font-family:timesnewroman;font-size:200%;color:brown;">Academic Calenders</h4>
</header>
<div class="box">
<a type="button" id="Academic Calendar 2020-2021 for B.Tech II III &AMP IV Years" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="calendars/Academic_Calendars_2020-21- for II_III_IV years.pdf">
Academic Calendar 2020-2021 for B.Tech II III &AMP IV Years
</a>
</div>
<div class="box">
<a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="calendars/ACADEMIC_CALENDAR_Ist_Year_2019-20.pdf">
Academic Calendar 2019-20 for B.Tech I Year</a>
</div>
<div class="box">
<a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="calendars/Academic_Calendars_2019-20- for II_III_IV years.pdf">
Academic Calendar 2019-20 for B.Tech II III &AMP IV Years</a>
</div>
<div class="box">
<a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="calendars/Academic_Calendar_2018-19_for_B._TECH_II,_III,_IV_Years.pdf">
Academic Calendar 2018-19 for B.Tech II III &AMP IV Years</a>
</div>
<div class="box">
<a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="calendars/Revised_B.Tech_I_year_Calendar_2018-19.pdf">
Academic Calendar 2018-19 for B.Tech I Year</a>
</div>
<div class="box">
<a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="calendars/Academic_Calendar_2017-18 for B.Tech_I_year.pdf">
Academic Calendar 2017-18 for B.Tech I Year</a>
</div>
<div class="box">
<a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="calendars/Academic_Calendar_2017_18-BTech_II_III_IV_Years.pdf">
Academic Calendar 2017-18 for B.Tech II,III &amp IV Years</a>
</div>
<div class="box">
<a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="calendars/II_III_IV_Year_B.Tech_._B_._Pharm_._2016-17.pdf">Academic Calendar 2016-17 for B.Tech II III &amp IV Year</a>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="width:100%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Academic Calendar</h5>
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
</div>
</section>
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