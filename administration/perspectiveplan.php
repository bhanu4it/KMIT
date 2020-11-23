
<?php 
include '../init.php';
include ROOT_DIR .  '/common/header.php'; ?>

<style>
 .button1 {
border:2px solid #5b9aa0;
padding:initial;
text-align: justify;
text-decoration: none;
display: inline-block;
font-size: 10px;
margin: 2px 4px;
transition-duration: 0.4s;
cursor: pointer;

}

.button2 {
background-color: white; 
color: black; 
border: 2px solid #5b9aa0;
}

.button2:hover {
background-color: #5b9aa0;
}

</style>


  <div class="container" >
		<header  class="section-header">
                <h4 class="blue-clr bold">Perspective Plan</h4>
                <hr>
		</header>

    <p style="text-align:justify;font-size:90%;font-family:verdana;">KMIT has several notable innovations to its credit. We have created the Tessellator (Test and collate) which has radically and
dramatically enriched our Teaching learning process. Other extremely useful products we have built are “Sanjaya” app and
the “Netra” app for parent and student awareness and participation. Several more products are being planned to assist and
enable teaching and learning process.</p>
<p style="text-align:justify;font-size:90%;font-family:verdana;">
One of the tools being planned is for customized education for every student. We wish to use technology to ensure that we
move away from “one size fits all” philosophy of education and ensure that we created a learning environment where in every
student will learn based on the students individual capabilities.</p>

<button type="button" class="button1 button2">
<a class ="btn btn-sm btn-general btn-blue" type="button" class="button blue-clr bold" data-toggle="modal" data-target="#exampleModal" data-whatever="assets/Perspective_Plan_KMIT_08_05.pdf">
View/Download
</a>
</button>  

</div>
<br>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="width:100%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Perspective Plan</h5>
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