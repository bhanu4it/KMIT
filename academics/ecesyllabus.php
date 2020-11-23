<?php 
include '../init.php';
include ROOT_DIR .  '/common/header.php'; ?>


  <section>
  <div class="container">
<h2 class="blue-clr bold" style="font-family:timesnewroman;font-size:200%;color:brown;">ECE Syllabus</h2>

<div class="box"><a type="button" class="button" data-whatever="syllabus/ECE/R18B.TechIYearSyllabusofECEEIE.pdf" data-toggle="modal" data-target="#exampleModal">ECE R18 SYLLABUS for I YEAR</a></div>
<div class="box"><a type="button" class="button" data-whatever="syllabus/ECE/ECE_R18_BTECH_II_YEAR.pdf" data-toggle="modal" data-target="#exampleModal">ECE R18 SYLLABUS for II YEAR</a></div>
<div class="box"><a type="button" class="button" data-whatever="syllabus/ECE/R18B.Tech.ECEIIIYearSyllabus.pdf" data-toggle="modal" data-target="#exampleModal">ECE R18 SYLLABUS for III YEAR</a></div>
<div class="box"><a type="button" class="button" data-whatever="syllabus/ECE/B.Tech.IISem.SyllabusofCSE,ECE,EEEetc.R16.pdf" data-toggle="modal" data-target="#exampleModal">ECE R16 SYLLABUS for I YEAR</a></div>
<div class="box"><a type="button" class="button" data-whatever="syllabus/ECE/R16B.TECH-ECE-II-Year-Syllabus.pdf" data-toggle="modal" data-target="#exampleModal">ECE R16 SYLLABUS for II YEAR</a></div>
<div class="box"><a type="button" class="button" data-whatever="syllabus/ECE/R16B.TECH-ECE-III-Year-Syllabus.pdf" data-toggle="modal" data-target="#exampleModal">ECE R16 SYLLABUS for III YEAR</a></div>
<div class="box"><a type="button" class="button" data-whatever="syllabus/ECE/R16B.TechECEIVYearRevisedSyllabus1.pdf" data-toggle="modal" data-target="#exampleModal">ECE R16 SYLLABUS for IV YEAR</a></div>
<div class="box"><a type="button" class="button" data-whatever="syllabus/ECE/R16B.TechOpenElectives.pdf" data-toggle="modal" data-target="#exampleModal">R16 OPEN ELECTIVE SYLLABUS</a></div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="width:80%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ECE Syllabus</h5>
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
<br>
  
<?php include ROOT_DIR .  '/common/footer.php'; ?>