
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
                <h4 class="blue-clr bold">HR Policy</h4>
                <hr>
		</header>

    <p style="text-align:justify;font-size:90%;font-family:verdana;">Any professional institution, aspiring for growth and development in the field of
education, should have a clear vision of its policies and procedures for the furtherance and
fruition of its activities. Not with standing good infrastructure in terms of buildings, laboratories,
staff and other amenities, over-all academic achievement will be painfully low if the procedures,
duties, responsibilities and target of every member of the teaching faculty and other employees
are not clearly defined and strictly adhered to.
</p>
<p style="text-align:justify;font-size:90%;font-family:verdana;">
Individuals can put in their best efforts and direct their energies to the total fulfillment of
their tasks, only if their duties and responsibilities are clearly known to them. Efficient
functioning, achieving the targets, building individual profiles, avoidance of confusion and
creation of good rapport with colleagues are possible only if the individuals are fully aware of
the procedures and policies.</p>

<button type="button" class="button1 button2">
<a class ="btn btn-sm btn-general btn-blue" type="button" class="button blue-clr bold" data-toggle="modal" data-target="#exampleModal" data-whatever="assets/KMIT- HR POLICY.pdf">
View/Download
</a>
</button>  

</div>
<br>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="width:100%;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">HR Policy</h5>
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