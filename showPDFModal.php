<?php 
include 'init.php';
include ROOT_DIR .  '/common/header.php'; ?>

  <style>
    .pdfobject-container { height: 30rem; border: 1rem solid rgba(0,0,0,.1); }
  </style>
 
       

<!--  trigger modal -->
<a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/new_features/sample.pdf'; ?>">Launch PDF 1</a><br><br>
<a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/nirf/nirf_2018.pdf'; ?>">Launch PDF 2</a><br><br>
<a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/nirf/nirf_2019.pdf'; ?>">Launch PDF 3</a>
<a type="button" class="button" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo ROOT_URL .  '/nirf/nirf_2019.pdf'; ?>">Launch PDF 3</a>






<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="results" class="hidden"></div>

      <div id="pdf"></div>
      </div>
    </div>
  </div>
</div>
 


<script>
$('#exampleModal').on('show.bs.modal', function (event) {

  var options = {
	pdfOpenParams: {
		navpanes: 0,
		toolbar: 0,
		statusbar: 0,
		view: "FitV",
		page: 1
	},
	forcePDFJS: true,
	PDFJS_URL: "<?php echo ROOT_URL .  '/pdfjs/web/viewer.html'; ?>"
};


  var button = $(event.relatedTarget) // Button that triggered the modal
  var pdf = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text(pdf)
  //PDFObject.embed(pdf, "#example1");
  var myPDF = PDFObject.embed(pdf, "#pdf", options);
  var el = document.querySelector("#results");
  el.setAttribute("class", (myPDF) ? "success" : "fail");
  el.innerHTML = (myPDF) ? "" : "Uh-oh, the embed didn't work.";
})
</script>


  

<?php include ROOT_DIR .  '/common/footer.php'; ?>